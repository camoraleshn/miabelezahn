<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ObjectProduct;
use App\Type;
use App\Brand;

class ObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rows = DB::table('objects')
                    ->join('brands', 'brands.id', '=', 'objects.brands_id')
                    ->join('types', 'types.id', '=', 'objects.types_id')
                    ->select('objects.*', 'brands.brand_name', 'types.type')
                    ->get();

        return view('backend.objects.index', ['rows' => $rows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $types = Type::all();

        $brands = Brand::all()->sortBy('brand_name');

        return view('backend.objects.create', ['types' => $types, 'brands' => $brands]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        /*print_r($_POST);

        foreach ($request->get('types_id') as $type){
            echo "<br>this type: " . $type;
        }
        exit;*/
        $object = new ObjectProduct;

        $object->object_name = $request->get('object_name');
        $object->cost        = $request->get('cost');
        $object->price       = $request->get('price');
        $object->brands_id       = $request->get('brands');
        $object->types_id       = $request->get('types');
        $object->save();

        return redirect('/backend/objects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $object = ObjectProduct::find($id);

        $types = Type::all();

        $brands = Brand::all()->sortBy('brand_name');

        return view('backend.objects.edit', [
                                                'object' => $object,
                                                'brands' => $brands,
                                                'types'  => $types
                                            ]
                    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        // check folders
        // print_r($request);
        // exit();
        if (!file_exists('/var/www/html/cart/public/media/images/'.$request->get('types').'/')){
            mkdir('/var/www/html/cart/public/media/images/'.$request->get('brands').'/', 0777);
        }
        if (!file_exists('/var/www/html/cart/public/media/images/'.$request->get('types').'/'. $request->get('brands') .'/')){
            mkdir('/var/www/html/cart/public/media/images/'.$request->get('types').'/'.$request->get('brands').'/', 0777);
        }

        $object = ObjectProduct::find($id);

        $object->object_name = $request->get('object_name');
        $object->description = $request->get('description');
        $object->save();

        for ($i = 0; $i <= $request->get('total-files'); $i++) {

            $fileName = str_replace(' ', '-', $_FILES['document-file']['name'][$i]);

            if (move_uploaded_file($_FILES['document-file']['tmp_name'][$i], '/var/www/html/cart/public/media/images/'.$request->get('types').'/'. $request->get('brands') .'/'.$fileName)){

                // get file format
                $ext = pathinfo($_FILES['document-file']['name'][$i], PATHINFO_EXTENSION);

                DB::table('media')
                    ->insert([
                                'path' => $fileName, 
                                'objects_id' => $id, 
                                'format' => $ext,
                                'featured' => (
                                    (array_key_exists($i, $_POST['feature'])) ? 1 : 0)
                            ]);
            }

        }

        return redirect('/backend/objects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
