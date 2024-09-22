<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class picturecontroller extends Controller

{
    public function index()
    {
        echo 'index';
    }

    public function create()
    {
        echo 'create';
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        echo $id;
    }

    public function edit($id)
    {
       //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
