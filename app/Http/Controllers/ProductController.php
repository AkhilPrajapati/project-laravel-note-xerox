<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function delete(string $id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect('/admin/product');
    }
    public function create()
    {
        return view('backend.product.create');
    }
    public function store(Request $req)
    {
        $product = new Product();
        $product->name = $req->name;
        $product->price = $req->price;
        // $product->image = "image link";
        $product->tag = $req->tag;
        $product->date = date('Y-m-d');



        if($req->hasFile('file'))
        {
            $name = $req->file('file');//file is name in form
            //$finalName = time().$name->getClientOriginalName;
            $finalName = time().".".$name->getClientOriginalExtension();
            $name->move('images/',$finalName);
            $product->image = "images/$finalName";
        }
        else
        {
            // $product->image = "images/default.png";
            return "warning";
        }
        


        $product->save();
        return redirect('/admin/product');
    }
    public function index()
    {
        $product = Product::orderBy('name', 'asc')->get();
        
        return view('backend.product.index', compact('product'));
    }
    public function edit($id)
    {
        $data = Product::find($id);
        return view('backend.product.edit', compact('data'));
    }
    public function update(Request $req,string $id)
    {
        // return $req;
        $product = Product::find($id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->tag = $req->tag;
        $product->date = "updated";


        if($req->hasFile('file'))
        {
            $name = $req->file('file');//file is name in form
            //$finalName = time().$name->getClientOriginalName;
            $finalName = time().".".$name->getClientOriginalExtension();
            $name->move('images/',$finalName);
            $product->image = "images/$finalName";
        }
        else
        {
        }
        $product->update();
        return redirect('/admin/product');
        // return "data updated";
    }
}




