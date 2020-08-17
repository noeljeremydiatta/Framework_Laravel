<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function add()
    {
        return view('compte.add');
    }
    public function getAll()
    {
        return view('compte.list');
    }
    public function edit($id)
    {
        return view('compte.edit');
    }
    public function update()
    {
        return $this->getAll();
    }
    public function delete($id)
    {
        return $this->getAll();
    }
}
