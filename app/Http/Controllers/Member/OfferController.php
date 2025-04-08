<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Offer;
use App\Models\Config;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return Inertia::render('Member/Offers',[
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
    public function update(Request $request, Offer $offer)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Offer $offer)
    {
    }

    public function uploadPaymentReceipt(Request $request, Application $application){
        
        if( $request->file('receipt') ){
            foreach ($request->file('receipt') as $receipt) {
                $application->addMedia($receipt['originFileObj'])->toMediaCollection('receipt'); // Replace 'your_collection_name' with your actual collection name
            }
            // return response()->json(['success' => true, 'message' => 'File uploaded successfully']);
        }
    }
}
