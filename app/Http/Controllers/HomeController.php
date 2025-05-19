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

        $data  = new Booking;

        $data->room_id = $id;

        $data->name = $request->name;

        $data->email = $request->email;

        $data->start_data = $request->start_data;

        $data->end_data = $request->end_data;

        $data->save();

    }
    //
}
