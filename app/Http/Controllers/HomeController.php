<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    /**
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function home() {

    	$list = DB::table('objects')
    				->join('brands', 'brands.id', '=', 'objects.brands_id')
    				->join('types', 'types.id', '=', 'objects.types_id')
    				->select('objects.*', 'brands.brand_name', 'types.type')
    				->get();

        $media = [];
        foreach ($list as $object){
            $media[$object->id] = DB::table('media')
                                        ->where('media.objects_id', '=', $object->id)
                                        ->orderBy('media.featured', 'desc')
                                        ->first();
        }



    	return view('home', ['list' => $list, 'media' => $media]);
    }
}
