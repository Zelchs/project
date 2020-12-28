$(function () {
  $(".hidden").hide();
  $("#typeSelector").change(function () {
    $(".hidden").hide();
    $("#" + $(this).val()).show();
    $("#sku").val($(this).val() + uniqueID());
  });
});

function uniqueID() {
  return Math.floor(Math.random() * Date.now());
}
