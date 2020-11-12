@extends('frontend.itSolution.common.layout.app')
@section('title', 'Product')
@push('style')
	
  <link rel="stylesheet" type="text/css" href="{{asset('css/top-header.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/solution/navsolution.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/solution/products.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<script src="https://kit.fontawesome.com/ebfafc2eb8.js" crossorigin="anonymous"></script>

  

@endpush
@section('content')


<section class="container-fluid mt-1 searchbar" >
<div class="row">
	<div class="col-md-2 title">
		<h4><strong>HUBIT STORE</strong></h4>
	</div>
	<div class="col-md-10">
<div class="searchbox animated zoomIn">
                <form method="get">
                    <input oninput="triggercross(this.value)" type="text" placeholder="search" id="search" name="search"
                        class="search"><i class="fas fa-search"></i>
                    <button onclick="close1()" id="closeid" type="reset" class="close">
                        <i class="fas fa-times"></i>
                        <p id="demo"></p>
                    </button>
                </form>

			</div>
			</div>
			</div>
</section>

<!-- -----------------GALLERY START-------------->
<section class="container-fluid mt-2">
  <div class="row">

<!------------tabs start---------->
    <div class="col-xl-2 tabs mt-3">
      <!-- <div class="row click">
      	@if(isset($product_categories))
	      	@foreach($product_categories as $key => $category)
	        <div class="col-xl-2 p-2">
	          <a href="javascript:;" class="tab product-category" data-category-id="{{$category->id}}" ><h6>{{$category->title}}</h6></a>
	        </div>
	        @endforeach
        @endif
	  </div> -->
	  

<!-- Section: Categories -->

<section class="container-fluid" style=" border-bottom: 1px solid rgba(128, 128, 128, 0.356);">
<h5>Catagories</h5>

  @if(isset($product_categories))
	      	@foreach($product_categories as $key => $category)
  <div class="text-muted small text-uppercase">
<p class="mb-0"><a href="javascript:;" class="card-link-secondary" data-category-id="{{$category->id}}">{{$category->title}}</a></p>
	@endforeach
        @endif
	

<!-- Section: Categories -->

</section>
    </div>
<!------------tabs end----------> 


<div class="col-xl-10 " >   
      <div class="row ">
		@if(isset($products))
		@foreach($products as $key => $product)
	        <div class="col-md-3 m-2  text-center p-1 gallen product product-{{$product->product_category_id}}">
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
      <span>  {!! $product->description !!}	</span>  
    
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


<script>
	function triggercross(val) {
    var val = document.getElementById("search");
    var x = document.getElementById("closeid");
    x.style.display = "block";
}

function close1() {

    // document.getElementById("demo").innerHTML = "You wrote: " + val;
    var x = document.getElementById("closeid");
    if (x.style.display == "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}


</script>
@endpush