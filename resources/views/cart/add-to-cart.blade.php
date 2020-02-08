@extends('frontend')

@section('content')

	<section class="light-gry-bg padding-top-60 padding-bottom-30">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">
								<?= $product[0]->object_name ?>
								<small>Perfumes</small>
							</h3>
						</div>

						<div class="panel-body">

							<div class="row">
          						<div class="col-md-6">
          							<div class="row">
          								<div class="col-md-12 slider-for">
					                        @foreach ($media_objects as $media)
					          							<img 
					                            class="" 
					                            src="{{ asset('media/images/'.$product[0]->types_id.'/'.$product[0]->brands_id.'/'.$media->path) }}" 
					                            style="width: 300px; height: auto;">
					                        @endforeach
					                    </div>

					                    <div class="col-md-12 slider-nav" style="margin-top: 2rem;">

					                        @foreach ($media_objects as $media)
					                        <img 
					                            class="" 
					                            src="{{ asset('media/images/'.$product[0]->types_id.'/'.$product[0]->brands_id.'/'.$media->path) }}" 
					                            style="width: 110px; height: 110px; margin-right: 0.5rem; border: 0.1rem solid #eee; overflow: hidden;">
					                        @endforeach
					                    </div>
          							</div>
          						</div>
          						<div class="col-md-6">
          							<span class="label label-lg label-success">
          								<i class="fa fa-check"></i>&nbsp;Producto agregado
          							</span>
          							<div class="">
										<a href="{{ route('cart.show') }}" class="btn btn-info">Carrito</a>
										<a href="" class="btn btn-warning">Pagar</a>
          							</div>
          							<div class="">
          								<h2>Product information</h2>
          							</div>
          						</div>
          					</div>
							
						</div>
						<div class="panel-footer">
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
@stop

@push('scripts')
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
   $('.slider-for').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-for',
      dots: false,
      arrows: false,
      centerMode: true,
      focusOnSelect: true
    });
</script>
@endpush