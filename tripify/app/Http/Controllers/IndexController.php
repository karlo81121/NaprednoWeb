<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function get()
    {
        $agencyRoleID = config('enums.roles.AGN');

        $agencies = User::inRandomOrder()
            ->where('role_id', $agencyRoleID)
            ->orderBy('id', 'desc')
            ->take(4)
            ->get();

        $featuredAgency = ($agencies instanceof Collection && (count($agencies) > 0)) ? $agencies[0] : null;

        if ($agencies instanceof Collection) {
            $agencies->shift();
        }

        $destinations = Destination::inRandomOrder()
            ->take(3)
            ->get();

        $featuredDestination = Destination::inRandomOrder()
            ->where('created_by_id', $featuredAgency->id)
            ->take(1)
            ->get()
            ->first();

        if (is_null($featuredAgency) && (count($destinations) <= 0) && (count($agencies) <= 0)) {
            return response('No data in database :(', 404);
        }

        return view('index')
            ->with('featuredAgency', $featuredAgency)
            ->with('featuredDestination',$featuredDestination)
            ->with('destinations', $destinations)
            ->with('agencies', $agencies);
    }
}
