<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class HomeController extends Controller
{
    public function __invoke(){
    	return view('index');
    }
}
