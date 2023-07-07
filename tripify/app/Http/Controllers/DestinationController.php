<?php

namespace App\Http\Controllers;

use App\Models\Attractions;
use App\Models\Destination;
use App\Models\DestinationReservations;
use App\Models\DestinationTransportType;
use App\Models\DestinationTypes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DestinationController extends Controller
{
    public function get(int $id)
    {
        $destination = Destination::find($id);

        if (is_null($destination)) {
            return redirect('/')
                ->with('error', "No such destination in database!");
        }

        $attractions = Attractions::where('destination_id', $id)->get();

        $transportation = DestinationTransportType::find($destination->dest_transp_type_id);
        $type = DestinationTypes::find($destination->dest_type_id);

        $userRoleID = config('enums.roles.USER');
        $authUserRoleID = is_null(Auth::user()) ? -1 : User::find(Auth::user()->id)->role_id;

        $canBookReservation = $authUserRoleID == $userRoleID && $destination->capacity > 0;

        $didMakeReservation = DestinationReservations::where('destination_id', $id)
            ->where('user_id', is_null(Auth::user()) ? -1 : Auth::user()->id)
            ->exists();

        return view('destination_details')
            ->with('destination', $destination)
            ->with('attractions', $attractions)
            ->with('transportation', $transportation)
            ->with('type', $type)
            ->with('canBookReservation', $canBookReservation)
            ->with('didMakeReservation', $didMakeReservation);
    }

    public function getForm()
    {
        $userRoleID = config('enums.roles.USER');
        $authUserRoleID = User::find(Auth::user()->id)->role_id;

        if ($authUserRoleID == $userRoleID) {
            return redirect('/');
        }

        return view('form.create_destination');
    }

    public function create(Request $request)
    {
        $destination = Destination::create([
            'name' => $request->name,
            'description' => $request->description,
            'cost' => $request->cost,
            'dest_type_id' => 1,
            'dest_transp_type_id' => 1,
            'state_id' => 1,
            'created_by_id' => Auth::user()->id,
            'capacity' => $request->capacity,
            'picture' => $request->picture
        ]);

        if (is_null($destination)) {
            return response('Error saving destination!', 500);
        }

        foreach ($request->attractions as $index => $attraction) {
            Attractions::create([
                'name' => $attraction['name'],
                'description' => $attraction['description'],
                'destination_id' => $destination->id,
                'picture' => $attraction['picture']
            ]);
        }

        return redirect('/destination/' . $destination->id);
    }

    public function getEditForm($id)
    {
        $userRoleID = config('enums.roles.USER');
        $authUserRoleID = User::find(Auth::user()->id)->role_id;

        if ($authUserRoleID == $userRoleID) {
            return redirect('/');
        }

        $destination = Destination::find($id);

        if (is_null($destination)) {
            return response('No such destination in database :(', 404);
        }

        if ($destination->created_by_id != Auth::user()->id) {
            return response('You are not allowed to delete this destination :(', 403);
        }

        return view('form.edit_destination')
            ->with('destination', $destination);
    }

    public function edit(Request $request, $id)
    {
        $destination = Destination::find($id);

        if (is_null($destination)) {
            return response('No such destination in database :(', 404);
        }

        if ($destination->created_by_id != Auth::user()->id) {
            return response('You are not allowed to delete this destination :(', 403);
        }

        $destination->update($request->all());

        return redirect('/profile');
    }

    public function delete($id)
    {
        $destination = Destination::find($id);

        if (is_null($destination)) {
            return response('No such destination in database :(', 404);
        }

        if ($destination->created_by_id != Auth::user()->id) {
            return response('You are not allowed to delete this destination :(', 403);
        }

        Attractions::where('destination_id', $destination->id)->delete();
        DestinationReservations::where('destination_id', $destination->id)->delete();

        $destination->delete();

        return redirect()->back();
    }
}
