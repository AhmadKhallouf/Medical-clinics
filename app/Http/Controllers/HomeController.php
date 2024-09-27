<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use App\Models\Cost;
use App\Models\Date;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $clinics = Clinic::orderBy('number_of_booking_times','desc')->with('users:id,first_name,last_name,image')->take(6)->get();
        return view('index',compact('clinics'));

    }

    //this function direct the user to the appropriate page : user or admin
    public function redirect(){
        $user = auth()->user();

        if ($user->type == 'doctor') {

            $clinic = Clinic::where('user_id',$user->id)->exists();

            if($clinic){

                $total_appointments = 0; 
                $total_patients = 0;
                $today = Carbon::today()->toDateString();
                $clinic = Clinic::where('user_id',$user->id)->with('costs')->with(['dates' => function ($query) use ($today) {
                    $query->where('date_of_inspection', $today)->where('user_id','!=',auth()->user()->id);
                }])->with('workImages')->first();

                foreach($clinic->dates as $date){

                    if($date->status == 'pending'){
                        $total_appointments = $total_appointments + 1;

                    }elseif($date->status == 'accepted'){
                        $total_patients = $total_patients + 1;
                    }
                }

                return view('doctor.index',compact(['total_appointments','total_patients','clinic']));

            }else{
                return view('doctor.create_clinic');
            }
            

           
        } elseif($user->type == 'patient') {

            $clinics = Clinic::orderBy('number_of_booking_times','desc')->with('users:id,first_name,last_name,image')->take(6)->get();
            return view('patient.index',compact('clinics'));
        }
        
    }

}
