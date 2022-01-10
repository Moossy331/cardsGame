<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;


class TestController extends Controller
{
    function test(){
        $time = strtotime('+1 day');

        return view('member.game_report', ['time' => $time]);
    }

    function test2(){
        session_start();
        
        return view('login.login');
    }
}
