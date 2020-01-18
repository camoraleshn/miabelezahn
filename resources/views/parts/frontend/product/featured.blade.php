
        <?php
        $srcImg = '';
        $img = (array)$media[$object->id]; 
        if ( count($img) > 0 ){
            $srcImg = $img['path'];
        }
        ?>

		<div class="product col-2x">
            <div class="like-bnr" style="background-image: url({{ asset('media/images/'.$object->types_id.'/'.$object->brands_id.'/'.$srcImg) }})!important;">
              <div class="position-center-center">
                <h5>{{ $object->object_name }}</h5>
                <p> 
                	{{ $object->brand_name }}
                	<span>{{ $object->price }}</span>
                </p>
                <a href="{{ route('product.view', $object->id) }}" class="btn-round">Ver Producto</a> </div>
            </div>
        </div>
		<!--<div class="product col-2x">
            <div class="like-bnr">
              <div class="position-center-center">
                <h5>Smart Watch 2.0</h5>
                <p>Space Gray Aluminum Case
                  with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                <a href="#." class="btn-round">Ver Producto</a> </div>
            </div>
        </div>-->