/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***********************************!*\
  !*** ./resources/js/AddReview.js ***!
  \***********************************/
//alert("test");
$(document).ready(function () {
  $("#send_review").click(function () {
    //alert("test3");
    var text = $('#review_text').val();
    var token = $('#_token').val();
    var productId = $('#product_id').val();
    var mark = $('#review_mark').val(); //console.log(text)

    $.post('/add-comment', {
      text: text,
      _token: token,
      mark: mark,
      product_id: productId
    }, function () {}).done(function (response) {
      //console.log(response)
      response = JSON.parse(response);
      $("#comments").append("<div>Mark:" + response.mark + "</div><div>Comment:" + response.text + "</div>");
    });
  });
});
/******/ })()
;