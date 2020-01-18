@extends('frontend')

@push('styles')
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endpush

@section('content')
	<section class="light-gry-bg padding-top-60 padding-bottom-30">
		<div class="container">

			<!-- heading -->
	        <!--<div class="heading">
	          <hr>
	        </div>-->

	        <div class="row">

            <div class="col-md-12">
              <div class="panel panel-flat">
                <div class="panel-body">

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

                    <h2>{{ $product[0]->object_name }}</h2>

                    <div class="price" style="padding: 2rem 0.8rem; display: flex; border-top: 1px solid #eee; border-bottom: 1px solid #eee;">
                      <strong style="width: 50%; font-size: 1.8rem;">L. {{ number_format($product[0]->price) }}</strong>
                      <div style="width: 50%; text-align: right;">
                        <a class="" style="background: #e94d1c; color: #fff; text-transform: uppercase; font-size: 1.8rem; padding: 0.4rem 0.6rem;"><i class="icon-basket-loaded"></i>&nbsp;Comprar</a>
                      </div>
                    </div>

                    <p style="padding: 2rem 0.8rem; border-bottom: 1px solid #eee;">{{ $product[0]->description }}</p>

                    <div class="social-links">
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-instagram"></i></a>
                    </div>
          				</div>

                </div>

              </div><!-- end of panel -->
            </div>

    			</div>
    		</div>
    	</section>

	<!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Relacionado</h2>
          <hr>
        </div>
        
        <!-- Items -->
        <div class="item-col-5"> 
          
          <!-- Product -->
          <!--<div class="product col-2x">
            <div class="like-bnr">
              <div class="position-center-center">
                <h5>Smart Watch 2.0</h5>
                <p>Space Gray Aluminum Case
                  with Black/Volt Real Sport Band <span>38mm | 42mm</span> </p>
                <a href="#." class="btn-round">View Detail</a> </div>
            </div>
          </div>-->
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > <span class="sale-tag">-25%</span> 
              
              <!-- Content --> 
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="images/item-img-1-7.jpg" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="images/item-img-1-8.jpg" alt="" > <span class="new-tag">New</span> 
              
              <!-- Content --> 
              <span class="tag">Accessories</span> <a href="#." class="tittle">Teclado Inalambrico Bluetooth Con Air Mouse</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="images/item-img-1-9.jpg" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Funda Para Ebook 7" 128GB full HD</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          
          <!-- Product -->
          <div class="product">
            <article> <img class="img-responsive" src="images/item-img-1-10.jpg" alt="" > 
              <!-- Content --> 
              <span class="tag">Appliances</span> <a href="#." class="tittle">Reloj Inteligente Smart Watch M26 Touch Bluetooh </a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00</div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
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