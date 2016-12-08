<?php

namespace App\Http\Controllers;

use App\Product;
use App\Resource;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use File;
use Validator;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $resource = \App\Resource::findOrFail($id);
        $stock = \App\Stock::findOrFail($id);
        $data['resource'] = $resource;
        $data['stock'] = $stock;
        return view('products/show', $data);
    }

    public function new_resource()
    {
        //
        return view('products/add');
    }

    public function renamefile()
    {
            $file = $_FILES["resource"]["name"];
            $array = explode('.', $file);
            $fileName=$array[0];
            $fileExt=$array[1];
            $newfile=$fileName."_".time().".".$fileExt;
            return $newfile;
    }

    public function add(Request $request)
    {
        if($_FILES['resource']['size'] != 0) {
            $resource = new resource;

            $newfile = $this->renamefile();
            $request->resource->move(public_path('images'), $newfile);
            $resource->img = "$newfile";
        }

        $resource = new resource;
        $resource->type = $request->input('name');
        $resource->Save();

        if ($request->input('quantity') != null) {
            $stock = new stock;
            $stock->quantity = $request->input('quantity');
        }

        $stock = new stock;
        $stock->resource_id = $resource->id;
        $stock->Save();

        return redirect('home');
    }
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //



            $file = $request->resource;
            $fileArray = array('image' => $file);
            $rules = array('image' => 'mimes:jpeg,jpg,png,gif|required|max:10000');
            $validator = Validator::make($fileArray, $rules);

            if ($_FILES['resource']['size'] != 0 && !$validator->fails()) {

                $id = $_POST['id'];
                $resource = \App\Resource::findOrFail($id);

                if ($resource->img == "resource.jpg") {

                    $request->resource->move(public_path('images'), "resource_" . $id . "_" . time() . ".jpg");
                    $resource->img = "resource_" . $id . "_" . time() . ".jpg";
                    $resource->Save();

                } else {

                    File::delete("images/" . $resource->img);
                    $request->resource->move(public_path('images'), "resource_" . $id . "_" . time() . ".jpg");
                    $resource->img = "resource_" . $id . "_" . time() . ".jpg";
                    $resource->Save();

                }
            } elseif ($request->input('type') != null) {

                $resource = \App\Resource::findOrFail($id);
                $resource->type = $request->input('type');
                $resource->save();
            } elseif ($request->input('quantity') != null) {

                if (is_numeric($request->input('quantity'))) {
                    $id = $_POST['id'];
                    $stock = \App\Stock::findOrFail($id);
                    $stock->quantity = $request->input('quantity');
                    $stock->save();
                } else {
                    return redirect('home');
                }
            }
        
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        if(isset($_POST['delete'])) {
            $resource_id = $_POST['resource_id'];
            $stock_id = $_POST['stock_id'];
            $resource = \App\Resource::findOrFail($resource_id);
            $stock = \App\Resource::findOrFail($stock_id);

            $stock->delete();
            $resource->delete();
        }
        return redirect('home');
    }
}
