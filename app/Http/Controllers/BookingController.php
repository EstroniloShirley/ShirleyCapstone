<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
  

            $bookings = Booking::all();

            return view('bookings.index', ['bookings' => $bookings]);
            
        
    }

    //Show Create Monday Form
  public function create() {
    return view('appointments.create-mon');
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        
        $data = $request->validate([
            'id' => ' ',
            'first_name' => 'required',
            'gender' => 'required',
            'birth_date'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'service_type'=> 'required',
            'concern'=> 'required'
        ]);

        $newAppointment = Booking::create($data);

        return redirect(route('appointments.index'));
    }

}
