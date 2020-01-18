<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    //

    /**
     *
     *
     *@return \Illuminate\Http\Response
     */
    public function show(Request $request){

    	$values = json_decode($request->cookie('cart'));
        $products = [];
        if ( $request->hasCookie('cart')){
            foreach ($values as $key => $value){
                $products[$key] = DB::table('objects')
                                        ->join('brands', 'brands.id', '=', 'objects.brands_id')
                                        ->join('types', 'types.id', '=', 'objects.types_id')
                                        ->select('objects.*', 'brands.brand_name', 'types.type')
                                        ->where('objects.id', $value)
                                        ->get();
            }
        }

    	return view('cart.show', ['products' => $products, 'total' => 0]);
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addtocart( Request $request ){

    	$minutes = 1440;
    	$response = new \Illuminate\Http\Response();
    	$cart = [$request->get('product')];

    	if ( !$request->hasCookie('cart') ){
    		$response->withCookie(cookie('cart', json_encode($cart), $minutes));
    	}else {
    		$values = json_decode($request->cookie('cart'));
    		print_r($values);

    		//\Cookie::queue(\Cookie::forget('cart'));

    		array_push($values, $request->get('product'));

    		echo "new values:";
    		print_r($values);

    		$response = new \Illuminate\Http\Response();
    		$response->withCookie(cookie('cart', json_encode($values), $minutes));
    	}

    	//return json_encode(['add', 'to', 'cart']);
    	return $response;
    }

    public function getCart( Request $request ){

    	// $cart = $request->cookie('cart');

        $values = json_decode($request->cookie('cart'));
        foreach ($values as $key => $value){
            $products[$key] = DB::table('objects')
                                    ->join('brands', 'brands.id', '=', 'objects.brands_id')
                                    ->join('types', 'types.id', '=', 'objects.types_id')
                                    ->select('objects.*', 'brands.brand_name', 'types.type')
                                    ->where('objects.id', $value)
                                    ->get();
        }

    	//echo "items: ";
    	//print_r($cart);
        return json_encode($products);
    }
}
