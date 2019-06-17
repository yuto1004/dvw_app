function initMap () {
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;

    // mapの表示時の中心点を決めている(ルート案内に失敗したときのデフォルト画面)
    directionsDisplay = new google.maps.DirectionsRenderer();
    var mapOptions = {
        zoom: 7,
        center: new google.maps.LatLng(35.6644419, 139.76238680000006)
    }

    // mapの表示
    map = new google.maps.Map(document.getElementById("searchmap"), mapOptions);
directionsDisplay.setMap(map);

    // directionServiceに渡す変数
    // 出発地点、目的地、移動方法等を定義する
    var request = {
        origin: new google.maps.LatLng(35.6644419, 139.76238680000006),
        destination: new google.maps.LatLng(35.6698116,139.6869656),
        travelMode: google.maps.TravelMode.WALKING
    }

    directionsService.route(request, function(result, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(result);
        }
    });
}
