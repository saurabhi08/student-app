<?php

namespace App\Http\Controllers;

use App\Models\Professor;

class ProfessorController extends Controller
{
    public function index()
    {
        $professors = Professor::latest()->paginate(10);
        return view('professors.index', compact('professors'));
    }
}


