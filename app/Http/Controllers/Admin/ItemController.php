<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;

class ItemController extends Controller
{
    public function index()
    {
        $items= Items::get();
        $data = ["items" =>$items];
        return view('admin.item.index',$data);
    }
    public function create()
    {
        return view('admin.item.create');
    }
    public function add(Request $request)

    {
        $post = $request->all();
        Items::create($post);
        return redirect()->route('admin.item.index');
    }
    public function edit (Request $request, $id)
    {
        $items =Items::find($id);
        $data = ["items"=>$items];
        return view("admin.item.edit",$data);
    }

    public function update(Request $request, $id)
    {
        $posts = $request->all();
        Items::find($id)->update($posts);
        return redirect()->route('admin.item.index');
    }
}
