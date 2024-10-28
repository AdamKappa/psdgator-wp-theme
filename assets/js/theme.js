document.addEventListener("DOMContentLoaded", function () {
  // Menu open/close for submenus
  const menuItems = document.querySelectorAll(".menu-item");

  menuItems.forEach((item) => {
    const submenu = item.querySelector(".submenu");

    item.querySelector("a").addEventListener("click", function (e) {
      e.preventDefault(); // Prevent default link action
      submenu.classList.toggle("active"); // Toggle class for visibility
    });
  });

  // Close the submenu if clicking outside of it
  document.addEventListener("click", function (event) {
    const isMenuClick = event.target.closest(".menu-item"); // Check if the click is inside a menu item
    if (!isMenuClick) {
      menuItems.forEach((item) => {
        const submenu = item.querySelector(".submenu");
        submenu.classList.remove("active"); // Remove active class to hide
      });
    }
  });

  // To close promo bar
  document.addEventListener("click", function (event) {
    if (event.target.closest(".promo-bar-close-btn")) {
      const promoBar = event.target.closest(".promo-bar");
      promoBar.classList.add("no-active");
    }
  });

  // Hamburger menu toggle
  const mobileMenu = document.getElementById("mobile-menu");
  const navLinks = document.getElementById("nav-links");

  if (mobileMenu) {
    // Check if the mobile menu element exists
    mobileMenu.addEventListener("click", () => {
      navLinks.classList.toggle("show"); // Toggle the 'show' class
    });
  }

  // Close hamburger menu if clicking outside of it
  document.addEventListener("click", (event) => {
    const isNavClick = event.target.closest(".nav-bar"); // Check if the click is inside the nav-bar
    if (!isNavClick) {
      navLinks.classList.remove("show"); // Hide the nav links
    }
  });
});

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

