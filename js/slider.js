var Slider = (function(){
  var slider = {};

  slider.init = function(options) {
    slider.el = $(options.domElement) || $('#slider');
    slider.slides = slider.el.children('.slide');
    slider.slidesAmount = slider.slides.length;
    slider.el.css('height', (100*slider.slidesAmount) + '%');
    slider.slideHeight = 100/slider.slidesAmount;
    slider.slides.css('height', slider.slideHeight + '%');
    slider.index = 0;
  }

  slider.goTo = function(index) {
    if (index < 0 || index > slider.slidesAmount -1) {
			return
		}

    slider.el.css('transform', 'translateY(-' + (slider.slideHeight * index ) + '%)');

    slider.index = index;
  }

  slider.next = function() {
    slider.goTo(slider.index+1);
  }

  slider.prev = function() {
    slider.goTo(slider.index-1);
  }

  return slider;
})();
