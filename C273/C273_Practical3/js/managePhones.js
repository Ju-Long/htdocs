$(document).ready(function() {
  reload_table();
});

function reload_table() {

  $.ajax({
    url: "getPhones.php",
    data: "",
    type: "GET",
    cache: false,
    dataType: "JSON",
    success: function(data) {
      var msg = "";
      var total = 0;
      data.forEach(i => {
        total += Number(i.price);
        msg += "<tr><td>" + i.phone_id;
        msg += "</td><td>" + i.brand;
        msg += "</td><td>" + i.model;
        if (i.platform === "iOS") {
          msg += "</td><td><i class='fab fa-apple'></i>" + i.platform;
        } else {
          msg += "</td><td><i class='fab fa-android'></i>" + i.platform;
        }
        msg += "</td><td>" + i.price;
        msg += "</td></tr>"
      });
      msg += "<tr><td colspan='4'>Total Price</td><td>" + total + "</td></tr>"
      $("tbody").html(msg);
    }
  });
}
