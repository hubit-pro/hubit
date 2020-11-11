@extends('frontend.itSolution.common.layout.app')
@section('title', 'Product')
@push('style')
	
  <link rel="stylesheet" type="text/css" href="{{asset('css/top-header.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/solution/navsolution.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/solution/products.css')}}">
  

@endpush
@section('content')




<!-- -----------------GALLERY START-------------->
<section class="container-fluid">
  <div class="row">

<!------------tabs start---------->
    <div class="col-xl-2 tabs">
      <div class="row click">
      	@if(isset($product_categories))
	      	@foreach($product_categories as $key => $category)
	        <div class="col-xl-2 p-2">
	          <a href="javascript:;" class="tab product-category" data-category-id="{{$category->id}}" ><h6>{{$category->title}}</h6></a>
	        </div>
	        @endforeach
        @endif
      </div>
    </div>
<!------------tabs end----------> 


<div class="col-xl-10 " >   
      <div class="row ">
		@if(isset($products))
		@foreach($products as $key => $product)
	        <div class="col-xl-3 m-2  text-center p-1 gallen product product-{{$product->product_category_id}}">
	        @foreach($product->images as $key => $image)
	        	@if($key == 0)   					

<div class="product-item">
  <!--Ribbon-->
      <div class="ribbon-wrapper">
      <div class="ribbon"> sale </div>
    </div>
 <!--//Ribbon-->
	<img src="{{asset('images/uploads/'. $image->image)}}" alt="">
	@endif
	@endforeach
	<a href="#" class="product-item__name">{{$product->title}} </a>
	
   <div class="product-item__description">    
      <span>  {!! $product->description !!}	  </span>  
    
  </div>
  
    						<div class="product-item__price">
    							<a href="#" class="btn btn--buy">BUY NOW</a>
    							<div class="price">
              <a href="#" class="delivery">Best price</a>
                    <span  class="rouble">Rs<span>17000</span></span></div>

    						</div>
    					</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
</div>




@endforeach
	    @endif
</div>
</div>
<!------------camera start---------->
    <!-- <div class="col-xl-10 panel " >   
      <div class="row ">
		@if(isset($products))
		@foreach($products as $key => $product)
	        <div class="col-xl-3 m-2  text-center p-1 gallen product product-{{$product->product_category_id}}">
	        @foreach($product->images as $key => $image)
	        	@if($key == 0)
		          <img src="{{asset('images/uploads/'. $image->image)}}" height="120px">
		         @endif
	         @endforeach
	         <div class="ingallen">
	             <p><ins>{{$product->title}}</ins></p>
	             {!! $product->description !!}
			 </div>
			 
			<button class="btn col">Buy Now</button>
			<button class="btn col">Add to cart</button>
			
			 
			</div>
	    @endforeach
	    @endif
      </div>
    </div>
 -->

  </div>
</section>
<!-- -----------------GALLERY END-------------->

@endsection

@push('script')l'


<script type="text/javascript">
	let $category = $('.product-category')
	let $product = $('.product')

	$category.on('click', function(e) {
		e.preventDefault()
		let categoryId = $(this).data('category-id')
		console.log(categoryId)

		if (!categoryId) {
			return
		}
		$product.hide()
		$('.product-'+categoryId).show()
	})
</script>

<script>
	vw = $(window).outerWidth();

$('#cart').click(flip);

if (vw > 768) {
 $('.card').hover(
function() {
  $('.description').toggleClass('show');
  $('.image-wrapper').toggleClass('shrink');
}
) 
}

function flip() {
  $('#cart').addClass('flipped');
  $('#cart').addClass('added');
  $('.backside').addClass('show');
  $('.front').addClass('hide');
}

// Image taken from 1924 - http://www.1924.us/post/110067977427
</script>
@endpush