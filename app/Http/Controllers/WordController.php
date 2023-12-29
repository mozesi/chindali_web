<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

use Inertia\Inertia;
use Inertia\Response;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $words = Word::all();
        $words->load('description');

       // return $words;

        return Inertia::render("Home/Index", [

            'words' => $words
            ]
        );
    }

    public function search(Request $request)
    {
        $validatedSearch = $request->validate([

            'searchWord' => 'required|string',

        ]);

    }

}
