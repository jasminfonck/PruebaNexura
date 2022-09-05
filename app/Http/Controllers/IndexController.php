<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class IndexController extends Controller
{
    public function index(){
        $data = Empleado::all();
        return view('index',compact('data'));
        // return view("index")->with("data");
    }

    // public function getEmpleados(){

    // }
}

