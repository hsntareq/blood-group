<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;

class DonorsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        Donor::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'blood_group' => $request['blood_group'],
        ]);

        return redirect('donor-register')->with('status', "Insert successfully");

    }

    public function create()
    {
        return view('donors.create');

    }

    public function __invoke(Request $request)
    {
        //
    }
}
