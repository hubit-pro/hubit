@extends('frontend.itSolution.common.layout.app')
@section('title', 'Product')
@push('style')
	
  <link rel="stylesheet" type="text/css" href="{{asset('css/top-header.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/solution/navsolution.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
  <link rel="stylesheet" type="text/css" href="css/solution/product.css">

@endpush
@section('content')


<!--------------------------NON-SLIDER----------------------->
<section class="container-fluid p-0 non" style="position: relative;">

  <!-- <img src="{{asset('img/train.jpg')}}"> -->
<!--  -->

<!-------------------------TEXT CONTAINER-------------------->
  <section class="container-fluid" id="topper"><!--this id "topper" is the transparent box over the slider--->

    <div class="row pt-5 pb-4 rib">
   

    <div class="row">
      <div class="col-xl-12 text-center" style="color: white;">
        <h3>Solution-->Product</h3>
      </div>
    </div>

  </section>

</section>
<!-------------------------TEXT CONTAINER END---------------->


<!-- -----------------GALLERY START-------------->
<section class="container-fluid p-5">
  <div class="row">

<!------------tabs start---------->
    <div class="col-xl-12 tabs">
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

<!------------camera start---------->
    <div class="col-xl-12 panel" >
      <div class="row">
		@if(isset($products))
		@foreach($products as $key => $product)
	        <div class="col-xl-3 p-1 gallen product product-{{$product->product_category_id}}">
	        @foreach($product->images as $key => $image)
	        	@if($key == 0)
		          <img src="{{asset('images/uploads/'. $image->image)}}" height="200px">
		         @endif
	         @endforeach
	         <div class="ingallen">
	             <p><ins>{{$product->title}}</ins></p>
	             {!! $product->description !!}
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

@push('script')
<script src="{{asset('js/gal.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131576038-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131576038-1');
  </script>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WT6FX7W');</script>


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
@endpush