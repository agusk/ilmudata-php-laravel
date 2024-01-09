<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show($id)
    {
        return "data user dengan id " . $id;
    }
    public function display($age)
    {
        return "data user dengan umur " . $age;
    }
}
