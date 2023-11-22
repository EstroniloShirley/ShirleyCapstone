<?php


namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;


class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
  
            $appointments = Appointment::all();
            return view('appointments.index', ['appointments' => $appointments]);
            
        
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
            'last_name'=> 'required',
            'gender' => 'required',
            'birth_date'=> 'required',
            'phone'=> 'required|numeric',
            'address'=> 'required',
            'service_type'=> 'required',
            'concern'=> 'required'
        ]);

        $newAppointment = Appointment::create($data);

        return redirect(route('appointments.index'));
    }


    
    /**
     * Display the specified resource.
     */
    public function show(Appointment $data) {
        return view('appointments.show' , [
            'appointment' => $data
        ]);
    }

   
    public function edit(Appointment $appointment){
        return view ('appointments.edit', ['appointment' => $appointment]);
    }

    public function update(Appointment $appointment, Request $request){
        $appointments = $request -> validate ([
       
            'first_name' => 'required',
            'last_name'=> 'required',
            'gender' => 'required',
            'birth_date'=> 'required',
            'phone'=> 'required|numeric',
            'address'=> 'required',
            'service_type'=> 'required',
            'concern'=> 'required'
            
          ]);

          $appointment->update($appointments);

          return redirect(route('appointment.index'))->with('success', 'Your Appointment Updated Successfully!');
    }

    
    public function destroy(Appointment $appointment){
        $appointment->delete ();
        return redirect(route('appointments.index'))->with('success', 'Your Appointment Deleted Successfully!');

    }
}
