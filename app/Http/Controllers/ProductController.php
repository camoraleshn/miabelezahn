<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //

   	/**
   	 *
   	 *
   	 *@return \Illuminate\Http\Response
   	 *
   	 **/
   	public function view( $product )
   	{
         $object = DB::table('objects')
                           ->join('brands', 'brands.id', '=', 'objects.brands_id')
                           ->join('types', 'types.id', '=', 'objects.types_id')
                           ->where('objects.id', '=', $product)
                           ->select('objects.*', 'brands.brand_name', 'types.type')
                           ->get();

         $media_objects = DB::table('media')
                                 ->select('media.*')
                                 ->where('media.objects_id', '=', $product)
                                 ->get();

   		return view('product.view', [
                                       'product' => $object,
                                       'media_objects' => $media_objects
                                       ]
                                       );
   	}

	/**
	 *
	 *
	 **/
	public function search(Request $request) {
   	$results = DB::table('objects')
   			->join('brands', 'brands.id', '=', 'objects.brands_id')
   			->join('types', 'types.id', '=', 'objects.types_id')
   			->where('objects.object_name', 'like', '%'.$request->get('search'). '%')
   			->get();

      $media = [];
      foreach ($results as $object){
         $media[$object->id] = DB::table('media')
                                     ->where('media.objects_id', '=', $object->id)
                                     ->orderBy('media.featured', 'desc')
                                     ->first();
      }
	return view('product.search_results', ['results' => $results, 'media' => $media]);
	}
}
