<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $reviews=Review::get();

        if($request->ajax()){
           $allData = DataTables::of($reviews)
               ->addColumn('name',function ($row){return $row->user->name;})
               ->addIndexColumn()
               ->addColumn('action',function($row){
                   $btn= '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'
                       .$row->id.'"data-original-title="Edit" class="edit btn btn-black btn-sm
                       editReview">EDIT</a>';

                   $btn.= '<a href="javascript:void(0)" data-toggle="tooltip" data-id="'
                       .$row->id.'"data-original-title="Delete" class="delete btn btn-black btn-sm
                       deleteReview"> DELETE</a>';

                   return $btn;
               })
                   ->rawColumns(['action'])->make(true);
                   return $allData;

        }
        return view('reviews.index',compact('reviews'));
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
    public function store(Request $request )
    {
        $request->validate([
            'text'=>'required',
            'rating'=>'required|numeric',

        ]);
        auth()->user()->reviews()->updateOrCreate(['id' => $request->review_id],
            [ 'text' => $request->text,'rating'=>$request->rating]);

        return response()->json(['success' => 'Review saved successfully.']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return response()->json($review);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Review::find($id)->delete();
        return response()->json(['success'=>'Review deleted successfully']);
    }
}
