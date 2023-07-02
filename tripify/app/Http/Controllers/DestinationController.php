<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    
    public function getAllDestinations()
    {
        $destinations = Destination::all();
        
        return view('dashboard', compact('destinations'));
    }

    public function createDestination(Request $request)
    {
        $destination = new Destination;

        $destination->name = $request->name;
        $destination->description = $request->description;
        $destination->cost = $request->cost;
        $destination->dest_type_id = $request->dest_type_id;
        $destination->dest_transp_type_id = $request->dest_transp_type_id;
        $destination->dest_status_id = $request->dest_status_id; 
        $destination->state_id = $request->state_id;
        $destination->canc_reason_id = $request->canc_reason_id;
        $destination->timestamps = $request->created_at;

        $destination->save();

        return redirect('/dashboard');
    }


    public function editDestination($id)
    {
        $destinationForUpdate = Destination::find($id);

        return view('edit-destination', compact('destinationForUpdate'));
    }

    public function updateDestination(Request $request)
    {
        $destinationForUpdate = Destination::find($request->input('id'));

        $destinationForUpdate->name = $request->name;
        $destinationForUpdate->description = $request->description;
        $destinationForUpdate->cost = $request->cost;
        $destinationForUpdate->dest_type_id = $request->dest_type_id;
        $destinationForUpdate->dest_transp_type_id = $request->dest_transp_type_id;
        $destinationForUpdate->dest_status_id = $request->dest_status_id;
        $destinationForUpdate->state_id = $request->state_id;

        $destinationForUpdate->save();

        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
