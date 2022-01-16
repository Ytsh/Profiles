<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Professional;
use App\Academic;
use App\Personal;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $personal = Personal::where('user_id',auth::user()->id)->first();
        $professional = Professional::with('experiences')->where('user_id',auth::user()->id)->first();
        $academic = Academic::where('user_id',auth::user()->id)->get();
        $academic = $academic->toArray();
        return view('profile',compact('personal','professional','academic'));
    }
}