$(document).ready(function () {
  console.log('eSaksi @2018');

  $('.icheck').iCheck({
    checkboxClass: 'icheckbox_square-blue',
    radioClass: 'iradio_square-blue',
    increaseArea: '20%' // optional
  });

  $('.toggle-sidebar').on('click', function () {
    $('.sidebar').toggleClass('small');
    $('.content').toggleClass('big');
    $('.content-head').toggleClass('big');
    var $map = $('#vmap');
    $map.width("100%");
  });

  $('.datetimepicker').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'yyyy-mm-dd'
  });
});