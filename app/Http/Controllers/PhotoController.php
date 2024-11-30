<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    
    public function index()
    {
        return "index";
    }
    public function create()
    {
        return "create";
    }
   
    public function store(Request $request)
    {
        return 'store';
    }

    public function show(string $id)
    {
        return 'show';
    }
    public function edit(string $id)
    {
        return 'edit';
    }
    public function update(Request $request, string $id)
    {
        return 'update';
    }
    public function destroy(string $id)
    {
        return 'destroy';
    }
}
