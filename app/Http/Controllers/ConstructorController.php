<?php

namespace App\Http\Controllers;

use App\Http\Middleware\DemoMiddleware;
use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    function __construct()
    {
    }
}
