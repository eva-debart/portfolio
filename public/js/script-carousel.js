const MultipleElementCarousel = document.querySelector(
  "#carouselExampleControls"
);

var carouselWidth =('.carousel-inner')[0].scrollWidth;
var cardWidth = $('.carousel-item').width();
var scrollPosition = 0;

function scrollTo(element, to, duration) {
        var start = scrollPosition.scrollTop,
            change = to - start,
            currentTime = 0,
            increment = 20;
        
        var animateScroll = function(){        
            currentTime += increment;
            var val = Math.easeInOutQuad(currentTime, start, change, duration);
                scrollPosition.scrollTop = val;
            if(currentTime < duration) {
                setTimeout(animateScroll, increment);
            }
        };
        animateScroll();
    }
    
    //t = current time
    //b = start value
    //c = change in value
    //d = duration
    Math.easeInOutQuad = function (t, b, c, d) {
      t /= d/2;
    	if (t < 1) return c/2*t*t + b;
    	t--;
    	return -c/2 * (t*(t-2) - 1) + b;
    };
if (window.matchMedia("(min-width: 576px)").matches) {
    const carousel = new bootstrap.Carousel(MultipleElementCarousel, { interval: false
    })

    
    
    $('.carousel-control-next').on('click', function(){
        if(scrollPosition < (carouselWidth - (cardWidth *4))){
            console.log('next');
            scrollPosition = scrollPosition + cardWidth;
            $('.carousel-inner').scrollTo(scrollPosition, 600);
        }
    });
    
    $('.carousel-control-prev').on('click', function(){
        if(scrollPosition > 0){
            console.log('prev');
            scrollPosition = scrollPosition - cardWidth;
            $('.carousel-inner').scrollTo(scrollPosition, 600);
        }
    });
    
   
}
else {
  $(MultipleElementCarousel).addClass("slide");
}
    
