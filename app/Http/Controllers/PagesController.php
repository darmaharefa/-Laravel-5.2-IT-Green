<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    // Controller untuk Index / Home
    // Berisi Query Recent Update
    public function getIndex(){
    	return view("pages.index");
    }

    //Controller untuk Halaman About
    //Bersifat Static
    public function getAbout(){
    	return view("pages.about");
    }




}
