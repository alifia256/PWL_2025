<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function Hello() {
        return ('Hello World');
    }
    public function greeting(){
        return view('blog.hello')
            ->with('name','Alifia')
            ->with('occupation','Astronaut');
    }


}
