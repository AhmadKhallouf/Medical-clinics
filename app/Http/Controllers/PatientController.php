<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Clinic;
use App\Models\Date;
use App\Models\Medicine;
use App\Models\WorkImage;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //function to get clinics page
    public function clinics_page(){
        return view('patient.clinics');
    }

//--------------------------------------------------------------------------------------------------------

    //get clinics to see info 
    public function get_special_clinics($medical_specialty){
        $special = $medical_specialty;
        $clinics = Clinic::where('medical_specialty',$medical_specialty)->with('users')->get();

        return view('patient.special_clinics',compact('clinics','special'));
    }

//--------------------------------------------------------------------------------------------------------

    //get clinic of special doctor 
    public function doctor_clinic($id){

        $clinic = Clinic::where('id',$id)->with('users:id,first_name,last_name,phone,image')->with('costs:id,clinic_id,name_of_element,cost')->with('workImages:id,clinic_id,image_before,image_after')->with('medicines:id,clinic_id,name,description,concentration,quantity,price,expiration_date,image')->first();

        return view('patient.doctor_clinic',compact('clinic'));

    }
//---------------------------------------------------------------------------------------------------------

    //reservation a date in clinic
    public function reservation_date_page(Request $request,$id){
      
        $clinic = Clinic::where('id',$id)->with('users:id,first_name,last_name')->first();
        $appointments = Date::where('clinic_id',$clinic->id)->where('date_of_inspection',$request->date_of_inspection)->where('status','unoccupied')->get();

        return view('patient.reservation',compact('clinic','appointments'));
    }

    //-------------------------------------------------------------------------------------------------

    public function reservation_date($date_id,$clinic_id){

        $exists =  Date::where('clinic_id',$clinic_id)->where('user_id',auth()->user()->id)->where('status','!==','unoccupied')->exists();

        if(!$exists){

            Date::where('id',$date_id)->update([
                'user_id' => auth()->user()->id,
                'status' => 'pending',
            ]);

           $clinic =  Clinic::where('id',$clinic_id)->first();
           $clinic['number_of_booking_times'] = $clinic['number_of_booking_times'] + 1;
           $clinic->save();

            $user_id = auth()->user()->id;
        $dates = Date::where('user_id',$user_id)->get();
        foreach($dates as $date){
            $clinic = Clinic::where('id',$date->clinic_id)->with('users:id,first_name,last_name')->first();
            $date['doctor_first_name'] = $clinic->users->first_name;
            $date['doctor_last_name'] = $clinic->users->last_name;
            $date['medical_specialty'] = $clinic->medical_specialty;
        }
        return view('patient.my_dates',compact('dates'));

        }else{
            return redirect()->route('redirect');
        }
    }
//------------------------------------------------------------------------------------------------------------------------

    //get my dates page
    public function my_dates_page(){
        $user_id = auth()->user()->id;
        $dates = Date::where('user_id',$user_id)->get();
        foreach($dates as $date){
            $clinic = Clinic::where('id',$date->clinic_id)->with('users:id,first_name,last_name')->first();
            $date['doctor_first_name'] = $clinic->users->first_name;
            $date['doctor_last_name'] = $clinic->users->last_name;
            $date['medical_specialty'] = $clinic->medical_specialty;
        }
        return view('patient.my_dates',compact('dates'));
    }

//-----------------------------------------------------------------------------------------------------------------------

    //
    //cancellation of reservation by patient
    public function cancellation_of_reservation_by_patient($id){
        Date::where('id',$id)->update([
            'user_id' => null,
            'status' => 'unoccupied',
        ]);

        return redirect()->back();
    }

//------------------------------------------------------------------------------------------------------------------------

    //add product to cart
    public function add_product(Request $request,$product_id,$clinic_id){
        $user_id = auth()->user()->id;
        $medicine = Medicine::where('id',$product_id)->first();
        if($medicine->quantity > $request->quantity){
        Cart::create([
            'medicine_id' => $product_id,
            'clinic_id' => $clinic_id,
            'user_id' => $user_id,
            'quantity' => $request->quantity,
            'status' => 'pending',
        ]);
        return redirect()->back();
    }else{
        return redirect()->back()->with('sorry sir.....there is not enough quantity!!!!!!!!');
    }
    }

//----------------------------------------------------------------------------------------------------------------

    //my cart page
    public function cart_page(){
        $carts = Cart::where('user_id',auth()->user()->id)->with('clinics')->with('medicines')->get();

        foreach($carts as $cart){
           $clinic_info =  Clinic::where('id',$cart->clinic_id)->with('users')->first();
            $cart['first_name_doctor'] = $clinic_info->users->first_name;
            $cart['last_name_doctor'] = $clinic_info->users->last_name;
        }
        
        return view('patient.my_cart',compact('carts'));
    }


//----------------------------------------------------------------------------------------------------------------
    //cancellation cart element from database
    public function  cancellation_product_by_patient($id){
        Cart::where('id',$id)->delete();
        return redirect()->back();
    }








}
