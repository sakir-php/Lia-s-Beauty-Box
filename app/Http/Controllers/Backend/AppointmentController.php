<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::orderBy('id', 'desc')->get();
        return view('backend.appointment.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $serviceCategories = ServiceCategory::all();
        return view('backend.appointment.create',compact('users', 'serviceCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'phone'     => 'required',
        ]);

        $user = User::where('phone', $request->phone)->first();

        if($user){
            $request->validate([
                'appointment_data'  => 'required|string', // get from hidden
                'schedule'          => 'required|exists:schedules,id', // get from hidden
                'service'           => 'required|exists:services,id',
                'message'           => 'nullable|string',
            ]);
        }else{
            $request->validate([
                'name'      => 'required|string',
                'email'     => 'required|unique:users,email',
                'phone'     => 'required|unique:users,phone',
                'appointment_data' => 'required|string', // get from hidden
                'schedule'  => 'required|exists:schedules,id', // get from hidden
                'service'   => 'required|exists:services,id',
                'message'   => 'nullable|string',
            ],
            [
                'email.unique' => 'This email already used. Please use another email.',
                'phone.unique' => 'This phone number already used. Please use another phone number.',
            ]);
            $password = Str::random(8);
            $user = new User();
            $user->name         = $request->name;
            $user->email        = $request->email;
            $user->phone        = $request->phone;
            $user->password     = bcrypt($password);
            $user->save();
        }

        try{
            $appointment = new Appointment();
            $appointment->customer_id       = $user->id;
            $appointment->appointment_data  = date('Y-m-d',strtotime($request->appointment_data));
            $appointment->schedule_id       = $request->schedule;
            $appointment->service_id        = $request->service;
            $appointment->message           = 'Booking by admin';
            $appointment->booked_by_admin   = true;
            $appointment->save();
        }catch(\Exception $exception){
            if (request()->ajax()) {
                return [
                    'type' => 'error',
                    'message' => 'Something went wrong.',
                ];
            }
            toastr()->error('Something went wrong!');
            return back();
        }

        if (request()->ajax()) {
            return [
                'type' => 'success',
                'message' => 'Successfully done.',
            ];
        }

        toastr()->success('Successfully Done!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}