var map;
var marker = [];
var infoWindow = [];
var markerData = [ // マーカーを立てる場所名・緯度・経度
  {
        name: '現在地',
        lat: 35.663621,
        lng: 139.7618,
        url: "http://localhost:8000/"
 }, {
        name: 'カレッタ汐留',
        lat: 35.664656,
        lng: 139.763185,
        url: "http://www.caretta.jp/"
 }, {
        name: '浜離恩寵公園',
        lat: 35.660218,
        lng: 139.763726,
        url: "https://www.tokyo-park.or.jp/park/format/index028.html"
 }, {
        name: '一蘭　新橋店',
        lat: 35.667301,
        lng: 139.756889,
        url: "https://ichiran.com/shop/tokyo/shinbashi/"
 }, {
        name: 'タミヤ プラモデルファクトリー 新橋店',
        lat: 35.664563,
        lng: 139.75529,
        url: "https://www.tamiya-plamodelfactory.co.jp/"
 },
];
 
function initMap() {
 // 地図の作成
    var mapLatLng = new google.maps.LatLng({lat: markerData[0]['lat'], lng: markerData[0]['lng']}); // 緯度経度のデータ作成
   map = new google.maps.Map(document.getElementById('map'), { // #sampleに地図を埋め込む
     center: mapLatLng, // 地図の中心を指定
      zoom: 15 // 地図のズームを指定
   });
 
 // マーカー毎の処理
 for (var i = 0; i < markerData.length; i++) {
        markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}); // 緯度経度のデータ作成
        marker[i] = new google.maps.Marker({ // マーカーの追加
         position: markerLatLng, // マーカーを立てる位置を指定
            map: map // マーカーを立てる地図を指定
       });
 
     infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
         content: '<div class="sample">' + 
         '<a href =' + markerData[i]['url'] + '>' + '<br>' + 
         markerData[i]['name'] + '</div>' // 吹き出しに表示する内容
       });

 
     markerEvent(i); // マーカーにクリックイベントを追加
 }
 
   
}
 
// マーカーにクリックイベントを追加
function markerEvent(i) {
    marker[i].addListener('mouseover', function() { // マーカーをクリックしたとき
      infoWindow[i].open(map, marker[i]); // 吹き出しの表示
  });
  marker[i].addListener('click', function() { // マーカーをクリックしたとき
    infoWindow[i].close(map, marker[i]); // 吹き出しの表示
});
}