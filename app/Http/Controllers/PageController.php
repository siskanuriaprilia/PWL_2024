<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index() {
    	    return 'Selamat Datang';
	}

    public function about() {
        return 'Siska Nuri aprilia - 2341760038';
    }
    public function articles($id)
    {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
