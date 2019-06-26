var map;
var marker = [];
var infoWindow = [];
var counter = 0;
var markerData = [ // マーカーを立てる場所名・緯度・経度
  {
        name: '現在地',
        lat: 35.6644419,
        lng: 139.76238680000006,
        url: "http://localhost:8000/",
        image: "assets/images/new_logo_icon.jpg",
        icon: "assets/images/icon.png"
 }, {
        name: 'カレッタ汐留',
        lat: 35.664656,
        lng: 139.763185,
        url: "http://www.caretta.jp/",
        image: "assets/images/caretta.jpg"
 }, {
        name: '浜離恩寵公園',
        lat: 35.660218,
        lng: 139.763726,
        url: "https://www.tokyo-park.or.jp/park/format/index028.html",
        image: "assets/images/koen.jpg"
 }, {
        name: '一蘭　新橋店',
        lat: 35.667301,
        lng: 139.756889,
        url: "https://ichiran.com/shop/tokyo/shinbashi/",
        image: "assets/images/itiran.jpg"
 }, {
        name: 'タミヤ プラモデルファクトリー 新橋店',
        lat: 35.664563,
        lng: 139.75529,
        url: "https://www.tamiya-plamodelfactory.co.jp/",
        image: "assets/images/tamiya.jpg"
 },
];
 
function initMap() {
 // 地図の作成
    var mapLatLng = new google.maps.LatLng({lat: markerData[0]['lat'], lng: markerData[0]['lng']}); // 緯度経度のデータ作成
   map = new google.maps.Map(document.getElementById('map'), { // #mapに地図を埋め込む
     center: mapLatLng, // 地図の中心を指定
      zoom: 15 // 地図のズームを指定
   });
 
 // マーカー毎の処理
 for (var i = 0; i < markerData.length; i++) {
        markerLatLng = new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}); // 緯度経度のデータ作成
        marker1 = new google.maps.Marker({ // マーカーの追加
         position: markerLatLng, // マーカーを立てる位置を指定
            map: map // マーカーを立てる地図を指定
       });
       marker.push(marker1);
       fukidasitop(marker1);
      }

      function fukidasitop(marker){
     var infoWindow1 = new google.maps.InfoWindow({ // 吹き出しの追加
         content: '<div class="sample">' + 
         '<img src = ' + markerData[counter]['image'] + '>' +
         '<a href =' + markerData[counter]['url'] + '>' + '<br>' + 
         markerData[counter]['name'] + '</div>' // 吹き出しに表示する内容
       });
       infoWindow.push(infoWindow1);
       counter++;
       google.maps.event.addListener(marker,'mouseover', function(event) { // マーカーをクリックしたとき
        for(var j=0;j<infoWindow.length;j++){
        infoWindow[j].close();
        }
        infoWindow1.open(marker.getMap(), marker);  // 吹き出しの表示
  });
  infoWindow.push(infoWindow1);
  
}  
  marker[0].setOptions({// TAM 東京のマーカーのオプション設定
       icon: {
        url: markerData[0]['icon']// マーカーの画像を変更
      }
      }); 
 }
 
  

 
    

$(window).on("load", function() {
  $("li").on("click", function() {
      $("li.selected").removeClass("selected");
      $(this).addClass("selected");
      $(".contents div").hide(); // 二つの要素を非表示にする
      $("." + this.id).show(); // クリックされたボタンに対応する要素を表示する
  });
});