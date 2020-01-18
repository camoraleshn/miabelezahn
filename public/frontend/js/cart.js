$(document).ready(function(){

	// get cart products
	var getProductsCart = function() {
		$.ajax({
			url: urlGetCart,
			dataType: 'json',
			success: function(data){
				$.each(data, function(key, value){
					$('.cart-list-top')
					.append('<li>'+
							'<div class="media-left">'+ 
								'<a href="#." class="thumb">'+ 
									'<img src="/cart/public/media/images/perfumes/212-vip.jpg"'+ 
											'class="img-responsive"'+
											'alt="" >'+
								'</a>'+
							'</div>'+
		              		'<div class="media-body">'+
			              		'<a href="#." class="tittle">'+
			              		value[0].object_name +
			              		'</a>'+ 
			              		'<span>L. '+ value[0].price +'</span>'+ 
		              		'</div>'+
		            		'</li>'	
		            		);
					
				});
			}
		});
	};

	getProductsCart();


	// add to cart
	$('.add-to-cart').on('click', function(){
		var product = $(this).attr('data-id');
		var token = $('input[name="_token"]').val()
		console.log('product: ' + product + ' token: ' + token);

		$.ajax({
			url: urlAddToCart,
			data: {'product': product, '_token': token},
			type: 'post',
			dataType: 'json',
			success: function(data){
				console.log(data);
				getProductsCart();
			}
		});
	});


});