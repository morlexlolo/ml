$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
    loop:true,
    margin:10,
    stagePadding: 25,
    video:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            loop:true
        }
    }
    });
    
  });

//   Plyr 
const player = new Plyr('#player');