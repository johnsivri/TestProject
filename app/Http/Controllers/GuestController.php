<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GuestController extends Controller
{
    public function getGuest()
    {
      return view('guests.guest');
    }
}
