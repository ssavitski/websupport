function blackHeader() {
  if ( $(window).scrollTop() > 0 ) {
    $('body>header').addClass('black-header');
  } else {
    $('body>header').removeClass('black-header');
  }
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

  $('.nav-toggle').click(function() {
    $('.nav-list').slideToggle(200);
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
