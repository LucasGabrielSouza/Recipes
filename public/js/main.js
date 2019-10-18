//navbar
const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elemsDropdown, {
    coverTrigger: false
});

// mobile menu

elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav, {
    coverTrigger:false
});

$('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });

  
  $('#textarea1').val('New Text');
  M.textareaAutoResize($('#textarea1'));
        