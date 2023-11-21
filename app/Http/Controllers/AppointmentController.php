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
            'middle_name'=> 'nullable',
            'last_name'=> 'required',
            'suffix_name'=> 'nullable',
            'gender' => 'required',
            'birth_date'=> 'required',
            'phone'=> 'required',
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
