<?php

namespace App\Http\Controllers;

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

        return view('agency_details')
            ->with('agency', $agency)
            ->with('destinations', null);
    }
}
