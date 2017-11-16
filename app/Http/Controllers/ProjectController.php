<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectController extends Controller
{


   /************************************************/

    public function index(){
        return view('project');
    }

    public function assignEmployees(){
        return view('assign-employees');
    }

    public function thread(){
        return view('project-thread');
    }
}
