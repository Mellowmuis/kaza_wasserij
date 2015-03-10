// *************************************
//
//   Navigation dropdown
//   -> Expand/collapse submenus
//
// *************************************

// -------------------------------------
// Toggle .is-hidden class onclick and
// allow only one open menu at a time
// -------------------------------------

$(document).ready(function() {

  // ----------------------------
  // Accordion
  // ----------------------------
  $('.accordion').click(function() {
    $('.accContent').slideUp('slow');

    if ($(this).next().is(':hidden') == true) {
      $(this).next().slideDown('slow');
    }
  });
  $('.accContent').hide(); // Hide Content

  var hashtag = window.location.hash;

  var zonderhekje = hashtag.substring(1);

  $('.' + zonderhekje).show(); // Show the "Home" content by Default

});
