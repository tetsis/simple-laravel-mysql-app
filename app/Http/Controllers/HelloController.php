<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hello;

class HelloController extends Controller
{
    //
    public function index()
    {
        $items = Hello::all();

        return view('hello', compact('items'));
    }

    public function post(Request $req)
    {
        $hello = new Hello;
        $hello->save();

        return redirect('/hello');
    }
}
