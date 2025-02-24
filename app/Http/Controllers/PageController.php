<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return "Selamat Datang";
    }

    public function about() {
        return "2341760019, Siti Alifia Azzahra Mustofa";
    }

    public function articles($id) {
        return "Halaman Artikel id = ". $id;
    }
}
