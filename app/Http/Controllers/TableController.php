<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Table;

class TableController extends Controller
{
    public function index(){
        $tables = Table::all();
        return view('index', ['tables' => $tables]);
    }

    public function create() {
        return view('tables.create');
    }

    public function store(Request $request) {
        $table = new Table;
        $table->title = $request->title;
        $table->description = $request->description;
        $table->type = $request->type;
        $table->beginner = $request->beginner;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/tables'), $imageName);
            $table->image = $imageName;
        }

        $table->save();
        return redirect('/')->with('msg', 'Mesa criada com sucesso');
    }

    public function show($id) {
        $table = Table::findOrFail($id);
        return view('tables.show', ['table' => $table]);
    }
}
