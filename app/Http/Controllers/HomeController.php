<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\Booking;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function room_details($id){
        $room = Room::find($id);
        return view("home.room_details",compact("room"));
    }

    public function add_booking(Request $request, $id){

        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'date|after:startDate',
        ]);

        $data  = new Booking;

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $startDate = $request->startDate;
        
        $endDate = $request->endDate;

        $isBooked = Booking::where('')

       /* $data->start_date = $request->startDate; 

        $data->end_date = $request->endDate;*/

        $data->save();

        return redirect()->back()->with('message', 'Room Booked Successfully');

    }
    //
}
