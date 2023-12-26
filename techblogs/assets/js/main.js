jQuery(function ($) {
  var currentSlide = 0;
  var totalSlides = $('.block').length;
  console.log(totalSlides);

  function showSlide(index) {
    $('.slide-item').css('transform', 'translateX(' + -index * 100 + '%)');
    $('.slider-buttons span').removeClass('active');
    $('.slider-buttons span:eq(' + index + ')').addClass('active');
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    console.log(currentSlide);
    showSlide(currentSlide);
  }

  // show first slide initially
  showSlide(currentSlide);

  // handle slider button click
  $('.slider-buttons span').click(function () {
    var clickedIndex = $(this).index();
    currentSlide = clickedIndex;
    showSlide(currentSlide);
  });

  // autoplay slider
  var intervalTime = 5000;
  var autoplayInterval = setInterval(nextSlide, intervalTime);
});
