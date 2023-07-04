<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function get()
    {
        $agencyRoleID = config('enums.user_roles.AGN');

        $agencies = User::where('role_id', $agencyRoleID)
            ->orderBy('id', 'desc')
            ->take(4)
            ->get();

        $featuredAgency = is_array($agencies) && count($agencies) > 0 ? array_shift($agencies) : null;

        return view('index', [$featuredAgency, $agencies]);
    }
}
