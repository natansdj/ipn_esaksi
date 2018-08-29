$(document).ready(function () {
  console.log('eSaksi @2018');

  $('.toggle-sidebar').on('click', function () {
    $('.sidebar').toggleClass('small');
    $('.content').toggleClass('big');
    $('.content-head').toggleClass('big');
    var $map = $('#vmap');
    $map.width("100%");
  })
});