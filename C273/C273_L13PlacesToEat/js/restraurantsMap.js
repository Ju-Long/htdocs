var map;
$(document).ready(function () {

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 1.3521, lng: 103.8198 },
          zoom: 8,
        });
      }

    loadRestaurants();

    listenAddMarker();

    listenCurrLoc();

    listenSaveRestaurant();

});

function loadRestaurants() {
    $.get("getRestaurants.php", data,
        function (data, textStatus, jqXHR) {
            
        },
        "dataType"
    );
}

function listenAddMarker() {
//TODO: create a click listener to place a green marker on the map (See step 8)
//TODO: Show the latitude and longitude in the “Latitude” and “Longitude” form fields
}

function listenCurrLoc() {
//TODO: create a click listener for the currLoc.png image.
//TODO: Get the current position of the user and place a blue marker on the map (See step 7)
//TODO: Show the current latitude and longitude in the “Latitude” and “Longitude” form fields
}

function listenSaveRestaurant() {
//TODO: create a submit listener for the form
//TODO: Make an ajax call to addRestaurant.php to add the form fields to database (See Problem 10)
//TODO: If success, show modal with message “restaurant added successfully”. Otherwise, display message “restaurant not added”    
}
