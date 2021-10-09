(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
var windowWidth_1920 = $('.page-body-cntlr').width();
var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
if($("ul.slick-dots li").length == 1){
   $("ul.slick-dots").hide();
}
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


var swiper = new Swiper('.catagorySlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.catagorySlider-arrows .swiper-button-next',
      prevEl: '.catagorySlider-arrows .swiper-button-prev',
    },
    breakpoints: {
       639: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1199: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1920: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });

if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}



/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();


/*start of Noyon*/
if( $('.hamburger-icon-wrap').length ){
  $('.hamburger-icon-wrap').click(function(){
    $('body').toggleClass('allWork');
  });
}
if( $('li.menu-item-has-children a').length ){
  $('li.menu-item-has-children a').click(function(e){
   e.preventDefault();
   $(this).next().slideToggle(300);
   $(this).parent().toggleClass('this-sub-menu-active');
 });
}



if (windowWidth > 767) {
  if( $('.right-sqr').length ){
    var hdrH = $('.header').outerHeight();
    var bnrH = $('.hm-banner').outerHeight();
    var RAH = hdrH + bnrH + 40;
    var windowWidth_1920 = $('.page-body-cntlr').width();
    var ConW = $('.container').width();
    var rightSqrW = ((windowWidth_1920 -ConW) /2);
    $(".right-sqr").css('height', RAH);
    $('.right-sqr').css('width', rightSqrW);
  }
}
if (windowWidth > 767) {
  if( $('.right-angle').length ){
    var windowWidth_1920 = $('.page-body-cntlr').width();
    var ConW = $('.container').width();
    var rightSqrW = ((windowWidth_1920 -ConW) /2);
    var hdrH = $('.header').outerHeight();
    var bnrH = $('.hm-banner').outerHeight();
    var RAH = hdrH + bnrH + 40;
    var RGTW = $('.right-angle').outerWidth();
    $(".right-angle").css('height', RAH);
    $('.right-angle').css('border-top-width', RAH);
    $('.right-angle').css('right', rightSqrW);

  }
}


$(window).resize(function() { 
  var window2Width = $(window).width();
  $(".right-angle").css('height', RAH);
});

if (windowWidth > 767){
  if( $('.ftr-lft-bg').length ){
    var ftrLftH = $('.ftr-top-cntlr').outerHeight();
    $('.ftr-lft-bg-angle').css('border-top-width', ftrLftH);
  }
}
if (windowWidth > 767){
  if( $('.ftr-btm-mdl').length ){
    var ftrBtmMdla = $('.ftr-btm-mdl').outerHeight();
    $('.ftr-btm-mdl-after').css('border-top-width', ftrBtmMdla);
  }
}
if (windowWidth > 767){
  if( $('.ftr-btm-mdl').length ){
    var ftrBtmMdlb = $('.ftr-btm-mdl').outerHeight();
    $('.ftr-btm-mdl-before').css('border-bottom-width', ftrBtmMdlb);
  }
}

if (windowWidth <= 767){
  $('.ftr-col h6').on('click', function(e){
    e.preventDefault();
    $(this).next().slideToggle(500);
    $(this).parent().siblings().find('.ftr-menu').slideUp(300);
    $(this).toggleClass('arrow-rotate');
    $(this).parent().siblings().find('h6').removeClass('arrow-rotate');
  });
}

/*start of Kashob*/




/*start of Shariful*/




/*start of Dipok*/



/*start of Momin*/



/*start of Jahir*/




/*start of Rannojit*/





    new WOW().init();

})(jQuery);