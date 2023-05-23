<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    //
    public function index(){
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }
    public function add(){
        $product = Category::all();
        return view('admin.product.add',compact('product'));
    }
    public function insert(Request $request){
        $product = new product();
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/upload/product/',$filename);
            $product->image = $filename;

        };
        $product->cate_id = $request->input('cate_id');
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description= $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE ? '1':'0';
        $product->trending = $request->input('trending') == TRUE ? '1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->meta_description = $request->input('meta_description');
        $product->save();
        return redirect('/products')->with('status','Product Added Successfully');



    }

    public function edit ($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.product.edit',compact('product','category'));
    }
    public function update(Request $request,$id){
        $product = product::find($id);
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename  =  time().'.'.$ext;
            $file->move('assets/upload/product',$filename);
            $product->image = $filename;


        };
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->small_description = $request->input('small_description');
        $product->description = $request->input('description');
        $product->original_price = $request->input('original_price');
        $product->selling_price = $request->input('selling_price');
        $product->qty = $request->input('qty');
        $product->tax = $request->input('tax');
        $product->status = $request->input('status') == TRUE ? '1':'0';
        $product->trending = $request->input('trending') == TRUE ? '1':'0';
        $product->meta_title = $request->input('meta_title');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');

        $product->save();
        return redirect('/products')->with('status','Product Edited Successfully');
    }
    public function delete($id){
        $product = product::find($id);
        if ($product->image){
            $path = 'assets/upload/product'.$product->image;
            if (File::exists($path)){
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('/products')->with('status','Product Deleted Succesfully');
    }
}
