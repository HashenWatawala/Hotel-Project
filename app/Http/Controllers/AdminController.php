<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Room;

use App\Models\Booking;

use App\Models\gallary;

use App\Models\Contact;

class AdminController extends Controller
{
    public function index(){

        if(Auth::id()){
            $usertype = Auth()->user()->usertype;

            if($usertype == 'user'){
                $room = Room::all();
                $gallary = gallary::all();
                return view('home.index', compact('room', 'gallary'));
            }
            if($usertype == 'admin'){
                return view('admin.index');
            }
            else{
                return redirect()->back();
            }
        }

    }

    public function home(){
        $room = Room::all();
        $gallary = gallary::all();
        return view('home.index', compact('room', 'gallary'));
    }

    public function create_room(){
        return view('admin.create_room');
    }

    public function add_room(Request $request){

        $data = new Room();

        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room',$imagename);

            $data->image=$imagename;
        }
        $data->save();

        return redirect()->back();

    }

    public function view_room(){
        
        $data = Room::all();

        return view('admin.view_room',compact('data'));
    }

    public function room_delete($id){

        $data = Room::find($id);
        $data->delete();

        return redirect()->back();
    }
    public function room_update($id){

        $data = Room::find($id);
        return view('admin.update_room',  compact('data'));
    }

    public function edit_room(Request $request , $id){
        $data = Room::find($id);
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->type;
        $image=$request->image;
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('room',$imagename);

            $data->image=$imagename;
        }
        $data->save();
        return redirect()->back();

    }
    public function bookings(){
        $data = Booking::all();
        return view('admin.booking', compact('data'));
    }

    public function delete_booking($id){
        $data = Booking::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function approve_book($id){
        $bookings = Booking::find($id);
        $bookings->status = 'approve';
        $bookings->save();
        return redirect()->back();
    }
    public function reject_book($id){
        $bookings = Booking::find($id);
        $bookings->status = 'rejected';
        $bookings->save();
        return redirect()->back();
    }
    public function view_gallary(){
        $gallary = gallary::all();
        return view('admin.gallary', compact('gallary'));
    }
    public function upload_gallary(Request $request){
        $data = new gallary;
        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('gallary',$imagename);

            $data->image=$imagename;

            $data->save();

            return redirect()->back();
        }
    }
    public function delete_gallary($id){
        $data = gallary::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function all_messages (){
        $data = Contact::all();
        return view('admin.all_messages', compact('data'));
    }

    public function send_mail($id){
        $data = Contact::find($id);
        return view('admin.send_mail', compact('data'));
    }
}
