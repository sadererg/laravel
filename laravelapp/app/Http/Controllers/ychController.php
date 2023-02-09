<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ych;

class ychController extends Controller
{
    public function index(){
        $posts = ych::all();
        return view('ychTable',compact('posts'));
    }
}
