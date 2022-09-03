<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Color;
class ProductController extends Controller
{
    function AddProduct(Request $req)
    {
        $product= new Products;
        $product->product_name=$req->product_name;
        $product->product_description=$req->product_description;
        $product->sku=$req->sku;
        $product->category=$req->category;
        $product->category_type=$req->category_type;
        $product->uom=$req->uom;
        $product->product_code=$req->product_code;
        $product->part_no=$req->part_no;
        $product->model_no=$req->model_no;
        $product->save();
        return redirect('/admin/add-product');
    }
    function AddColor(Request $req)
    {
        $color= new Color;
        $color->product_id=$req->product_id;
        $color->color_name=$req->color_name; 
        $color->save();
        
    }

    function ShowProduct()
    {
        $data= Products::all();
       return view('admin.list-products', ['products'=> $data]);
      
    }
    function ShowCustomerProduct()
    {
        $data= Products::all();
        return view('customer.products', ['products'=> $data]);
    }
    function ShowColor()
    {
        
        return Product:: find(4)->getColor;
    }
}
