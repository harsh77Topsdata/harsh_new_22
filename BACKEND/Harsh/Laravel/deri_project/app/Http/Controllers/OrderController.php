<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\product;
use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data=product::where('id',$id)->where('status','Instock')->first();
        return view('website.order',['d'=>$data]);
        
    }

    public function user_data($email)
    {
       // $user = User::where('email', $email)->first();
        // return $user->user_id; 
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
        //
        $insert=new order;
        $insert->pro_id=$request->pro_id;
        $insert->user_id=session('uid');
        $insert->quantity=$request->qty;
        $insert->totalamount=$request->total;
        $insert->save();

        Alert::success('success','Order Placed Success');
        return view('website.user_profile');
    }

    /**
     * Display the specified resource.
     */
    public function show(order $order)
    {
        $data=order::all();
        return view('admin.manage_order',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(order $order)
    {
        //
    }
}
