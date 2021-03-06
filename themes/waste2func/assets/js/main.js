(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
var windowWidth_1920 = $('.page-body-cntlr').width();
var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	

//fixed header
$(window).scroll(function() { 
    var scroll = $(window).scrollTop();   
    if (scroll >= 100) {
        $('.header-sticky').addClass('fixed-hdr');
    } else {
        $('.header-sticky').removeClass('fixed-hdr');
    }  
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
  $(window).resize(function(){
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
  });
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


  if( $('.page-right-sqr').length ){
    var phdrH = $('.header').outerHeight();
    var windowWidth_1920 = $('.page-body-cntlr').width();
    var pConW = $('.container').width();
    var prightSqrW = ((windowWidth_1920 - pConW) /2);
    $(".page-right-sqr").css('height', phdrH);
    $('.page-right-sqr').css('width', prightSqrW);
  }
  $(window).resize(function(){
    if( $('.page-right-sqr').length ){
      var phdrH = $('.header').outerHeight();
      var windowWidth_1920 = $('.page-body-cntlr').width();
      var pConW = $('.container').width();
      var prightSqrW = ((windowWidth_1920 - pConW) /2);
      $(".page-right-sqr").css('height', phdrH);
      $('.page-right-sqr').css('width', prightSqrW);
    }
  });
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
  $(window).resize(function(){
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
  });
  

  if( $('.page-right-angle').length ){
    var windowWidth_1920 = $('.page-body-cntlr').width();
    var ConW = $('.container').width();
    var pahdrH = $('.header').outerHeight();
    var raightSqrW = ((windowWidth_1920 -ConW) /2);
    var pahdrH = $('.header').outerHeight();
    $(".page-right-angle").css('height', pahdrH);
    $('.page-right-angle').css('border-top-width', pahdrH);
    $('.page-right-angle').css('right', raightSqrW);

    $(window).resize(function(){
        var windowWidth_1920 = $('.page-body-cntlr').width();
        var ConW = $('.container').width();
        var pahdrH = $('.header').outerHeight();
        var raightSqrW = ((windowWidth_1920 -ConW) /2);
        var pahdrH = $('.header').outerHeight();
        $(".page-right-angle").css('height', pahdrH);
        $('.page-right-angle').css('border-top-width', pahdrH);
        $('.page-right-angle').css('right', raightSqrW);
      });
  }

}


/*sticky header angle */
  /* right*/
  if( $('.page-right-sqr-fixed').length ){
      var psdrH = $('.header-sticky').outerHeight();
      var windowWidth_1920 = $('.page-body-cntlr').width();
      var psConW = $('.container').width();
      var psrightSqrW = ((windowWidth_1920 - psConW) /2);
      $(".page-right-sqr-fixed").css('height', psdrH);
      $('.page-right-sqr-fixed').css('width', psrightSqrW);
  }
  $(window).resize(function(){
    if( $('.page-right-sqr-fixed').length ){
     var psdrH = $('.header-sticky').outerHeight();
      var windowWidth_1920 = $('.page-body-cntlr').width();
      var psConW = $('.container').width();
      var psrightSqrW = ((windowWidth_1920 - psConW) /2);
      $(".page-right-sqr-fixed").css('height', psdrH);
      $('.page-right-sqr-fixed').css('width', psrightSqrW);
    }
  });

  var windowWidth_1920 = $('.page-body-cntlr').width();
  var psaConW = $('.container').width();
  var psahdrH = $('.header-sticky-inr').outerHeight();
  var psaraightSqrW = ((windowWidth_1920 -psaConW) /2);
  $(".page-right-angle-fixed").css('height', psahdrH);
  $('.page-right-angle-fixed').css('border-top-width', psahdrH);
  $('.page-right-angle-fixed').css('right', psaraightSqrW);

  $(window).resize(function(){
      var windowWidth_1920 = $('.page-body-cntlr').width();
      var psaConW = $('.container').width();
      var psahdrH = $('.header-sticky-inr').outerHeight();
      var psaraightSqrW = ((windowWidth_1920 -psaConW) /2);
      $(".page-right-angle-fixed").css('height', psahdrH);
      $('.page-right-angle-fixed').css('border-top-width', psahdrH);
      $('.page-right-angle-fixed').css('right', psaraightSqrW);
  });

  /* left */


  
  var psahdrH = $('.header-sticky-inr').outerHeight();
  $(".page-left-angle-fixed").css('height', psahdrH);
  $('.page-left-angle-fixed').css('border-bottom-width', psahdrH);
  $(window).resize(function(){
      var psahdrH = $('.header-sticky-inr').outerHeight();
      $(".page-left-angle-fixed").css('height', psahdrH);
      $('.page-left-angle-fixed').css('border-bottom-width', psahdrH);
  });

/* end of  sticky header angle */    


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

if( $('.contact-form-wrp').length ){
  $('.contact-form-wrp .wpforms-container .wpforms-form .wpforms-submit-container button').on('click', function(){
    $('.wpforms-field input[required],.wpforms-field select[required]').parents('.wpforms-field').addClass('wpforms-has-error');
    $('.wpforms-field input[required],.wpforms-field select[required]').addClass('wpforms-error');
  });
}


if( $('.wpforms-error').length ){
  $('.wpforms-error').on('click', function(){
    $(this).parents('.wpforms-field').removeClass('wpforms-has-error');
  });
}



var containerWidth = $('.container').width();
var containerOffset = (windowWidth_1920 - containerWidth);

var containerLgtOffset = ((containerOffset / 2)+2);
$('.cnt-boder').css('width', containerLgtOffset);


$(window).resize(function(){
  var windowWidth_1920 = $('.page-body-cntlr').width();
  var containerWidth = $('.container').width();
  var containerOffset = (windowWidth_1920 - containerWidth);

  var containerLgtOffset = ((containerOffset / 2)+2);
  $('.cnt-boder').css('width', containerLgtOffset); 

});

var contactEntryHeader = $('.contact-entry-header').height();
$('.cnt-boder').css('top', contactEntryHeader);

$(window).resize(function(){
  var contactEntryHeader = $('.contact-entry-header').height();
  $('.cnt-boder').css('top', contactEntryHeader);
});


var contactEntryHeader = $('.contact-entry-header').height();
$('.xs-cnt-bdr').css('top', contactEntryHeader);

$(window).resize(function(){
  var contactEntryHeader = $('.contact-entry-header').height();
  $('.xs-cnt-bdr').css('top', contactEntryHeader);
});


if (windowWidth <= 575){
    if( $('.xs-po-gallery-halfslider').length ){
      $('.xs-po-gallery-halfslider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }

  if (windowWidth <= 767){
    if( $('.dfpNdGrdSlider').length ){
      $('.dfpNdGrdSlider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }
  if (windowWidth <= 767){
    if( $('.NdGallerySlider').length ){
      $('.NdGallerySlider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }

/*start of Shariful*/

  if (windowWidth <= 767){
    if( $('.gallerySlider').length ){
      $('.gallerySlider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }
  if (windowWidth <= 767){
    if( $('.btmGallerySlider').length ){
      $('.btmGallerySlider').slick({
        dots: false,
        arrows: false,
        infinite: false,
        autoplay: true,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,

      });
    }
  }


  if (windowWidth <= 767){
    if( $('.dfpGrdSlider').length ){
      $('.dfpGrdSlider').slick({
        dots: true,
        arrows: false,
        infinite: false,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1
      });
    }
  }

  if(windowWidth <= 767){
    if($('.select-2-cntlr').length ){
      $('.select-2-cntlr').select2();
    }
  }

  var promodesHeight = $('.dfp-promo-module-des-ctlr').outerHeight();

  $('.nieuws-details-border').css('width', containerLgtOffset);
  $('.nieuws-details-border').css('top', promodesHeight);

$(window).resize(function(){
  var promodesHeight = $('.dfp-promo-module-des-ctlr').outerHeight();

  $('.nieuws-details-border').css('width', containerLgtOffset);
  $('.nieuws-details-border').css('top', promodesHeight);
});




if( $('.scrollto').length ){
  $('.scrollto').on('click', function(e){
    e.preventDefault();
    var togo = $(this).data('to');
    goToByScroll(togo, 0);
  });
}

function goToByScroll(id, offset){
  if(id){
    // Remove "link" from the ID
    id = id.replace("link", "");
    // Scroll
    $('html,body').animate(
      {scrollTop: $(id).offset().top - offset},
      500);
  }
}


/* custom sidebar */
if( $('#customSidebar').length ){
    var windowWidth_1920 = $('.page-body-cntlr').outerWidth();
    var containerRightWidth = $('#customSidebarWrap').offset().left;
    var col2inw = $('#customSidebarWrap').innerWidth();
    //$('#customSidebar').css("left", containerRightWidth);
    $('#customSidebar').css("max-width", col2inw);
    
    function containerRightWidthCal(){
      var windowWidth_1920 = $(window).width();
      var containerWidth = $('.page-body-cntlr').outerWidth();
        var containerRightWidth = $('#customSidebarWrap').offset().left;
        var col2inw = $('#customSidebarWrap').innerWidth();
        //$('#customSidebar').css("left", containerRightWidth);
        $('#customSidebar').css("max-width", col2inw);
    }
    containerRightWidthCal();
      $(window).on('resize', function(){
      containerRightWidthCal();
    });
    
    if( windowWidth_1920 > 767 ){
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            if( $('#customSidebar .contact-form-info-cntlr').length ){
                var boxh = $('#customSidebar .contact-form-info-cntlr').height();
                var ftrtop = $(".footer-wrp").offset().top;
                //var RelevantTop = $(".user-rel-camp-sec").offset().top;
                var ftrx = (ftrtop - boxh) - 450;
                //var RelevantTrx = (RelevantTop - boxh) - 160;
                if( scroll < ftrx ){
                    $('#customSidebar').css('top', scroll);
                }
               /* if( scroll < RelevantTrx ){
                    $('#customSidebar').css('top', scroll);
                }*/
            }
        });
    }
}


if( $('#customSidebar2').length ){
    var windowWidth_1920 = $('.page-body-cntlr').outerWidth();
    var containerRightWidth = $('#customSidebarWrap').offset().left;
    var col2inw = $('#customSidebarWrap').innerWidth();
    //$('#customSidebar').css("left", containerRightWidth);
    $('#customSidebar2').css("max-width", col2inw);
    
    function containerRightWidthCal(){
      var windowWidth_1920 = $(window).width();
      var containerWidth = $('.page-body-cntlr').outerWidth();
        var containerRightWidth = $('#customSidebarWrap').offset().left;
        var col2inw = $('#customSidebarWrap').innerWidth();
        //$('#customSidebar').css("left", containerRightWidth);
        $('#customSidebar2').css("max-width", col2inw);
    }
    containerRightWidthCal();
      $(window).on('resize', function(){
      containerRightWidthCal();
    });
    
    if( windowWidth_1920 > 767 ){
        $(window).scroll(function (event) {
            var scroll = $(window).scrollTop();
            if( $('#customSidebar2 .cta-sidebar-module').length ){
                var boxh = $('#customSidebar2 .cta-sidebar-module').height();
                var ftrtop = $(".wf-client-sec").offset().top;
                //var RelevantTop = $(".user-rel-camp-sec").offset().top;
                var ftrx = (ftrtop - boxh) - 450;
                //var RelevantTrx = (RelevantTop - boxh) - 160;
                if( scroll < ftrx ){
                    $('#customSidebar2').css('top', scroll);
                }
               /* if( scroll < RelevantTrx ){
                    $('#customSidebar').css('top', scroll);
                }*/
            }
        });
    }
}




    new WOW().init();

})(jQuery);