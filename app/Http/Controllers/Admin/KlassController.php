<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Offer;
use App\Models\Lesson;

class KlassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard(Offer $offer)
    {
        return Inertia::render('Admin/KlassDashboard',[
            'offer'=>$offer->load('students')->load('teachers')->load('lessons')
        ]);
    }
    public function attendance(Offer $offer, Lesson $lesson)
    {
        return Inertia::render('Admin/LessonAttendance',[
            'offer'=>$offer,
            'lesson'=>$lesson->load('students'),
        ]);
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
