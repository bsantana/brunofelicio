
(function($, window){
	$(document).on({
		'ready': function(e){
			var $jcarousel = $('.jcarousel'),
				$items = $jcarousel.find('.item'),
				total=0,
				max = 0;

			$items.each(function() {
				var $this = $(this),
					height = $this.outerHeight(true);
				$this.css({
					'width': $this.width(),
				});
				total += $this.outerWidth(true);
				if(max<height)
					max = height;
			}).each(function() {
				var $this = $(this);
				$this.css({
					'margin-top': Math.floor((max-$this.height())/2)
				});
			});

			if(total>=$jcarousel.width()){
				$jcarousel.jcarousel({
					scroll: 1,
					animation: 200,
					auto: 10,
					wrap: 'circular',
					'buttonNextHTML': "<a href='#next' class='next'></a>",
					'buttonPrevHTML': "<a href='#prev' class='prev'></a>"
			    });
			} else {
				$(".prev, .next").hide();
			}

			/* ANIMACAO PARA O COMO FUNCIONA */
			var steps = {
				$container: $('.steps')
			};
			steps.pos = steps.$container.position();
			steps.$items = steps.$container.find('.step');

			steps.$items.each(function (k, step){
				var $step = $(step),
					$animate = $step.children('.animate');

				$step.height($animate.outerHeight(true));
				$animate.width($animate.outerWidth(true));
				$animate.css({
					'position': 'absolute',
					'left': '-100px',
					'opacity': 0
				}).delay(k*500).animate({
					'left': 15,
					'opacity': 1
				}, 500, function (){
					$step.addClass('shown');
				});
			});

			
		}
	});
})(jQuery, window);



