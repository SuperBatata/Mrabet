<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Role;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Chargeur;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('can:manage-users');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'lastname' => ['required', 'string', 'max:255'],
            'cin' => ['required',  'min:8','max:8','unique:users'],
            ]);
        }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $number=0;
        $namecode= strtoupper($data['lastname'][0].$data['lastname'][1].$data['name'][0]);

        while( DB::table('Users')->where('name_id',$namecode)->exists()){
            $number=$number+1;
            $namecode=($namecode[0].$namecode[1].$namecode[2]);
            $namecode=$namecode.$number;
        }
            $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'lastname' => $data['lastname'],
            'name_id' => $namecode,
            'cin' => $data['cin'],
            ]);
            $role = Role::select('id')->where('name','user')->first();
            $user->roles()->attach($role);
     // Mail::to($data['email'])->send(new WelcomeMail($user));
            return $user;
        }
    protected function guard()
    {
        return Auth::guard();
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        return $this->registered($request, $user)
        ?: redirect($this->redirectPath());
    }
    public function showRegistrationForm()
    {
        return view('admin.users.CRegister');
    }

    public function registerChargeur(Request $request)
    {
        $this->validator($request->all())->validate();
        event(new Registered($user = $this->create($request->all())));
        $this->registered($request, $user);
        $user->roles()->detach();
        $user->roles()->attach(Role::where('name','=','chargeur')->first());
        $chargeur = new Chargeur();
        $chargeur->nom_societe=$request->get('nom_societe');
        $chargeur->save();
        $chargeur->user()->save($user);


        return redirect($this->redirectPath());
    }



}
