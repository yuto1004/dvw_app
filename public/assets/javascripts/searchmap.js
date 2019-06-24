var map;
var marker = [];
var infoWindow = [];
var markerData = [ // マーカー情報
    {
        name: ' Blue Note Tokyo',
        lat: 35.6612017,
        lng: 139.7162369,
        jenre:"livehouse",
        url: "http://www.bluenote.co.jp/jp/",
        image: "http://localhost:8000/assets/images/bluenote.jpg",
    }, {
        name: 'BODY & SOUL',
        lat: 35.660008,
        lng: 139.71517700000004,
        jenre:"livehouse",
        url: "http://www.bodyandsoul.co.jp/ ",
        image: "http://localhost:8000/assets/images/bodysoul.jpg"
     }, {
            name: '南青山MANDALA',
            lat: 35.6680223,
            lng: 139.71709950000002,
            jenre:"livehouse",
            url: "https://mandala.gr.jp/aoyama/index.html",
            image: "http://localhost:8000/assets/images/mandala.jpg"
     }, {
            name: 'CROCODILE',
            lat: 35.6643894,
            lng: 139.70264020000002,
            jenre:"livehouse",
            url: "http://www.crocodile-live.jp/",
            image: "http://localhost:8000/assets/images/crocodile.jpg"
     }, {
            name: 'Zimagine',
            lat: 35.6705102,
            lng: 139.71715519999998,
            jenre:"livehouse",
            url: "http://zimagine.genonsha.co.jp/",
            image: "http://localhost:8000/assets/images/zimagine.jpg"
     }, {
            name: 'THE BURGER STAND FELLOWS',
            lat: 35.6650684,
            lng: 139.71022119999998,
            jenre:"humburger",
            url: "http://www.fellows-burger.com/",
            image: "http://localhost:8000/assets/images/burger_fellows.jpg"
     }, {
            name: 'ザ グレートバーガー',
            lat: 35.6662808,
            lng: 139.70464059999995,
            jenre:"humburger",
            url: "http://www.the-great-burger.com",
            image: "http://localhost:8000/assets/images/greatburger.png"
     }, {
            name: 'cafe Hohokam',
            lat: 35.6703753,
            lng: 139.70741529999998,
            jenre:"humburger",
            url: "http://www.cafe-hohokam.com/",
            image: "http://localhost:8000/assets/images/hohokam.jpg"
     }, {
            name: 'the 3rd Burger 青山骨董通り店',
            lat: 35.6622816,
            lng: 139.71181980000006,
            jenre:"humburger",
            url: "http://the3rdburger.com/index.html",
            image: "http://localhost:8000/assets/images/3rd_burger.jpg"
     }, {
            name: 'ゴールデンブラウン',
            lat: 35.6668674,
            lng: 139.70948309999994,
            jenre:"humburger",
            url: "http://www.omotesandohills.com/shopdetails/index.php?sid=163",
            image: "http://localhost:8000/assets/images/golden_brown.png"
     },
];

var shops =$('#hogejs').data('shops');
//for (var i = 0; i < shops.length; i++) {
    //console.log(shops[i]['link']);
   //};

