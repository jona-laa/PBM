/*** HEADER ***/
// Toggle mobile menu
$('#main-menu-toggle').click(function () {
  $('.main-menu ul').slideToggle(300, function () {
  });
});

// Hide Header on on scroll down
let didScroll;
let lastScrollTop = 0;
const delta = 5;
const navbarHeight = $('header').outerHeight();

$(window).scroll((event) => {
  didScroll = true;
});

setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

const hasScrolled = () => {
  const st = $(this).scrollTop();
  document.querySelector('#menu-main-menu') ? document.querySelector('#menu-main-menu').style.display = 'none' : null

  // Make sure they scroll more than delta
  if (Math.abs(lastScrollTop - st) <= delta)
    return;

  // If scroll down past the navbar, add class .nav-up.
  if (st > lastScrollTop && st > navbarHeight) {
    // Scroll Down
    $('header').removeClass('nav-down').addClass('nav-up');
    $('.main-menu ul').css('display', 'none')
  } else {
    // Scroll Up
    if (st + $(window).height() < $(document).height()) {
      $('header').removeClass('nav-up').addClass('nav-down');
      $('.main-menu ul').css('display', 'none')
    }
  }

  lastScrollTop = st;
}





/*** SINGLE PRODUCT PAGE ***/
// Toggle Purchase Info
const toggleBuyInfo = (e) => {
  e.preventDefault();
  $('.buy-info').slideToggle(300, function () {
  });
}

// Toggle Purchase Enquiry
const togglePurchaseEnquiry = (e) => {
  e.preventDefault();
  $('.purchase-enquiry').slideToggle(300, function () {
  });
}

// Auto-Fill Enquiry Form Subject
if (document.querySelector('#enquiry-subject')) {
  document.querySelector('#enquiry-subject').value = `Purchase Enquiry: ${document.querySelector('.section-header').textContent}`;
}

// Make Product Gallery open "full window" onclick
window.addEventListener('DOMContentLoaded', () => {
  if (document.querySelector('.flex-viewport')) {
    document.querySelector('.flex-viewport').className += ' woocommerce-product-gallery__trigger';
  }
});





// Make "Back To Top"-button scroll to the top
const toTop = () => {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // Chrome, Firefox, IE and Opera
}