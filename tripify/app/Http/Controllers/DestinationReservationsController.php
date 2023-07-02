<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Interfaces\IDestinationReservationStatuses;
use App\Models\DestinationReservations;
use App\Models\DestinationReservationStatuses;
use Config;
use Illuminate\Http\Request;

class DestinationReservationsController extends Controller implements IDestinationReservationStatuses
{
   
    public function getAllDestinationReservations()
    {
        $reservations = DestinationReservations::all();

        return view('agency-profile', compact('reservations'));
    }

    public function getAllDestinationReservationsById($destinationId)
    {

        $reservations = DestinationReservations::whereRelation('destinations', 'id', $destinationId)->get();

        return view('user-profile', compact('reservations'));
    }

    public function createReservation(Request $request)
    {
        $reservation = new DestinationReservations();
        $pendingStatus = Config::get('enums.destination_reservation_statuses.PEND');

        $reservation->user_id = auth()->user()->id;
        $reservation->destination_id = $request->destination_id;
        $reservation->reserv_status_id = $this->getAllDestinationReservationStatuses()->where('id', $pendingStatus)->first();

        $reservation->save();

        redirect('\user-profile');
    }

    private function getAllDestinationReservationStatuses(){
        $dest_res_statuses = DestinationReservationStatuses::all();

        return $dest_res_statuses;
    }
}
