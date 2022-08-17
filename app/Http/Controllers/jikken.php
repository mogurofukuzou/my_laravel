<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jikken extends Controller
{
    public function jikken ()
    {
        $hello = 'Hello';

        return view('jikken',compact('hello'));
    
    }
}
