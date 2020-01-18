@extends('frontend')

@section('content')

<!-- Content -->
  <div id="content"> 
    
    
        
    <!-- Top Selling Week -->
    <section class="light-gry-bg padding-top-60 padding-bottom-30">
      <div class="container"> 
        
        <!-- heading -->
        <div class="heading">
          <h2>RESULTADOS DE LA BÚSQUEDA</h2>
          <hr>
        </div>
        
        <!-- Items -->
        <div class="item-col-5"> 
          
          <!-- Product -->
          
          
          <!-- Product -->
          <form name="form-cart" action="post">
          @csrf
			@foreach($results as $object)
				@component('parts.frontend.product.view', ['object' => $object, 'media' => $media])@endcomponent
			@endforeach
			</form>

          
        </div>
      </div>
    </section>
    
    
    
  </div>

@stop
