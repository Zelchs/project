$(function () {
  $("#typeSelector").change(function () {
    $(".hidden").hide();
    $(".not-required").prop("required", false);
    $("#" + $(this).val()).show();
    $("." + $(this).val()).prop("required", true);
    $("#sku").val($(this).val() + uniqueID());
  });
});

function uniqueID() {
  return Math.floor(Math.random() * Date.now());
}
