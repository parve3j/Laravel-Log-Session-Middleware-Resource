<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DemoController extends Controller
{
    // Log 
    function DemoLog(Request $request){
        $num1= $request->num1;
        $num2= $request->num2;
        Log::info($num1+$num2);
        Log::emergency($num1);
        Log::alert($num2);
        Log::critical($num1);
        Log::error($num1);
        Log::warning($num1);
        Log::notice($num1);
        Log::debug($num2);
        return $num1+$num2;
    }

    // Session
    function SessionPut(Request $request){
        $email= $request->email;
        $request->session()->put('userEmail', $email);
        return true;
    }
    function SessionPll(Request $request){
        return $request->session()->pull('userEmail', 'default');
    }
    function SessionGet(Request $request){
        return $request->session()->get('userEmail', 'default');
    }
    function SessionForget(Request $request){
        $request->session()->forget('userEmail');
        return true;
    }
    function SessionFlush(Request $request){
        $request->session()->flush();
        return true;
    }
}
