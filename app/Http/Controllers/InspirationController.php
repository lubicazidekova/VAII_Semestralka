<?php

namespace App\Http\Controllers;

use App\Models\Inspiration;
use Illuminate\Http\Request;

class InspirationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inspiration.inspiration',[
            'inspirations'=> Inspiration::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function show(Inspiration $inspiration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspiration $inspiration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspiration $inspiration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inspiration=Inspiration::find($id);
        $this->authorize('delete',$inspiration);
        $inspiration->delete();
        return redirect()->route('inspiration.index');
    }
}
