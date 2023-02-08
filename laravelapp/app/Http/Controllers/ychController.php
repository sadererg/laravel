<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ychController extends Controller
{
    public function Ych(){
        $posts = ych::table('yches')->select('*')->get();
        return view('ych',compact('posts'));
    }
}
