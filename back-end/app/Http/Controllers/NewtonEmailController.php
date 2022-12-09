<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewtonEmailController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendEmail(Request $request)
    {
        return response()->json(['ss', 500]);
    }

}
