<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

    public function store(Request $request){
        Course::create($request->all());

        return response()->
            json(['data'=>
                ['message'=> 'course added successfully']
            ]);
    }

    public function update($id,Request $request){
        $course = Course::find($id);
        $course->update($request->all());
        return response()->
            json(['data'=>
                ['message'=> 'course '.$course['name'].' updated successfully']
            ]);

    }
    public function destroy($id ){
        $course = Course::find($id);
        $course->delete();
        return response()->
            json(['data'=>
                ['message'=> 'course deleted successfully']
            ]);

    }

}
