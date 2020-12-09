<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; 
use App\User;


class ForgotPasswordController extends Controller
{
    /*   
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    */
    use SendsPasswordResetEmails;
  /*  private function sendResetEmail($email, $token)
{
//Retrieve the user from the database
$user = DB::table('users')->where('email', $email)->select('firstname', 'email')->first();
//Generate, the password reset link. The token generated is embedded in the link
$link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);

    try {
    //Here send the link with CURL with an external email API 
        return true;
    } catch (\Exception $e) {
        return false;
    }
}
public function resetPassword(Request $request)
{
    //Validate input
    $validator= validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        'lastname' => ['required', 'string', 'max:255'],
        'cin' => ['required',  'min:8','max:8','unique:users'],
        ]);
    //check if payload is valid before moving on
    if ($validator or->fails()) {
        return redirect()->back()->withErrors(['email' => 'Please complete the form']);
    }

    $password = $request->password;
// Validate the token
    $tokenData = DB::table('password_resets')
    ->where('token', $request->token)->first();
// Redirect the user back to the password reset request form if the token is invalid
    if (!$tokenData) return view('auth.passwords.email');

    $user = User::where('email', $tokenData->email)->first();
// Redirect the user back if the email is invalid
    if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
//Hash and update the new password
    $user->password = \Hash::make($password);
    $user->update(); //or $user->save();

    //login the user immediately they change password successfully
    Auth::login($user);

    //Delete the token
    DB::table('password_resets')->where('email', $user->email)
    ->delete();

    //Send Email Reset Success Email
    if ($this->sendSuccessEmail($tokenData->email)) {
        return view('index');
    } else {
        return redirect()->back()->withErrors(['email' => trans('A Network Error occurred. Please try again.')]);
    }

}
*/}
