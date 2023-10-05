<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use GeoIp2\Record\Location as RecordLocation;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;


class OrderController extends Controller
{
    public function delete($id)
    {
        $data = Order::find($id);
        $data->delete();
        return redirect('/admin/order');
    }
    public function index()
    {
        $data = Order::orderBy('product_id', 'asc')->get();
        // return $data;
        return view('backend.order.index', compact('data'));
    }
    public function create($id)
    {
        $data = Product::find($id);
        $product_id = $data->id;
        $product_name = $data->name;
        return view('backend.order.create', compact('product_id', 'product_name'));
    }
    
    

    //SPRCIFIC PRODUCT
    public function store(Request $req)
    {
        $order = new Order();
        $ip = '103.169.170.178';
        $location = Location::get($ip);
        $latitude = "...";
        $longitude = "...";
        $newLocation = $latitude.','.$longitude;

        $order->product_id = $req->product_id;
        $order->customer = $req->name;
        $order->contact = $req->contact;
        $order->date = date('Y-m-d');
        $order->status = 'Pending';
        $order->day = date('D');
        $order->time = date('h:i');
        $order->location = $newLocation;
        $order->ip = $ip;

        if($req->hasFile('file'))
        {
            $name = $req->file('file');//file is name in form
            $finalName = time().".".$name->getClientOriginalExtension();
            $name->move('files/',$finalName);
            $order->file = $finalName;
        }
        else
        {
            return "Please Insert PDF File";
        }

        $order->save();
        return "insetred";
        return redirect('/home');
    }
    //ALL PRODUCT
    public function createall()
    {
        $product = Product::all();
        return view('backend.order.createall', compact('product'));
    }


    //ALL PRODUCT
    public function storeall(Request $req)
    {
        $order = new Order();
        
        $ip = '103.169.170.178';
        $location = Location::get($ip);
        $latitude = 1400;
        $longitude = 1800;
        // $latitude = $location->latitude; 
        // $longitude = $location->longitude;
        $newLocation = $latitude.','.$longitude;

        $order->product_id = $req->product;
        $order->customer = $req->name;
        $order->contact = $req->contact;

        $order->date = date('Y-m-d');
        $order->status = 'Pending';
        $order->day = date('D');
        $order->time = date('h:i');
        $order->location = $newLocation;

        $order->ip = $ip;

        if($req->hasFile('file'))
        {
            $name = $req->file('file');//file is name in form
            $finalName = time().".".$name->getClientOriginalExtension();
            $name->move('files/',$finalName);
            $order->file = $finalName;
        }
        else
        {
            return "Please Insert PDF File";
        }
        $order->save();
        return "data inserted";
        return redirect('/home');

    }

    public function edit($id)
    {
        // return "working here";
        $data = Order::find($id);
        return view('backend.order.edit', compact('data'));
    }
    public function update(Request $req, string $id)
    {
        $order = Order::find($id);
        // $product->name = $req->name;
        // $product->price = $req->price;
        // $product->tag = $req->tag;
        $order->status = "Delivered";
        $order->update();
        // return "updated";
        return redirect('/admin/order');
        // return "data updated";
    }
    
    
     //Download from Public Folder
     public function download(Request $request, string $id)
     {
        $myvar = Order::find($id);
        // return $id;
        // return "value";
        // return $myvar;
        // return $myvar->file;
        $myFile = public_path("files/$myvar->file");
        $headers = ['Content-Type: application/pdf'];
        $newName = $myvar->file;
        // $newName = 'itsolutionstuff-pdf-file-'.time().'.pdf';
        return response()->download($myFile, $newName, $headers);
        // return response()->download($myFile, $newName, $headers)->deleteFileAfterSend(true);
        return "downloaded";
     }

}
