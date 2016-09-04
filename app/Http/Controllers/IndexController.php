<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index(){
    	$msg = 'Index';
    	return view('index', compact('msg'));
    }
}
