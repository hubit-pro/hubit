<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<linK rel="stylesheet" type="text/css" href="css/training/career-training.css">
	<title>Career</title>
</head>
@include('includes/traininghead')
<body>
@include('includes/navtraining')
<div class="container-fluid banner">
	<img src="img/career-banner.jpg"><hr>
	
</div>
<div class="conatiner-fluid for-you">
	<div class="container">
<div class="row">
	<div class="col">
		<img src="img/logo3.png">
	</div>
</div>

	<div class="row">
		<div class="col">
			<h1>For you, with you.<br> ALWAYS!</h1><br>
			<p>There are many web design training institute, but none quite like IMI Academy. 
				We’ve been around for over 10 years in this industry but you wouldn’t guess it from the energy
				 in the place. Along the way, we always strive for and always work for the betterment and
				  bright future of our students. We prepare them tough enough for every challenge
				   which may come in their life.</p>
		</div>
	</div>
	</div>

</div>


<div class="container-fluid our-alumini">
	<div class="row">
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/graduation-hat.svg">
			</div>
		</div>
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/connection.svg">
			</div>
		</div>
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/university-lecture.svg">
			</div>
		</div>
		<div class="col-md-3">
			<div class="content">
				<img src="https://labanepal.com/assets/front/images/svg/open-book.svg">
			</div>
		</div>

	</div>
</div>
<h1>JQUERY NUMBER ANIMATION</h1>
<h3>jQuery counter to count up to a target number</h3>

<div class="wrapper">
  
    <div class="counter col_fourth">
      <i class="fa fa-coffee fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
      <p class="count-text ">SomeText GoesHere</p>
    </div>

    <div class="counter col_fourth">
      <i class="fa fa-lightbulb-o fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
      <p class="count-text ">SomeText GoesHere</p>
    </div>

    <div class="counter col_fourth end">
      <i class="fa fa-bug fa-2x"></i>
      <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
      <p class="count-text ">SomeText GoesHere</p>
    </div>
</div>
@include('includes/footer')
	<script>
		(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>
</html> 