<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PiaController extends Controller
{
    public function proceed_to_threshold_analysis(Request $request)
    {
        $value = $request->input('value');
    
        return view('pia/threshold_analysis', ['value' => $value]);
    }

    public function proceed_to_system_description()
    {
        return view('pia/system_description');
    }
    
}
