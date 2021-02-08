var map;
$(document).ready(function () {

  map = new google.maps.Map(document.getElementById("map"), {
    center: {
      lat: 1.3521,
      lng: 103.8198
    },
    zoom: 10,
  });

  loadRestaurants();

  listenAddMarker();

  listenCurrLoc();

  listenSaveRestaurant();

});

function loadRestaurants() {
  $.get("getRestaurants.php", {},
    function (data) {
      data.forEach(i => {
        var marker = new google.maps.Marker({
          position: {
            lat: i.latitude,
            lng: i.longitude
          },
          map: map,
          title: i.name
        })
      });
    },
    "json"
  );
}

function listenAddMarker() {
  google.maps.event.addListener(map, 'click', function (event) {
    var marker = new google.maps.Marker({
      position: {
        lat: event.latLng.lat(),
        lng: event.latLng.lng()
      },
      map: map,
      title: "added",
      icon: {
        url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
      }
    });
    $("#latitude").val(event.latLng.lat());
    $("#longitude").val(event.latLng.lng());
  });
}

function listenCurrLoc() {
  $("#currLoc").click(function () {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function (position) {
        var useMarker = new google.maps.Marker({
          position: {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          },
          map: map,
          title: "Current position",
          icon: {
            url: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png"
          }
        });
        $("#latitude").val(position.coords.latitude);
        $("#longitude").val(position.coords.longitude);
      })
    }
  })
}

function listenSaveRestaurant() {
  $("form").submit(function () {
    $.post("addRestaurant.php", {
      name: $("#name").val(),
      description: $("#description").val(),
      lat: $("#latitude").val(),
      lng: $("#longitude").val()
    }, function (data) {
      if (data.success === "1") {
        $("#output").text("restaurant added successfully");
      } else {
        $("#output").text("restaurant not added");
      }
      $("#modalResult").modal("show");
    }, "json");
    $("input").val("");
    return false;
  });
}