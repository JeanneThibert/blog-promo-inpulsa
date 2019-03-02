jQuery(document).ready(function($){
    
    // $("h1").css('color', "#f00")
    // MENU GALLERY


    // $("h1").css('color', "#f00");
    $(".profil").click(function(){
        $(this).toggleClass('turn');
    });
    // var image = document.getElementsByClassName('thumbnail');
    // new simpleParallax(image, {
    //     delay: .6,
    //     transition: 'cubic-bezier(0,0,0,1)'
    // });

    $(window).scroll(function(){
        var scroll_position = $(window).scrollTop()/3;
        $('.parallax').css({
            'background-position-x' : - scroll_position + 'px',
        })
    })

    var fullScreen = $(window).height();
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll > 100) {
        $(".go-up").css("display", "block");
        console.log("block");
    } else {
        $(".go-up").css("display", "none");
      console.log("none");

    }
  });
});

// transition for btn haut de page

(function () {
    var speed = 600;
    var moving_frequency = 15; // Affects performance !
  
    var links = document.querySelectorAll("a"); // Active links
  
    var href;
  
    for (var i = 0; i < links.length; i++) {
      href = links[i].attributes.href === undefined ? null : links[i].attributes.href.nodeValue.toString();
  
      if (href !== null && href.length > 1 && href.substr(0, 1) == '#') {
        links[i].onclick = function () {
          var element;
          var href = this.attributes.href.nodeValue.toString();
  
          if (element = document.getElementById(href.substr(1))) {
            var hop_count = speed / moving_frequency;
            var getScrollTopDocumentAtBegin = getScrollTopDocument();
            var gap = (getScrollTopElement(element) - getScrollTopDocumentAtBegin) / hop_count;
  
            for (var j = 1; j <= hop_count; j++) {
              (function () {
                var hop_top_position = gap * j;
                setTimeout(function () {
                  window.scrollTo(0, hop_top_position + getScrollTopDocumentAtBegin);
                }, moving_frequency * j);
              })();
            }
          }
  
          return false;
        };
      }
    }
  
    var getScrollTopElement = function getScrollTopElement(e) {
      var top = 0;
  
      while (e.offsetParent != undefined && e.offsetParent != null) {
        top += e.offsetTop + (e.clientTop != null ? e.clientTop : 0);
        e = e.offsetParent;
      }
  
      return top;
    };
  
    var getScrollTopDocument = function getScrollTopDocument() {
      return document.documentElement.scrollTop + document.body.scrollTop;
    };
  })();

    



// $(function() {
//     // OPACITY OF BUTTON SET TO 0%
//     $(".roll").css("opacity","0");
     
//     // ON MOUSE OVER
//     $(".roll").hover(function () {
     
//     // SET OPACITY TO 70%
//     $(this).stop().animate({
//     opacity: .7
//     }, "fast");
//     },
                  
     
//     // ON MOUSE OUT
//     function () {
     
//     // SET OPACITY BACK TO 50%
//     $(this).stop().animate({
//     opacity: 0
//     }, "slow");
//     });
//     });

/*	gallery filtre  */
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');
        }
        else
        {
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }

	        	if ($(".filter-button").removeClass("active")) {
			$(this).removeClass("active");
		    }
		    	$(this).addClass("active");
	    	});
});


$(document).ready(function(){
 $(".fancybox").fancybox({
        buttons: [
        "zoom",
        "fullScreen",
        "share",
        "thumbs",
        "close"
        ],
        protect: true
    });   
}); 



var TxtType = function(el, toRotate, period) {
    this.toRotate = toRotate;
    this.el = el;
    this.loopNum = 0;
    this.period = parseInt(period, 10) || 2000;
    this.txt = '';
    this.tick();
    this.isDeleting = false;
};

TxtType.prototype.tick = function() {
    var i = this.loopNum % this.toRotate.length;
    var fullTxt = this.toRotate[i];

    if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

    var that = this;
    var delta = 200 - Math.random() * 100;

    if (this.isDeleting) { delta /= 2; }

    if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
    }

    setTimeout(function() {
    that.tick();
    }, delta);
};

window.onload = function() {
    var elements = document.getElementsByClassName('typewrite');
    for (var i=0; i<elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-type');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtType(elements[i], JSON.parse(toRotate), period);
        }
    }
    // INJECT CSS
    var css = document.createElement("style");
    css.type = "text/css";
    css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
    document.body.appendChild(css);
};

