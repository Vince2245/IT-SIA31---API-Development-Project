<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    // Return all verses
    public function index()
    {
        return response()->json(Verse::all());
    }

    // Return a single verse by ID
    public function show($id)
    {
        $verse = Verse::find($id);

        if (!$verse) {
            return response()->json(['error' => 'Verse not found'], 404);
        }

        return response()->json($verse);
    }

    // Search verses by keyword
    public function search(Request $request)
    {
        $query = $request->input('q');

        $verses = Verse::where('book', 'like', "%{$query}%")
                        ->orWhere('text', 'like', "%{$query}%")
                        ->get();

        return response()->json($verses);
    }
}
