<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Traits\ImageProcessTrait;

class RegisteredUserController extends Controller
{
    use ImageProcessTrait;
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.registerPage');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
         $request->validate([
             'first_name' => ['required', 'string', 'max:255'],
             'last_name' => ['required', 'string', 'max:255'],
             'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
             'password' => ['required', Rules\Password::defaults()],
             'birth_date' => ['required', 'date'],
             'phone' => ['required'],
             'age' => ['required', 'int'],
             'type' => ['required','string'],
             'image' => ['sometimes','file'],
         ]);

        $imagePath = null;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            if($request->type == 'doctor'){
              $imagePath =  $this->saveImage($image,$extension,313,313,"doctors_images");
            }elseif($request->type == 'patient'){
              $imagePath =  $this->saveImage($image,$extension,313,313,"patients_images");
            }
        }

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birth_date' => $request->birth_date,
            'age' => $request->age,
            'phone' => $request->phone,
            'type' => $request->type,
            'image' => $imagePath,
        ]);



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
