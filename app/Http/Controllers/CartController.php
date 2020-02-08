<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

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
     **/
    public function addtocart( $object ){

        $product = DB::table('objects')
                            ->where('objects.slug', '=', $object)
                            ->get();
        $objectID = $product[0]->id;
        $values = [];

        $media_objects = DB::table('media')
                                 ->select('media.*')
                                 ->where('media.objects_id', '=', $objectID)
                                 ->get();



        $minutes = 1440;
        $response = new \Illuminate\Http\Response();
        $cookieValues = [['article' => $objectID]]; 

        //$response->withCookie(cookie('cart', json_encode($objectID), $minutes));
        Cookie::make('cart', json_encode($objectID), $minutes);
        $response->withCookie(cookie()->forever('newcart', json_encode($cookieValues), $minutes));
        $request = new \Illuminate\Http\Request;
        // $request = Illuminate\Http\Request;
        //$cart = [$request->get('product')];

        /*if ( !$request->hasCookie('cart') ){
            $response->withCookie(cookie('cart', json_encode($objectID), $minutes));
        }else {
            $values = json_decode($request->cookie('cart'));
            print_r($values);

            //\Cookie::queue(\Cookie::forget('cart'));

            array_push($values, $objectID);

            // echo "new values:";
            print_r($values);

            $response = new \Illuminate\Http\Response();
            $response->withCookie(cookie('cart', json_encode($values), $minutes));
        }*/


        var_dump(Cookie::get('cart'));
        echo "<br>second method: cookie value: ". $objectID ."<br>";
        var_dump($response->cookie('newcart'));
        echo "<br>cookie value<br>";
        echo response('Hello wordl')->cookie('newcart');

        return view('cart.add-to-cart', [
                                            'product' => $product, 
                                            'media_objects' => $media_objects, 
                                            'cart' => $values
                                        ]
                                    );
    }


    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function pushtocart( Request $request ){

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