function initMap () {
  var directionsDisplay;
      var directionsService = new google.maps.DirectionsService();
      // mapの表示時の中心点を決めている(ルート案内に失敗したときのデフォルト画面)
      directionsDisplay = new google.maps.DirectionsRenderer();
      var mapOptions = {
          zoom: 7,
          center: new google.maps.LatLng(35.6644419, 139.76238680000006),
      };
  
      // mapの表示
      map = new google.maps.Map(document.getElementById("searchmap"), mapOptions);
  directionsDisplay.setMap(map);

  //入力情報を受け取り、経路検索用の変数にセット
  var origin =$('#hogejs').data('keiro1');
  var destination =$('#hogejs').data('keiro2');

      // directionServiceに渡す変数
      // 出発地点、目的地、移動方法等を定義する
      var request = {
          origin: origin,
          destination: destination, 
          travelMode: google.maps.TravelMode.WALKING
      };

      directionsService.route(request, function(result, status) {
          if (status == google.maps.DirectionsStatus.OK) {
              directionsDisplay.setDirections(result);
          }else{
            alert('経路検索に失敗しました。');
            window.location.href = '/';
          }
      });

  //ここからマーカー処理
  for (var i = 0; i < shops.length; i++) {
    var geocoder = new google.maps.Geocoder();
    　    geocoder.geocode(
      {
        'address': shops[i]['address'],
        'region': 'jp'
      },
      function(results, status){
        if(status==google.maps.GeocoderStatus.OK){
    marker[i] = new google.maps.Marker({
        position: results[0].geometry.location, // マーカーを立てる位置を指定
        map: map, // マーカーを立てる地図を指定
        animation: google.maps.Animation.DROP,
        opacity:1
    });
        }}
    )}

    //var markerLatLng = new google.maps.LatLng({lat: shops[i]['latitude'], lng: shops[i]['longitude']}); // 緯度経度のデータ作成
    //marker[i] = new google.maps.Marker({ // マーカーの追加
     //position: markerLatLng, // マーカーを立てる位置を指定
        //map: map, // マーカーを立てる地図を指定
        //animation: google.maps.Animation.DROP,
        //opacity:1
   //});

   var options ={ 
   content: "SYNCER" ,
} ;

   
   
   infoWindow[i] = new google.maps.InfoWindow(options) // 吹き出しの追加
   
    //'<div class="sample">' + 
    //'<img src = ' + markerdata[i]['image'] + '>' +
    //'<a href =' + shops['link'] + '>' + '<br>' + 
    //shops['shop_name'] + '</div>' // 吹き出しに表示する内容
  //});


  //markerEvent(i); // マーカーにクリックイベントを追加


// マーカーにクリックイベントを追加
//function markerEvent(i) {

//marker[i].addListener('mouseover', function() { // マーカーに重ねたとき
// infoWindow[i].open(map, marker[i]); // 吹き出しの表示
//});
//marker[i].addListener('mouseout', function() { // マーカーから離したとき
    //infoWindow[i].close(map, marker[i]); // 吹き出しの非表示
   //});

//}
}

$(window).on("load", function() {
    $("li").on("click", function() {
        $("li.selected").removeClass("selected");
        $(this).addClass("selected");
        $(".contents div").hide(); // 二つの要素を非表示にする
        $("." + this.id).show(); // クリックされたボタンに対応する要素を表示する
    });
  });


  function station(){
      //map.setZoom(15);
      //var address = document.getElementById("place").value;
    // form要素を取得
var element = document.getElementById( "target" ) ;
// form要素内のラジオボタングループ(name="hoge")を取得
var radioNodeList = element.place ;
// 選択状態の値(value)を取得
var address = radioNodeList.value ;

      //map.setCenter( new google.maps.LatLng(35.6649569, 139.71193570000003));
      var geocoder = new google.maps.Geocoder();
　    geocoder.geocode(
  {
    'address': address,
    'region': 'jp'
  },
  function(results, status){
    if(status==google.maps.GeocoderStatus.OK){
        map.setCenter(results[0].geometry.location);
        map.setZoom(15);
    }else {
        //失敗したとき
        alert('駅をチェックして検索してください');
    }
  }
);

        }

function test2(){


    marker[0].setAnimation(google.maps.Animation.BOUNCE);
    marker[1].setAnimation(google.maps.Animation.BOUNCE);
    marker[2].setAnimation(google.maps.Animation.BOUNCE);
    marker[3].setAnimation(google.maps.Animation.BOUNCE);
    marker[4].setAnimation(google.maps.Animation.BOUNCE);
    marker[5].setOpacity(0.2);
    marker[6].setOpacity(0.2);
    marker[7].setOpacity(0.2);
    marker[8].setOpacity(0.2);
    marker[9].setOpacity(0.2);
    
      //if(markerData[i]['genre'] == "livehouse"){}
  }