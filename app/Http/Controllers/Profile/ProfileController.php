<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function __construct()    {
        $this->middleware(['auth', 'verified']);
    }

    public function showProfile(){
        return view('profile.profile');

    }
    //
}
