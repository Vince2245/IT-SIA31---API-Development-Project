<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return response()->json([
            ['reference' => 'John 3:16', 'text' => 'For God so loved the world...'],
            ['reference' => 'Psalm 23:1', 'text' => 'The Lord is my shepherd...']
        ]);
    }
}
