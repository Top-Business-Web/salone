<?php

namespace App\Http\Controllers\Cityadmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;

class LoginController extends Controller
{
  public function cityadminlogin(Request $request)
  {
    return view('cityadmin.login');
  }
  public function checkCityAdminLogin(Request $request)
  {
    // Use camelCase for function names and variables
    $cityAdminEmail = $request->cityadmin_email;
    $cityAdminPass = $request->cityadmin_pass;

    $this->validate($request, [
      'cityadmin_email' => 'required|email', // Validate email format
      'cityadmin_pass' => 'required',
    ], [
      'cityadmin_email.required' => 'Enter E-Mail',
      'cityadmin_email.email' => 'Enter a valid email address',
      'cityadmin_pass.required' => 'Enter the password',
    ]);

    // Use the model to retrieve the city admin data
    $checkCityAdminLogin = DB::table('cityadmin')
      ->where('cityadmin_email', $cityAdminEmail)
      ->first();

    if ($checkCityAdminLogin) {
      // Use the Hash facade to check the password
      if (Hash::check($cityAdminPass, $checkCityAdminLogin->cityadmin_pass)) {
        // Use session() instead of session::
        session()->put('cityadmin', $checkCityAdminLogin->cityadmin_email);
        return redirect()->route('cityadmin-index');
      } else {
        // Use withErrors to pass an array of errors
        return redirect()->route('cityadminlogin')->withErrors(['password' => 'Wrong password']);
      }
    } else {
      return redirect()->route('cityadminlogin')->withErrors(['email' => 'Invalid email']);
    }
  }
}
