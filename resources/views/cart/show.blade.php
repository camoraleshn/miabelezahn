@extends('frontend')

@section('content')
	
	<section class="light-gry-bg padding-top-60 padding-bottom-30">
		<div class="container">
			
			<div class="row">
				<div class="col-md-9">

					<!-- cart list -->
					@foreach ($products as $product)
					<div class="row padding-bottom-30 padding-top-30" style="border-bottom: 1px solid #eee;">
						<div class="col-md-9">
							<div class="row">
								<div class="col-md-3">
									<img src="{{ asset('media/images/watches/watch01.jpg') }}" style="width: 100%; height: auto">
								</div>
								<div class="col-md-9">
									<h4>{{ $product[0]->object_name }}</h4>
									<p>{{ $product[0]->brand_name }}</p>
									<span style="color: blue; margin: 0 5px;"><i class="fa fa-trash"></i>&nbsp;Quitar</span>
									<!--<span style="color: blue; margin: 0 5px;">Guardar</span>-->
								</div>
							</div>
						</div>
						<div class="col-md-3" style="text-align: right;">
							<span class="cart-list-price" style="font-weight: 600; font-size: 2rem;">
								<?php $total += $product[0]->price ?>
								L. {{ number_format($product[0]->price) }}
							</span>
						</div>
					</div>
					@endforeach

					<!-- Total -->
					<div class="row padding-top-30 padding-bottom-30">
						<div class="col-md-12" style="text-align: right;">
							<span style="font-size: 2rem; font-weight: 600;">Total:</span>
							<span style="font-size: 2rem; font-weight: 600; color: #ca0081">
								L. {{ number_format($total) }}
							</span>
						</div>
					</div>
					<!-- end of total -->

					<div class="row padding-top-60">
						<div class="col-md-12" style="font-size: 1.2rem;">
							El precio y la disponibilidad de los productos de miabelezahn.com están sujetos a cambio. En el carrito de compras puedes dejar temporalmente los productos que quieras. Aparecerá el precio más reciente de cada producto.
						</div>
					</div>

				</div>
				<!-- end of cart -->

				<!-- Payment button -->
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12 product" style="text-align: center; padding: 2rem 0; background: #fff; border: 1px solid">
							<span style="font-weight: 600;">2 productos seleccionados</span>
						</div>
						<div class="col-md-12 padding-top-30 center" style="text-align: center">
							<a href="#" class="btn btn-primary">
								Pagar
								<i class="fa fa-cart"></i>
							</a>
						</div>
					</div>

					<!-- others -->
					<div class="row padding-top-60">
						<div class="col-md-12">

							<!-- Otros productos -->
							<div class="product">
					            <article> 
					            	<img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > 
					            	<!--<span class="sale-tag">-25%</span> -->
					              
					              <!-- Content --> 
					              <span class="tag">Perfumes</span> 
					              	<a href="#." class="tittle">212</a> 
					              <!-- Reviews -->
					              <!--<p class="rev">
					              	<i class="fa fa-star"></i>
					              	<i class="fa fa-star"></i>
					              	<i class="fa fa-star"></i>
					              	<i class="fa fa-star"></i> 
					              	<i class="fa fa-star"></i> 
					              	<span class="margin-left-10">5 Review(s)</span>
					              </p>-->
					              <div class="price">L 350.00 <span>L 200.00</span></div>
					              <a href="#." class="cart-btn">
					              	<i class="icon-basket-loaded"></i>
					              </a> 
					            </article>
					        </div>

					        <div class="product">
					            <article> 
					            	<img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > 
					            	<!--<span class="sale-tag">-25%</span>--> 
					              
					              <!-- Content --> 
					              <span class="tag">Perfumes</span> 
					              <a href="#." class="tittle">Jean Paul Gaultier</a> 
					              <!-- Reviews -->
					              <!--<p class="rev">
					              	<i class="fa fa-star"></i>
					              	<i class="fa fa-star"></i>
					              	<i class="fa fa-star"></i>
					              	<i class="fa fa-star"></i> 
					              	<i class="fa fa-star"></i> 
					              	<span class="margin-left-10">5 Review(s)</span>
					              </p>-->
					              <div class="price">L350.00 <span>L200.00</span></div>
					              <a href="#." class="cart-btn">
					              	<i class="icon-basket-loaded"></i>
					              </a> 
					          	</article>
					        </div>

						</div>
					</div>
					<!-- end of others -->
				</div>
				<!-- end of pay button -->
			</div>


		</div>
	</section>

	<!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>Te recomendamos.</h2>
          <hr>
        </div>
        
        <!-- Items -->
        <div class="item-col-5"> 
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