// DOM element selectors
const navbar = document.querySelector('header');
const toTopBtn = document.querySelector('#goTop');
const mainMenu = document.querySelector('#menu-main-menu');



// Hide menu and to top button on scroll
window.onscroll = () => {
  hasScrolled();
  hideToTopBtn();
};



// Toggle mobile menu
$('#main-menu-toggle').click(function () {
  $('.main-menu ul').slideToggle(300, function () {
  });
});



// Hide Header on on scroll down
let prevScrollpos = window.pageYOffset;

const hasScrolled = () => {
  let currentScrollPos = window.pageYOffset;

  if (prevScrollpos > currentScrollPos) {
    elementToggle(navbar, 'top', '0');
    elementDisplay(mainMenu, 'none');
  } else {
    elementToggle(navbar, 'top', '-125px');
    elementDisplay(mainMenu, 'none');
  }

  prevScrollpos = currentScrollPos;
}



/* Toggle element from top or bottom
 * @param   {DOM element}   element     Target DOM element to toggle
 * @param   {string}        position    'top' or 'bottom'
 * @param   {string}        offset      Offset in e.g. pixels, rem, em, etc.
*/
const elementToggle = (element, position, offset) => position === 'top' ? element.style.top = offset : element.style.bottom = offset;



/* Change display attribute of element
 * @param   {DOM element}   element     Target DOM element
 * @param   {string}        value       Display attribute value, e.g. 'none', 'block', etc.
*/
const elementDisplay = (element, value) => element.style.display = value;



// Toggle Purchase Info (single product page)
const toggleBuyInfo = (e) => {
  e.preventDefault();
  $('.buy-info').slideToggle(300, function () {
  });
}



// Toggle Purchase Enquiry (single product page)
const togglePurchaseEnquiry = (e) => {
  e.preventDefault();
  $('.purchase-enquiry').slideToggle(300, function () {
  });
}



// Auto-Fill Enquiry Form Subject (single product page)
if (document.querySelector('#enquiry-subject')) {
  document.querySelector('#enquiry-subject').value = `Purchase Enquiry: ${document.querySelector('.section-header').textContent}`;
}



// Make Product Gallery open "full window" onclick (single product page)
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



// Hide "to top button"
const hideToTopBtn = () => {
  window.pageYOffset > window.screen.height ?
    elementToggle(toTopBtn, 'bottom', '20px')
    :
    elementToggle(toTopBtn, 'bottom', '-50px')
}