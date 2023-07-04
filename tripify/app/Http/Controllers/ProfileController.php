<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\DestinationReservations;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function get()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if (is_null($user)) {
            return response('No such user in database :(', 404);
        }

        $agencyRoleID = config('enums.roles.AGN');
        $userRoleID = config('enums.roles.USER');

        switch ($user->role_id) {
            case  $agencyRoleID:
                return $this->getAgencyProfile();
            case $userRoleID:
                return $this->getUserProfile();
            default:
                return response('No such user role in database :(', 500);
        }
    }

    private function getAgencyProfile()
    {
        $destinations = Destination::where('created_by_id', Auth::user()->id)->get();
        
        $pendingReservationStatusID = config('enums.destination_reservation_statuses.PEND');

        $reservations = DestinationReservations::join('destinations', 'destination_reservations.destination_id', '=', 'destinations.id')
            ->join('users', 'destination_reservations.user_id', '=', 'users.id')
            ->where('destination_reservations.reserv_status_id', $pendingReservationStatusID)
            ->where('destinations.created_by_id', Auth::user()->id)
            ->select('users.name', 'destinations.name AS destinationName', 'destinations.picture', 'destination_reservations.id')
            ->get();

        return view('profile.agency')
            ->with('destinations', $destinations)
            ->with('reservations', $reservations);
    }

    private function getUserProfile()
    {
        return view('profile.user');
    }
}
