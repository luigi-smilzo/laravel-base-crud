<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller
{
    public function index()
    {
        $queries = [
            Student::all(),
            Student::where('id', 1)->get(),
            Student::where('id', '!=', 1)->get(),
            Student::where('id', '!=', 1)
                ->orderBy('name', 'asc')
                ->get(),
            Student::orderBy('id', 'desc')
                ->limit(2)
        ];

        $first_query = Student::first();
        
        $find_query = Student::find(3);



        return view('welcome', compact('queries', 'first_query', 'find_query') );
    }
}
