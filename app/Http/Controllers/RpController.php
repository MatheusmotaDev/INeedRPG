<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mesa;

class RpController extends Controller
{
    public function index(){

        $mesas = Mesa::all();

        return view('index',['mesas' => $mesas]);

    }

    public function create() {
        return view ('mesas.create');
    }


    public function store(Request $request) {

        $mesa = new Mesa;

        $mesa->title = $request->title;
        $mesa->description = $request->description;
        $mesa->type = $request->type;
        $mesa->beginner = $request->beginner;


        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/mesas'), $imageName);

            $mesa->image = $imageName;

        
        }

        $mesa->save();

        return redirect('/')->with('msg', 'Mesa criada com sucesso!');

    }


    public function show($id) {

        $mesa = Mesa::findOrFail($id);

        return view('mesas.show', ['mesa' => $mesa]);

    }
}
