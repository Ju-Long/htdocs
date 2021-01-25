$(document).ready(function() {
  var list = JSON.parse(localStorage.getItem("list"));
  var msg = "";
  list.forEach(i => {
    msg += "<div class='panel panel-default'>";
    msg += "<div class='panel-header'> " + i.Title;
    msg += "</div><div class='panel-body'> " + i.Plot;
    msg += "</div></div>";
  });
  $("#contents").html(msg);
});
