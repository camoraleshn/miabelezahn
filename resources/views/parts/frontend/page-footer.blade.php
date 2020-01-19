<!-- JavaScripts --> 
<script src="{{ asset('frontend/js/vendors/jquery/jquery.min.js') }}"></script> 
<script src="{{ asset('frontend/js/vendors/wow.min.js') }}"></script> 
<script src="{{ asset('frontend/js/vendors/bootstrap.min.js') }}"></script> 
<script src="{{ asset('frontend/js/vendors/own-menu.js') }}"></script> 
<script src="{{ asset('frontend/js/vendors/jquery.sticky.js') }}"></script> 
<script src="{{ asset('frontend/js/vendors/owl.carousel.min.js') }}"></script> 

<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
<script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.tp.t.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('frontend/rs-plugin/js/jquery.tp.min.js') }}"></script> 
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script>
	var urlAddToCart = '{{ route('addtocart') }}';
	var urlGetCart = '{{ route('getcart') }}';
</script>
<script src="{{ asset('frontend/js/cart.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156452863-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156452863-1');
</script>

@stack('scripts')
<!-- end of scripts -->

</body>
</html>