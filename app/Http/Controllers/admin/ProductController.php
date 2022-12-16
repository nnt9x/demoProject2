<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function  __construct()
    {
        $this->middleware('check.is.admin');
    }

    function viewAllProducts(Request $request){
        // Lay ra toan bo -> tra ve view
        // 1 sp/ 1 trang
        $kw = $request->get('kw','');
        if(empty($kw)) {
            $products = Product::paginate(10);
        }
        else{
            // Tim kiem co dieu kien
            $products = Product::where('id','LIKE','%'.$kw.'%')
                ->orWhere('name','LIKE','%'.$kw.'%')
                ->paginate(10);
        }
        return view('admin/product/index', ['products'=>$products]);
    }
    function viewProductById($id){
        //        Lay thong tin san pham
        $product = Product::find($id);
        return view('admin/product/detail',['product'=>$product]);

    }
    function viewCreateProduct(){
        $brands = Brand::all();
        return view('admin/product/create', ['brands'=>$brands]);
    }
    function createProduct(Request $request){
        $imageName = time().".".$request->file('image')->extension();
        $request->file('image')->move(public_path('images'), $imageName);

        // Duong dan den hinh
        $product = new Product();

        $product->image = 'images/'. $imageName;

        $product->name = $request->get('name');
        $product->price = $request->get('price');
        $product->description = $request->get('description');
        $product->id_brand = $request->get('brand');

        $product->save();

        return redirect('/admin/products');


    }
    function updateProductById($id){

    }
    function deleteProductById($id){
        Product::destroy($id);
        return redirect()->back();
    }
}
