<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\america;
use App\place;

class enteramerica extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = america::paginate(3);

        return view('enteramerica.index', [
            'report' => $flights,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('enteramerica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'gender' => 'required',
        ]);

        $flights = new america();
        $flights->title= $request->input('title');
        $flights->gender= $request->input('gender');
        $flights->save();

        return redirect('developer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $flights = america::FindOrFail($id);
        return view('enteramerica.show', [
            'report' => $flights
        ]);

        return redirect('developer');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flights = america::FindOrFail($id);
        return view('enteramerica.edit', [
            'report' => $flights
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:20',
            'gender' => 'required',
        ]);

        $flights = america::FindOrFail($id);
        $flights->title= $request->input('title');
        $flights->gender= $request->input('gender');
        $flights->save();

        return redirect('developer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flights = america::FindOrFail($id);
        $flights->place()->delete();
        $flights->delete();


        return redirect('developer')->with('success', 'Your user was deleted');
    }

    public function fakedelete($id)
    {
        $report= america::FindOrFail($id);
        return view('enteramerica.fakedelete', [
            'report' => $report
        ]);

    }

}

