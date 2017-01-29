$("#submit").click( function() {
  $.post($("#form").attr("action"),
  $("#form :input").serializeArray(),
  function(info){
    $("#result").html(info);
  });
  clearInput();
});

$("#form").submit( function() {
  return false;
});

function clearInput() {
  $("#form :input").each( function() {
    $(this).val('');
  });
}
