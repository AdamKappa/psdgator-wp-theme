// reviews carousel
$(document).ready(function () {
  $(".reviews-container").slick({
    slidesToShow: 3, // Number of items visible at once
    slidesToScroll: 1, // Number of items scrolled per click
    arrows: true, // Enable navigation arrows
    centerMode: true,
    prevArrow: ".carousel-prev", // Use your custom prev arrow
    nextArrow: ".carousel-next", // Use your custom next arrow
    responsive: [
      {
        breakpoint: 769, // Responsive breakpoint
        settings: {
          slidesToShow: 1, // Adjust slidesToShow on smaller screens
          centerMode: false,
        },
      },
    ],
  });
});