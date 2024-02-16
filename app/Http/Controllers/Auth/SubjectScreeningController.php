<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Screening;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class SubjectScreeningController extends Controller
{

    /**
     * Display a Screening form.
     *
     * @return \Illuminate\Http\Response
     */
    public function screening()
    {
        return view('auth.screening');
    }

    /**
     * Store a new screening.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'age' => 'required|string|max:250',
            'problem_response' => 'required|string|max:250'
        ]);

        Screening::create([
            'name' => $request->name,
            'age' => $request->age,
            'problem_response' => $request->problem_response,
            'daily_frequency' => $request->daily_frequency
        ]);

            return redirect()->route('dashboard')
                ->withSuccess('You have successfully added Subject!');

    }

}