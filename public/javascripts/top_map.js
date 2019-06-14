var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 35.65786826127019, lng: 139.70091673026695},
          zoom: 13
        });
      }