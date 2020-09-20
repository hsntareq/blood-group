<?php

namespace App\Http\Controllers;

use App\District;
use App\Postal;
use Illuminate\Http\Request;

class PostalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postals = Postal::with('district')->get();
        return view('postals.index', compact('postals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        return view('postals.create', compact('districts'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Postal::create([
            'district_id' => $request->district_id,
            'name' => $request->name,
            'code' => $request->code
        ]);

        return redirect(route('postal.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postal = Postal::find($id);
        $districts = District::all();
        return view('postals.edit', compact(['postal', 'districts']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $postal = Postal::find($id);
        $postal->district_id = $request->district_id;
        if ($postal->save()) {
            return redirect(route('postal.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
