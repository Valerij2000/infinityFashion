$(function () {
  deadLineNumber = 30;
  x=6;
  $('.wrap-container .wrap-main-cards').slice(6, deadLineNumber).hide();
  $('#loadMore').on('click', function (e) {
    if (x == deadLineNumber) {
      $('#warning-form').modal();
    } else {
      e.preventDefault();
      x = x+3;
      $('.wrap-container .wrap-main-cards').slice(3, x).slideDown();
    }
  });
});
