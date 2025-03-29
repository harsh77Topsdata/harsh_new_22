<?php

namespace App\Http\Controllers;

use App\Models\store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('website.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $data=new store;
        $data->pro_name = $request->pro_name;
        $data->pro_price = $request->pro_price;
        
        $file = $request->file('image');
        $filename = time() . '_image.' . $request->file('image')->getClientOriginalExtension();
        $file->move('website/upload/product/', $filename);
        $data->image =$filename;

        $data->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(store $store)
    {
        $data=store::all();
        return view('website.manage_product',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(store $store,$id)
    {
       $data=store::find($id);
       return view('website.edit_product',["data"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, store $store ,$id)
    {
        $data=store::find($id);
        $data->pro_name=$request->pro_name;
        $data->pro_price=$request->pro_price;

        if($request->hasFile('image'))
        {
            
            $file=$request->file('iamge');		
            $filename=time().'_img.'.$request->file('pro_image')->getClientOriginalExtension();
            $file->move('website/upload/product/',$filename); 
            $data->iamge=$filename;

        }

        $data->update();
        return redirect('/manage_product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(store $store,$id)
    {
        $data=$store::find($id)->delete();
        return redirect('/manage_product');

    }
}
