$(document).ready(function() {
  var list = [];
  localStorage.setItem("list", JSON.stringify(list));
  $("#btnSearch").click(function() {
    var title = $("#sTitle").val();
    var year = $("#sYear").val();
    var plot = $("#sPlot").val();

    $.get("http://www.omdbapi.com/", {
      t: title,
      y: year,
      p: plot,
      apikey: "19c0fc0b"
    }, function(data) {
      console.log(data);
      var msg = "";
      msg += "Title: " + data.Title
      msg += "<br/>Release: " + data.Released
      msg += "<br/>Runtime: " + data.Runtime
      msg += "<br/>Genre: " + data.Genre
      msg += "<br/>Actors: " + data.Actors
      msg += "<br/>Plot: " + data.Plot
      $("#contents").html(msg);
      msg = "<img src='" + data.Poster + "'/>"
      $("#poster").html(msg);
      list.push(data);
      localStorage.setItem("list", JSON.stringify(list));
    }, "jsonp");
  });
});
