<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use Illuminate\Support\Facades\Input;
use App\Quality;
use App\Length;

class QualityController extends Controller
{   
    

    public function show($id)
    {
        //
        $quality = \App\Quality::findOrFail($id);
        $product = \App\Product::findOrFail($id);
        $length = \App\Length::findOrFail($id);
        $data['quality'] = $quality;
        $data['product'] = $product;
        $data['length'] = $length;
        return view('products/showquality', $data);
    }
    public function new_quality()
    {
        //
        return view('products/addquality');
    }

    public function add(Request $request)
    {
        $quality = new quality;
        $quality->name = $request->input('name');
        $quality->Save();

        $length = new length;
        $length->length = $request->get('selectlength');
        $length->save();

        $product = new product;
        $product->length_id = $length->id;
        $product->quantity = $request->input('quantity');
        $product->quality_id = $quality->id;
        $product->save();

        return redirect('home');
    }
    public function update(Request $request)
    {
    	if ($request->input('name') != null){
            $id = $_POST['id'];
            $quality = \App\Quality::findOrFail($id);
            $quality->name = $request->input('name');
            $quality->save();
        }
        elseif ($request->input('quantity') != null){
            $id = $_POST['id'];
            $product = \App\Product::findOrFail($id);
            $product->quantity = $request->input('quantity');
            $product->save();
        }
            $id = $_POST['id'];
            $length = \App\Length::findOrFail($id);
            $length->length = $request->get('selectlength');
            $length->save();
        


        return redirect('home');
    }

    public function destroy()
    {
        //
        if(isset($_POST['delete'])) {
            $product_id = $_POST['product_id'];
            $product = Product::findOrFail($product_id);
            $product->delete();
            return redirect('home');
        }
        
        
    }

}
