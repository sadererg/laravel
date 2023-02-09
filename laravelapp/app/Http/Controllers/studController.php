<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class studController extends Controller
{
    public function index(){
        $posts = student::all();
        return view('studTable',compact('posts'));
    }
}
