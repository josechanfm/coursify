<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Application;
use LDAP\Result;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function form(Offer  $offer)
    {
        return Inertia::render('ApplicationForm', [
            'offer' => $offer,
            'application' => (Object)['offer_id'=>$offer->id],
        ]);
    }
    public function checker(Request $request){
       // Prepare a success message
       $message = 'Application processed successfully';

       // Return a JSON response with the message
       return response()->json(['message' => $message], 200);
    } 
    public function submit(Request $request)
    {
        dd($request->all());
    }

}
