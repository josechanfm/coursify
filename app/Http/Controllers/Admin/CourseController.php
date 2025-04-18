<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Area;
use App\Models\Course;
use App\Models\Config;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Area $area, Request $request)
    {
        
        // if (empty($request->per_page)) {
        //     $per_page = 20;
        // } else {
        //     $per_page = $request->per_page;
        // }

        if( !empty($area->toArray()) ){
            $courses=Course::whereBelongsTo($area)->get();
        //     $area->info();
        }else{
        //     $courses=Course::with('areaInfo')->paginate($per_page);
            $area = null ;
            $courses=Course::all();
        }

        return Inertia::render('Admin/Courses',[
            'area' => $area,
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $area = Area::find( $request->area_id );

        return Inertia::render('Admin/CourseForm',[
            'area'=>$area,
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
            'courseTypes'=>Config::get('course_types'),
            'languageTypes'=>Config::get('language_types'),
            'certificateTypes'=>Config::get('certificate_types'),
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
