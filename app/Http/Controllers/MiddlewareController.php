<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareController extends Controller
{
    public function DemoAction(){
        return "Hello";
    }
    public function DemoRedirect(){
        return 'Return from middleware';
    }
    public function helloOne(){
        return 'Hello 1';
    }
    public function helloTwo(){
        return 'Hello 2';
    }
    public function helloThree(){
        return 'Hello 3';
    }
}
