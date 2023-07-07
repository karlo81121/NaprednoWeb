<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\IDestinationReservationStatuses;
use App\Models\Destination;
use App\Models\DestinationReservations;
use App\Models\DestinationReservationStatuses;
use App\Models\User;
use Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestinationReservationsController extends Controller
{
    public function create($id)
    {
        $agencyRoleID = config('enums.roles.AGN');
        $authUserRoleID = User::find(Auth::user()->id)->role_id;

        if ($authUserRoleID == $agencyRoleID) {
            return response('Agencies can not make reservations for trips', 400);
        }

        $reservation = DestinationReservations::create([
            'user_id' => Auth::user()->id,
            'destination_id' => $id,
            'reserv_status_id' => 0
        ]);

        if (is_null($reservation)) {
            return response('Unable to make reservation', 500);
        }

        return redirect()->back();
    }

    public function approve($id)
    {
        $reservation = DestinationReservations::find($id);

        if (is_null($reservation)) {
            return redirect()->back();
        }

        $destination = Destination::find($reservation->destination_id);

        if (is_null($destination)) {
            return redirect()->back();
        }

        if ($destination->created_by_id != Auth::user()->id) {
            return response('You dont have required rights to approve the reservation', 403);
        }

        $reservation->reserv_status_id = config('enums.destination_reservation_statuses.APPR');
        $destination->capacity -= 1;
        $destination->save();

        DestinationReservations::where('destination_id', $reservation->destination_id)
            ->where('reserv_status_id', 0)
            ->delete();

        return redirect()->back();
    }

    public function delete($id)
    {
        $reservation = DestinationReservations::find($id);

        if (is_null($reservation)) {
            return redirect()->back();
        }

        $agencyRoleID = config('enums.roles.AGN');
        $userRoleID = config('enums.roles.USER');
        $authUserRoleID = User::find(Auth::user()->id)->role_id;

        switch ($authUserRoleID) {
            case  $agencyRoleID:
                $destination = Destination::find($id);

                if (is_null($destination)) {
                    break;
                }

                if ($destination->created_by_id != Auth::user()->id) {
                    return response('Unable to delete reservation', 403);
                }

                $reservation->delete();

                break;
            case $userRoleID:
                if ($reservation->user_id != Auth::user()->id) {
                    return response('Unable to delete reservation', 403);
                }

                $reservation->delete();

                break;
            default:
                return response('No such user role in database :(', 500);
        }

        return redirect()->back();
    }
}
