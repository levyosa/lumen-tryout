<?php

namespace App\Http\Controllers;

use  App\Models\Course;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        return Course::all();
    }

    public function show($id){
        return Course::find($id);
    }

}
