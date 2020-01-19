@extends('frontend')



@section('content')

	
  <?php /* ?>
	<!-- Slid Sec -->
  @component('parts.frontend.home-slider')@endcomponent
  <?php */ ?>
  
  <!-- Content -->
  <div id="content"> 
    
    
        
    <!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
      <div class="container"> 
        
        <!-- heading -->
        <!--<div class="heading">
          <h2>MAS VENDIDO</h2>
          <hr>
        </div>-->
        
        <!-- Items -->
        <div class="item-col-5"> 
          
          <!-- Product -->
          
          
          <!-- Product -->
          <form name="form-cart" action="post">
          @csrf
          @foreach ( $list as $key => $object )

            @if($key == 0)
              @component('parts.frontend.product.featured', ['object' => $object, 'media' => $media])@endcomponent
            @else
              @component('parts.frontend.product.view', ['object' => $object, 'media' => $media])@endcomponent
            @endif

          @endforeach
          </form>
          <?php /* ?>
          <div class="product">
            <article> <img class="img-responsive" src="images/item-img-1-6.jpg" alt="" > <span class="sale-tag">-25%</span> 
              
              <!-- Content --> 
              <span class="tag">Tablets</span> <a href="#." class="tittle">Mp3 Sumergible Deportivo Slim Con 8GB</a> 
              <!-- Reviews -->
              <p class="rev"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <i class="fa fa-star"></i> <span class="margin-left-10">5 Review(s)</span></p>
              <div class="price">$350.00 <span>$200.00</span></div>
              <a href="#." class="cart-btn"><i class="icon-basket-loaded"></i></a> </article>
          </div>
          <?php */ ?>
          
        </div>
      </div>
    </section>
    
    
    <!-- Top Selling Week -->
    <!--<section class="padding-top-60 padding-bottom-60">
      <div class="container"> 
        
        <div class="heading">
          <h2>From our Blog</h2>
          <hr>
        </div>
        <div id="blog-slide" class="with-nav"> 
          
          <div class="blog-post">
            <article> <img class="img-responsive" src="images/blog-img-1.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
          
          <div class="blog-post">
            <article> <img class="img-responsive" src="images/blog-img-2.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">Get the power to take your business to the
              next level. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
          
          <div class="blog-post">
            <article> <img class="img-responsive" src="images/blog-img-3.jpg" alt="" > <span><i class="fa fa-bookmark-o"></i> 25 Dec, 2017</span> <span><i class="fa fa-comment-o"></i> 86 Comments</span> <a href="#." class="tittle">It’s why there’s nothing else like Mac. </a>
              <p>Etiam porttitor ante non tellus pulvinar, non vehicula lorem fermentum. Nulla vitae efficitur mi [...] </p>
              <a href="#.">Readmore</a> </article>
          </div>
        </div>
      </div>
    </section>-->
    
    <!-- Clients img -->
    <!--<section class="light-gry-bg clients-img">
      <div class="container">
        <ul>
          <li><img src="images/c-img-1.png" alt="" ></li>
          <li><img src="images/c-img-2.png" alt="" ></li>
          <li><img src="images/c-img-3.png" alt="" ></li>
          <li><img src="images/c-img-4.png" alt="" ></li>
          <li><img src="images/c-img-5.png" alt="" ></li>
        </ul>
      </div>
    </section>-->
    
    <!-- Newslatter -->
    <!--<section class="newslatter">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Subscribete <span>Reciba <strong>Nuevas Ofertas</strong> cada semana!</span></h3>
          </div>
          <div class="col-md-6">
            <form>
              <input type="email" placeholder="Correo electronico...">
              <button type="submit">Suscrbir!</button>
            </form>
          </div>
        </div>
      </div>
    </section>-->
  </div>
@stop
