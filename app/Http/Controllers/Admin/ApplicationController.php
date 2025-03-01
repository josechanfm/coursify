<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Offer;
use App\Models\Application;
use App\Models\Config;
use LDAP\Result;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Offer $offer=null)
    {
        if($offer){
            $applications=Application::whereBelongsTo($offer)->paginate(5);
        }else{
            $applications=Application::paginate();
        }
        return Inertia::render('Admin/Applications',[
            'offer'=>$offer?$offer->info():null,
            'applications'=>$applications
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/CourseForm',[
            'areas'=>Offer::all(),
            'offer'=>(Object)[]
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'code' => 'required|unique:applications,code|string|max:20',
            'name_zh' => 'required|string',
        ]);
        Application::create($request->all());
        return to_route('admin.applications.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //$application->offer;
        $offer=Offer::find($application->offer_id);
        $offer->course;
        return Inertia::render('Admin/ApplicationShow',[
            'offer'=>$offer,
            'application'=>$application
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        request()->validate([
            'code' => 'required|string|max:20',
            'name_zh' => 'required|string',
        ]);
        $application->update($request->all());
        return to_route('admin.applications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->delete();
        return redirect()->back();
    }

    public function current()
    {
        $applications=Application::where('apply_start','<=',now())->where('apply_end','>=',now())->paginate(5);
        return Inertia::render('Admin/Applications',[
            'onlyCurrent'=>true,
            'applications'=>$applications
        ]);
    }
    public function changeStatus(Application $application, Request $request){
        // request()->validate([
        //     'status' => 'required',
        // ]);
        $application->update(['status'=>$request->status]);
    }
}
