<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Offer;
use App\Models\Student;
use App\Models\Config;


class ProfileController extends Controller
{
    //
    public function index(){
        
        $user = Auth()->user();
        return Inertia::render('Member/Profile',[
            'student' => $user->student
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $student_id)
    {
        // dd($request->all());
        dd($student_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
    }
}
