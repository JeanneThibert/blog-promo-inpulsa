jQuery(document).ready(function($){
    
    // $("h1").css('color', "#f00")
    // MENU GALLERY


    // $("h1").css('color', "#f00");
    $(".profil").click(function(){
        $(this).toggleClass('turn');
    });


});

    // $("h1").css('color', "#f00")
    // MENU GALLERY

var selectedClass = "";
$(".fil-cat").click(function(){ 
    console.log("fil-cat");
selectedClass = $(this).attr("data-rel"); 
console.log("data-rel");
$("#portfolio").fadeTo(100, 0.1);
console.log("portfolio");
$("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
setTimeout(function() {
$("."+selectedClass).fadeIn().addClass('scale-anm');
console.log("scale-anm");
$("#portfolio").fadeTo(300, 1);
}, 300); 

});
   
// function pour loupe sur image page équipe
var modal = document.getElementById('demo-modal');
var img = document.querySelector('loupe');
var bigimg = document.querySelector('big');
var modalImg = document.getElementById('modal-img');
var captionText = document.getElementById('caption');

// for( i = 0 ; i < img.length; i++ ){
//     if(img.options[i].selected){
// img.addEventListener('click', function(e){
    
//     modal.style.display = "block";
//     modalImg.src = bigimg.src;
//     modalImg.alt = bigimg.alt;
//     captionText.innerHTML = bigimg.alt;
//     console.log('coucou');
// })
// }
// };



// img.onclick = function() {
//     console.log('loupe');
//     console.log('big');
//   modal.style.display = "block";
//   modalImg.src = bigimg.src;
//   modalImg.alt = bigimg.alt;
//   captionText.innerHTML = bigimg.alt;
// }

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];
// // When the user clicks on <span> (x), close the modal
// span.onclick = function() { 
//   modal.style.display = "none";
// }



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





