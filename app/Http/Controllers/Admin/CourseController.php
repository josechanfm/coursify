<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Area;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Admin/Courses',[
            'courses'=>Course::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/CourseForm',[
            'areas'=>Area::all(),
            'course'=>(Object)[]
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'code' => 'required|unique:courses,code|string|max:20',
            'name_zh' => 'required|string',
        ]);
        Course::create($request->all());
        return to_route('admin.courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return Inertia::render('Admin/CourseForm',[
            'areas'=>Area::all(),
            'course'=>$course
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        request()->validate([
            'code' => 'required|string|max:20',
            'name_zh' => 'required|string',
        ]);
        $course->update($request->all());
        return to_route('admin.courses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {

        $course->delete();
        return redirect()->back();
    }
}
