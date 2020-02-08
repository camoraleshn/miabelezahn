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
		<div class="price">
			<!--L. {{ number_format($object->price) }} -->
			<i class="fa fa-question"></i> CONSULTAR
		</div>
		<a href="javascript:void(0);" data-id="{{ $object->id }}" class="cart-btn add-to-cart"><i class="icon-basket-loaded"></i></a> 
	</article>
</div>