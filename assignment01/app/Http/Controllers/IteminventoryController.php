<?php

namespace App\Http\Controllers;

use App\Models\iteminventory;
use Illuminate\Http\Request;

class IteminventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $i=new iteminventory;
        $list=$i->all();
        return view('items.list',['itemlist'=>$list]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item=new iteminventory;
        $item->name=$request->item_name;
        $item->category=$request->category;
        $item->description=$request->description;

        $item->save();
        return redirect()->route('item.index')->with('success','New item is created successfully..!');

    }

    /**
     * Display the specified resource.
     */
    public function show(iteminventory $iteminventory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(iteminventory $item)
    {
        
       return view('items.edit',['item'=>$item]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, iteminventory $item)
    {
        
        $stu = $item->find($item->id);
        $stu->qty = $request->qty;
        $stu->save();        

        return redirect()->route('item.index')->with('success','Stock is uptated successfully..!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(iteminventory $iteminventory)
    {
        //
    }
}
