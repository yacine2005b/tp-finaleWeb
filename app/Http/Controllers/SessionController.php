<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
public function removeSessionVariable(Request $request)
    {
        $key = $request->input('key');
        session()->forget($key);
        
        return response()->json(['success' => true]);
    }
}
