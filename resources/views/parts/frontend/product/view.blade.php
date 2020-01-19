<!-- Product -->
<div class="product">
	<article> 
		<?php
		$srcImg = '';
		$img = (array)$media[$object->id]; 
		if ( count($img) > 0 ){
			$srcImg = $img['path'];
		}
		?>
		<img 
			class="img-responsive" 
			src="{{ asset('media/images/'.$object->types_id.'/'.$object->brands_id.'/'.$srcImg) }}" 
			alt="" > 
		<!-- Content --> 
		<span class="tag">{{ $object->brand_name }}</span> 
		<a href="{{ route('product.view', $object->id) }}" class="tittle">{{ $object->object_name }}</a> 
		<!-- Reviews -->
		<p class="rev"></p>
		<!--<p class="rev">
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i>
			<i class="fa fa-star"></i> 
			<i class="fa fa-star-o"></i> 
			<span class="margin-left-10">5 Review(s)</span>
		</p>-->
		<div class="price">L. {{ number_format($object->price) }} </div>
		<a href="#." data-id="{{ $object->id }}" data-toggle="modal" data-target="#exampleModal" class="cart-btn add-to-cart"><i class="icon-basket-loaded"></i></a> 
	</article>
</div>