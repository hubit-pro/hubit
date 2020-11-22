<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
	@include('includes/solutionhead')

</head>
<body>
    @include("includes/navsolution")

    <main class="container">
 
 <!-- Left Column / Headphones Image -->
 <div class="left-column">
   <img data-image="black" src="https://designmodo.com/demo/product-page/images/black.png" alt="">
   <img data-image="blue" src="https://designmodo.com/demo/product-page/images/blue.png" alt="">
   <img data-image="red" class="active" src="https://designmodo.com/demo/product-page/images/red.png" alt="">
 </div>


 <!-- Right Column -->
 <div class="right-column">

   <!-- Product Description -->
   <div class="product-description">
     <span>Headphones</span>
     <h1>Beats EP</h1>
     <p>The preferred choice of a vast range of acclaimed DJs. Punchy, bass-focused sound and high isolation. Sturdy headband and on-ear cushions suitable for live performance</p>
   </div>

   <!-- Product Configuration -->
   <div class="product-configuration">

     <!-- Product Color -->
     <div class="product-color">
       <span>Color</span>

       <div class="color-choose">
         <div>
           <input data-image="red" type="radio" id="red" name="color" value="red" checked>
           <label for="red"><span></span></label>
         </div>
         <div>
           <input data-image="blue" type="radio" id="blue" name="color" value="blue">
           <label for="blue"><span></span></label>
         </div>
         <div>
           <input data-image="black" type="radio" id="black" name="color" value="black">
           <label for="black"><span></span></label>
         </div>
       </div>
     </div>

     <!-- Cable Configuration -->
     <div class="cable-config">
       <span>Cable configuration</span>

       <div class="cable-choose">
         <button>Straight</button>
         <button>Coiled</button>
         <button>Long-coiled</button>
       </div>

       <a href="#">How to configurate your headphones</a>
     </div>
   </div>

   <!-- Product Pricing -->
   <div class="product-price">
     <span>148$</span>
     <a href="#" class="cart-btn">Add to cart</a>
   </div>
 </div>
</main>
    
    @include("includes/footer")
    
    <script>

$(document).ready(function() {

$('.color-choose input').on('click', function() {
  var headphonesColor = $(this).attr('data-image');
  $('.active').fadeOut(500).removeClass('active');
  $('.left-column img[data-image = ' + headphonesColor + ']').fadeIn(250).addClass('active');
  $(this).addClass('active');
});
});
    </script>
    

    
</body>
</html>