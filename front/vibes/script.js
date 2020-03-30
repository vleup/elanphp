$(document).ready(function() {
    accordionClick();
});

function accordionClick() {
  $('.accordion').next('p').hide();
  $('.accordion').click(function() {
    if($(this).next('p').is(':hidden')) {
      $('.accordion').next('p').slideUp('slow');
      $(this).next('p').slideToggle('slow');
    }
    else {
      $(this).next('p').slideToggle('slow');
    }
  });
}

function burgerMenu() {
  
}

function galleryZoom() {
  
}