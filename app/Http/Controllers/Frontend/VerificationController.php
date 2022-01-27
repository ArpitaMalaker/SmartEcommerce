<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Alert;
class VerificationController extends Controller
{
    public function verify($token)
    {
        
      $user = User::where('remember_token', $token)->first();
      if (!is_null($user)) {
        $user->status = 1;
        $user->remember_token = NULL;
        $user->save();
        Alert::toast('You are registered successfully !! Login Now', 'success');
        return redirect('login');
      }else {
        Alert::toast('Sorry !! Your token is not matched !!', 'errors');
        return redirect('/');
      }

    }
}
