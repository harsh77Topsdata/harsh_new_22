<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.add_items');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new item;
        $data->item_name=$request->item_name;
        $data->item_price=$request->item_price;
        $file = $request->file('item_image');
        $filename = time() . '_image.' . $request->file('item_image')->getClientOriginalExtension();
        $file->move('website/upload/product/', $filename);
        $data->item_image =$filename;

        $data->save();

        return redirect('/add_items');

    }

    /**
     * Display the specified resource.
     */
    public function show(item $item)
    {
        $data=item::all();
        return view('website.manage_items',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(item $item)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, item $item,$id)
    {
        $data=item::find($id);
        $data->pro_name=$request->item_name;
        $data->pro_price=$request->item_price;

        if($request->hasFile('item_image'))
        {
            
            $file=$request->file('item_image');		
            $filename=time().'_img.'.$request->file('item_image')->getClientOriginalExtension();
            $file->move('website/upload/product/',$filename); 
            $data->item_image=$filename;

        }

        $data->update();
        return redirect('/add_items');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(item $item,$id)
    {
        $data=$item::find($id)->delete();
        return redirect('/add_items');
    }
}
