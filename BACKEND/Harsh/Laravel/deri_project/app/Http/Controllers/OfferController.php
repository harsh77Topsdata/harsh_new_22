<?php

namespace App\Http\Controllers;

use App\Models\offer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=offer::all();
        return view('website.news',["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add_offers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new offer;
        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('admin/upload/offers/', $filename);  // use move for move image in public/images
        $data->image = $filename;
        $data->description = $request->description;

        $data->save();
         
        return redirect('add_offers');
    }

    /**
     * Display the specified resource.
     */
    public function show(offer $offer)
    {
        $data=offer::all();
        return view('admin.manage_offers',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(offer $offer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, offer $offer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(offer $offer)
    {
        //
    }
}
