function blackHeader() {
  if ( $(window).scrollTop() > 0 ) {
    $('body>header').addClass('black-header');
  } else {
    $('body>header').removeClass('black-header');
  }
};

function followAnchor(e) {
  $(e).click(function(){
    var anchor = $(this).attr('href');
    $('html, body').animate({ scrollTop: $(anchor).offset().top - 78 }, 300); return false;
  });
};

$(document).ready(function(){
  var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
  });

  $('#nav ul a').click(function(){
    if (window.innerWidth < 992) {
      $('.nav-list').hide();
    };
    var anchor = $(this).attr('href');
    $('html, body').animate({ scrollTop: $(anchor).offset().top - 78 }, 300); return false;
  });

  followAnchor('#section01 .read-more');
  followAnchor('.section03support a');
  followAnchor('.buy-now');

  $('.nav-toggle').click(function() {
    $('.nav-list').slideToggle(200);
  });

  $('.bwWrapper').BlackAndWhite({
    hoverEffect : true, // default true
    // set the path to BnWWorker.js for a superfast implementation
    webworkerPath : false,
    // to invert the hover effect
    invertHoverEffect: false,
    // this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
    intensity: 1,
    speed: { //this property could also be just speed: value for both fadeIn and fadeOut
      fadeIn: 200, // 200ms for fadeIn animations
      fadeOut: 600 // 800ms for fadeOut animations
    },
    onImageReady:function(img) {
      // this callback gets executed anytime an image is converted
    }
  });

  $(".rotate").textrotator({
    animation: "flip",
    speed: 4500
  });

});

$(window).scroll(function() {
  blackHeader();
});

$(window).resize(function() {
  if (window.innerWidth > 992) {
    $('.nav-list').show();
  };
});
