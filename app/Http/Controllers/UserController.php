<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function userInfo(){
      $user=Auth::user();
      if(!$user){
          return response()->json([
              'error'=>true,
              'message'=>'Session Expired',
              'user'=>new \stdClass()
          ]);
      }
      return response()->json([
          'error'=>false,
          'user'=>$user
      ]);
    }

}
