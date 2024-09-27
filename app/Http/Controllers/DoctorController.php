<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Clinic;
use App\Models\Cost;
use App\Models\Date;
use App\Models\Medicine;
use App\Models\WorkImage;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\ImageProcessTrait;
use Carbon\Carbon;

use function PHPSTORM_META\type;

class DoctorController extends Controller
{

    use ImageProcessTrait;
    //create a new clinic in database by doctor
    public function create_clinic(Request $request){

       $exists =  Clinic::where('user_id',Auth::user()->id)->exists();

       if(!$exists){
       $clinic =  Clinic::create([
            'user_id' => auth()->user()->id,
            'medical_specialty' => $request->medical_specialty,
            'address' => $request->address,
            'description' => $request->description,
            'inspection_cost' => $request->inspection_cost,
            'inspection_time' => $request->inspection_time,
        ]);

        $imageWorkBefore1 = $this->saveImage($request->file('before_images1'),$request->file('before_images1')->getClientOriginalExtension(),900,500,"work_images");
        $imageWorkAfter1 = $this->saveImage($request->file('after_images1'),$request->file('after_images1')->getClientOriginalExtension(),900,500,"work_images");

        $imageWorkBefore2 = $this->saveImage($request->file('before_images2'),$request->file('before_images2')->getClientOriginalExtension(),900,500,"work_images");
        $imageWorkAfter2 = $this->saveImage($request->file('after_images2'),$request->file('after_images2')->getClientOriginalExtension(),900,500,"work_images");

        WorkImage::insert([[
            'clinic_id' => $clinic->id,
            'image_before' => $imageWorkBefore1,
            'image_after' => $imageWorkAfter1,
        ],[
            'clinic_id' => $clinic->id,
            'image_before' => $imageWorkBefore2,
            'image_after' => $imageWorkAfter2,
        ]]);

        return redirect('/redirect');
       }

    } 
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //function to add cost of work in clinic
    public function add_work(Request $request){
        $user = auth()->user();
        $clinic = Clinic::where('user_id',$user->id)->with('costs')->first();
        $exists = true;
        foreach($clinic->costs as $work){
            if($work->name_of_element == $request->name_of_element){
                $exists = false;
            }
        }
        if($exists){
            Cost::create([
                'clinic_id' => $clinic->id,
                'name_of_element' => $request->name_of_element,
                'cost' => $request->cost,
            ]);
         return redirect()->back();   
        }else{
            Cost::where('clinic_id',$clinic->id)->where('name_of_element',$request->name_of_element)->update([
                'cost' => $request->cost,
            ]);
            return redirect()->back();    
        }

    }

    //----------------------------------------------------------------------------

    //function to get update work information page
    public function update_work_page($id){
        $work = Cost::where('id',$id)->first();
        return view('doctor.update_work_info',compact('work'));
    } 

    //----------------------------------------------------------------------------

    //function to update work information
    public function update_work(Request $request,$id){
        Cost::where('id',$id)->update([
            'name_of_element' => $request->name_of_element,
            'cost' => $request->cost,
        ]);

        return redirect(RouteServiceProvider::HOME);
    } 

    //----------------------------------------------------------------------------

    //delete work
    public function delete_work($id){
        Cost::where('id',$id)->delete();
        return redirect(RouteServiceProvider::HOME);
    }
//--------------------------------------------------------------------------------------------------------------------------

    //function to get update work image page
    public function update_image_work_page($id){
        $images = WorkImage::where('id',$id)->first();
        return view('doctor.update_workImage',compact('images'));
    }

    //------------------------------------------------------------------

    //function to update work image
    public function update_image_work(Request $request,$id){
        $old_images = WorkImage::where('id',$id)->first();
        if($request->hasFile('before_image')){
            $this->deleteImage($old_images->image_before);
            $image_new = $this->saveImage($request->file('before_image'),$request->file('before_image')->getClientOriginalExtension(),900,500,"work_images");
            WorkImage::where('id',$id)->update(['image_before'=>$image_new]);
            return redirect()->back();

        }elseif($request->hasFile('after_image')){
            $this->deleteImage($old_images->image_after);
            $image_new = $this->saveImage($request->file('after_image'),$request->file('after_image')->getClientOriginalExtension(),900,500,"work_images");
            WorkImage::where('id',$id)->update(['image_after'=>$image_new]);
            return redirect()->back();
        }
    }
//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //get schedule page
    public function schedule_page(){
        return view('doctor.schedule');
    }

    //-----------------------------------------------------------------------

    public function schedule_dates(Request $request){

        $user = auth()->user();

        $clinic = Clinic::where('user_id',$user->id)->first();

        $date = $request->date;
        $beginning_work = Carbon::parse($request->beginning_work);
        $end_preview = Carbon::parse($request->beginning_work);
        $end_work = Carbon::parse($request->end_work);

        if($end_work > $beginning_work){
        while ($beginning_work < $end_work) {
            // Add the current start datetime to the array

            $end_preview->addMinutes($clinic->inspection_time);

              Date::create([
                  'clinic_id' => $clinic->id,
                  'date_of_inspection' => $date,
                  'start_inspection' =>  $beginning_work,
                  'end_inspection' => $end_preview,
                  'status' => 'unoccupied',
              ]);
        
            // Add 15 minutes to the start datetime
             $beginning_work->addMinutes($clinic->inspection_time);
        }

        $dates = Date::where('clinic_id',$clinic->id)->where('date_of_inspection',$date)->get();
        return view('doctor.schedule',compact('dates'));

    }else{
        return redirect()->back()->with('the time to end before start!!!!! please correct your information');
    }


    }

