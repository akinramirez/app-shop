<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\ProductoImage;
use File;
class ImageController extends Controller
{
    public function index($id){
        $product = Product::find($id);
        $images = $product->images()->orderBy('featured','desc')->get();
        return view('admin.products.images.index')->with(compact('product','images'));
    }

    public function store(Request $request, $id){
        // Guardar la imagen en nuestro proyeto
        $file = $request->file('photo');
        $path = public_path().'/images/products';
        $fileName = uniqid().$file->getClientOriginalName();
        $move = $file->move($path, $fileName);

        // Crear 1 registro en la bd, product_images
        if($move){
            $productImage = new ProductoImage();
            $productImage->image = $fileName;
            //$productImage->featured = false;
            $productImage->product_id = $id;
            $productImage->save(); // INSERT
        }
        return back();
    }

    public function destroy(Request $request, $id){
        //Eliminar el archivo
        $productImage = ProductoImage::find($request->image_id);
        if(substr($productImage->image,0,4)=== "http"){
            $delete = true;
        }else{
            $fullPath = public_path().'/images/products/'.$productImage->image;
            $delete = File::Delete($fullPath);
        }
        //Eliminar el registro de la img en la bd
        if($delete){
            $productImage->delete();
        }
        return back();
    }

    public function select($id, $image){
        ProductoImage::where('product_id',$id)->update([
            'featured' => false
        ]);
        $productImage = ProductoImage::find($image);
        $productImage->featured = true;
        $productImage->save();
        return back();
    }
}
