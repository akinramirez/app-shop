<?php
namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
class TestController extends Controller
{
    //
    public function welcome(){
//        $a = 5;
//        $b = 10;
//        $c = $a + $b;
//        return "EL valor de la suma es $c";
        $products = Product::paginate(9);

//        $varA = 5;
//        $varB = 7;
//        $data = [];
//        $data['products'] = $products;
//        $data['varA'] = $varA;
//        $data['varb'] = $varB;
//        return view('welcome')->with($data);

        return view('welcome')->with(compact('products'));

    }
}