    //--------------------------------------------------------------------------------------------------------------------

    //booking date
    public function booking_date($id,$date_of_inspection){
        $user = auth()->user();
        $clinic = Clinic::where('user_id',$user->id)->first();
         Date::where('id',$id)->update([
            'user_id' => $user->id,
            'status' => 'accepted',
        ]);
        $dates = Date::where('clinic_id',$clinic->id)->where('date_of_inspection',$date_of_inspection)->where('status','unoccupied')->get();
        return view('doctor.schedule',compact('dates'));
    }


//-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    //get appointment page
    public function appointments_page(){

        $user_id = auth()->user()->id;
        $clinic = Clinic::where('user_id',$user_id)->first();
        $appointments = Date::where('clinic_id',$clinic->id)->where('status','pending')->with('users')->get();
    
        return view('doctor.appointments',compact('appointments'));
    }

    //-------------------------------------------------------------------------------------------------------------

    //accept booking from user
    public function accept_booking($id){
        Date::where('id',$id)->update(['status'=>'accepted']);
        return redirect()->back();
    }

//--------------------------------------------------------------------------------------------------------------------------------------------------------------

    //patients page
    public function patients_page(){
        $user_id = auth()->user()->id;
        $clinic = Clinic::where('user_id',$user_id)->first();
        $patients = Date::where('clinic_id',$clinic->id)->where('status','accepted')->with('users')->get();
    
        return view('doctor.patients',compact('patients'));
    }

    //------------------------------------------------------------------------------------------------------------------------------------------------

    //cancellation of reservation by doctor
    public function cancellation_of_reservation($id){
        Date::where('id',$id)->update([
            'user_id' => null,
            'status' => 'unoccupied',
        ]);

        return redirect()->back();
    }

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


    //add product to clinic by doctor
    public function product_page(){
        $user_id = auth()->user()->id;
        $clinic = Clinic::where('user_id',$user_id)->first();
        $products = Medicine::where('clinic_id',$clinic->id)->get();
        return view('doctor.products',compact('products'));
    }

    //--------------------------------------------------------------------------------------------------

    //add product page
    public function add_product_page(){
        return view('doctor.add_product');
    }

    //--------------------------------------------------------------------------------------------------

    //add product to database
    public function add_product(Request $request){
        $user_id = auth()->user()->id;
        $clinic = Clinic::where('user_id',$user_id)->first();

        if($request->hasFile('image')){
            $image = $this->saveImage($request->file('image'),$request->file('image')->getClientOriginalExtension(),326,219,"products_images");
        }

        
        Medicine::create([
            'name' => $request->name,
            'clinic_id' => $clinic->id,
            'description' => $request->description,
            'concentration' => $request->concentration,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'expiration_date' => $request->expiration_date,
            'image' => $image,
        ]);

        return redirect()->back();
    }

    //-------------------------------------------------------------------------------------------------

    //update product page
    public function update_product_page($id){

       $product = Medicine::where('id',$id)->first();

       return view('doctor.update_product',compact('product'));
    }

    //-------------------------------------------------------------------------------------------------

    //update product in database
    public function update_product(Request $request,$id){

        $product = Medicine::where('id',$id)->first();
        if($request->hasFile('image')){
            $this->deleteImage($product->image);
            $image_new = $this->saveImage($request->file('image'),$request->file('image')->getClientOriginalExtension(),326,219,"products_images");
            $product['image'] = $image_new;
        }

         Medicine::where('id',$id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'concentration' => $request->concentration,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'expiration_date' => $request->expiration_date,
            'image' => $product->image,
        ]);
        
        return redirect()->back();
    }

    //---------------------------------------------------------------------------------------------------------------------------------------------

    //delete product
    public function delete_product($id){

        Medicine::where('id',$id)->delete();
        return redirect()->back();
    }

//-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //get carts page
    public function carts_page(){
        $user_id = auth()->user()->id;
        $clinic = Clinic::where('user_id',$user_id)->first();
        $carts = Cart::where('clinic_id',$clinic->id)->with('users')->with('medicines')->get();

        return view('doctor.carts',compact('carts'));
    }

//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

    //accept cart element
    public function accept_cart($id){
        $cart = Cart::where('id',$id)->with('medicines')->first();
        $medicine =  Medicine::where('id',$cart->medicine_id)->first();
        $medicine['quantity'] = $medicine['quantity'] - $cart->quantity;
        $medicine->save();
        $cart['status'] = 'accepted';
        $cart->save();
        return redirect()->back();
    }
//---------------------------------------------------------------

    //accept cart element
    public function refuse_cart($id){
        Cart::where('id',$id)->update([
            'status' => 'refused',
        ]);
        return redirect()->back();
    }

//--------------------------------------------------------------

    //accept cart element
    public function delete_cart($id){
        Cart::where('id',$id)->delete();
        return redirect()->back();
    }












    
}
