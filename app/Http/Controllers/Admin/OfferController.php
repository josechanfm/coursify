<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Course;
use App\Models\Offer;
use App\Models\Config;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Course $course, Request $request)
    {
        if (empty($request->per_page)) {
            $per_page = 20;
        } else {
            $per_page = $request->per_page;
        }

        if( !empty($course->toArray()) ){
            $offers=Offer::whereBelongsTo($course)->paginate($per_page);
            $course->info();
        }else{
            $offers=Offer::paginate($per_page);
            $course = null ;
        }

        return Inertia::render('Admin/Offers',[
            'course' => $course,
            'offers' => $offers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Admin/CourseForm',[
            'areas'=>Course::all(),
            'course'=>(Object)[]
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'code' => 'required|unique:offers,code|string|max:20',
            'name_zh' => 'required|string',
        ]);
        Offer::create($request->all());
        return to_route('admin.offers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Offer $offer)
    {
        return Inertia::render('Admin/OfferShow',[
            'formOptions'=>Config::get('form_options'),
            'offer'=>$offer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Offer $offer)
    {
        return Inertia::render('Admin/OfferForm',[
            'formOptions'=>Config::get('form_options'),
            'offer'=>$offer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Offer $offer)
    {
        request()->validate([
            'code' => 'required|string|max:20',
            'name_zh' => 'required|string',
        ]);
        $offer->update($request->all());
        return to_route('admin.offers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->back();
    }

    public function current()
    {
        $offers=Offer::where('apply_start','<=',now())->where('apply_end','>=',now())->paginate(5);
        return Inertia::render('Admin/Offers',[
            'onlyCurrent'=>true,
            'offers'=>$offers
        ]);
    }
}
