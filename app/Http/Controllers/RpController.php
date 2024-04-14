<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mesa;

class RpController extends Controller
{
    public function index(){

        $mesas = Mesa::all();

        return view('welcome',['mesas' => $mesas]);

    }

    public function create() {
        return view ('mesas.create');
    }
}
