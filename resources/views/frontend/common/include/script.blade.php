<script>
	$('.carousel').carousel({
    cycle: true,
    pause: "null"
})
</script>
<script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script src="OwlCarousel2-2.3.4/OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script type="text/javascript">
	var owl = $('.owl-carousel');
	owl.owlCarousel({
    loop:true,
    margin:0,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
0:{
items:3
},
600:{
items:3
},
1000:{
items:5
}
}

});
</script>
<script src="{{asset('js/miss.js')}}"></script>