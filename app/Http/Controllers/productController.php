<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class productController extends Controller
{
    public function addProduct(){
        
        return view('dashboardui.product.Product');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required'
        ]);
        
        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();  
        $image->move('uploads/product/images/', $imageName);

        product::create([
            'name'=>$request->get('name'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'image'=> 'uploads/product/images/'.$imageName,
        ]);
        return redirect()->route('viewProducts');
    }

    public function index(){
        return view('dashboardui.product.viewProduct');
    }
    public function read(){
        $items = product::all();
        $i=1;
        return view ('dashboardui.product.viewproduct',compact('items', 'i'));
    }
    public function edit($id){
        $itm=product::findOrFail($id);
        return view ('dashboardui.product.editproduct', compact('itm'));
    
    }
    public function update(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'price'=>'required',
            'image'=>'required',
            'description'=>'required',
         ]);
         if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('img', $image_new_name);
        }
         product::find($id)->update($request->all());
         return redirect()->route('viewProducts');

    }
    public function delete($id){
        product::find($id)->delete();
        return redirect()->route('viewProducts');
    }
    
    public function viewProducts(){
        $items = product::all();
        $i=1;
        return view ('dashboardui.product.viewproduct',compact('items', 'i'));
        
    }
}
