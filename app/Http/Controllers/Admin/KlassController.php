<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Offer;
use App\Models\Lesson;
use App\Models\LessonStudent;

class KlassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $offers=Offer::all();

        return Inertia::render('Admin/Klass/Index',[
            'offers' => $offers,
        ]);
    }

    public function dashboard(Offer $offer)
    {
        $offer->attendanceRateStudents();
        return Inertia::render('Admin/Klass/Dashboard',[
            'offer'=>$offer->load('teachers')->load('lessons.room')
        ]);
    }
    public function lesson(Offer $offer){
        
        return Inertia::render('Admin/Klass/Lesson',[
            'offer'=>$offer->load('students')->load('teachers')->load('lessons')
        ]);
    }
    public function attendance(Offer $offer, Lesson $lesson)
    {
        $offer->attendanceRateStudents();
        return Inertia::render('Admin/Lesson/Attendance',[
            'offer'=>$offer,
            'lesson'=>$lesson->load('students'),
        ]);
    }
    public function attend(Request $request){
        $request->validate([
            'lesson_id' => 'required|integer|exists:lessons,id',
            'student_id' => 'required|integer|exists:students,id',
            'attend' => 'required|string|uppercase|size:3', // Adjust validation rules as necessary
        ]);

        LessonStudent::where('lesson_id',$request->lesson_id)->where('student_id',$request->student_id)->update(['attend'=>$request->attend]);
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer, Lesson $lesson)
    {
        dd($offer, $lesson);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
