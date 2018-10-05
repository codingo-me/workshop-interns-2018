<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('index-number');
    }

    public function postIndex(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'index' => 'required|min:5|max:6|exists:students,index'
        ], [
            'index.min' => 'Minimum je 5 karaktera',
            'index.max' => 'Maksimum je 6 karaktera',
            'index.exists' => 'Indeks ne postoji'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $student = Student::whereIndex(request('index'))->first();

        return view('hello-there', ['student' => $student]);
    }
}
