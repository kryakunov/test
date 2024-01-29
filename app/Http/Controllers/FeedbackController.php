<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function handler(Request $request)
    {
        $validated = $request->validate([
           // 'name' => 'required',
            //'email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'phone' => 'required',
        ]);

        dd($request->all());
    }
}
