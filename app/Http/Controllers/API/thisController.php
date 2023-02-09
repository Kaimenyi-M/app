<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class thisController extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello this is Kaimenyi',
        ], 200);
    }
}
