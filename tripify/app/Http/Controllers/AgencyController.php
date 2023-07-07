<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Http\Request;

class AgencyController extends Controller
{
    public function get($id)
    {
        $agency = User::find($id);

        if (is_null($agency) || $agency->role_id != config('enums.roles.AGN')) {
            return response('No such agency in database :(', 404);
        }

        $destinations = Destination::where('created_by_id', $id)
            ->get();

        return view('agency_details')
            ->with('agency', $agency)
            ->with('destinations', $destinations);
    }
}
