$(function () {
  $(".hidden").hide();
  $("#typeSelector").change(function () {
    $(".hidden").hide();
    $("#" + $(this).val()).show();
  });
});
