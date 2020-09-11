<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//ovo dole moras da dodash da laravel zna da hoces freeCodeGram/app/User.php
use App\User;

class ProfilesController extends Controller
{
    //dd to je neka precica jebena neshto kao 'die and dump' - stani i prikazi
    public function index($user)
    {
      $user = User::find($user);

        return view('home', [
          'user' => $user,
        ]);
    }
}
