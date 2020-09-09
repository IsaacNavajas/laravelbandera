<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\america;
use App\place;

class crudplace extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(america $america)
    {

        //var_dump(america::find($id));


        return view('place.create', [
            'expense' => $america
        ]);



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, america $america)
    {

        $request->validate([
            'place' => 'required|max:50',
            'dream' => 'required|max:100',
        ]);

        $report= new place();
        $report->america_id= $america->id;
        $report->place= $request->get('place');
        $report->dream= $request->get('dream');
        $report->save();

        return redirect('developer/' . $america->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report= place::FindOrFail($id);
        $report->delete();

        return redirect('developer/' );

    }
}
