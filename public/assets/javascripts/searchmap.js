var map;
var marker = [];
var infoWindow = [];
var shops =$('#hogejs').data('shops');
var counter = 0;

function initMap () {

//経路案内
  var directionsDisplay;
      var directionsService = new google.maps.DirectionsService();
      // mapの表示時の中心点を決めている(ルート案内に失敗したときのデフォルト画面)
      directionsDisplay = new google.maps.DirectionsRenderer();
      var mapOptions = {
          zoom: 7,
          center: new google.maps.LatLng(35.6644419, 139.76238680000006),
      };
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
        'region': 'jp',
      },
      function (results, status){
          
        if(status===google.maps.GeocoderStatus.OK){
        var result = results[0].geometry.location;
        marker1 = new google.maps.Marker({
        position: result, // マーカーを立てる位置を指定
        map: map, // マーカーを立てる地図を指定
        animation: google.maps.Animation.DROP,
        opacity:1
    });
    marker.push(marker1);
    fukidasi(marker1);

}
      })
    }
//ふきだし作成。
function fukidasi(marker){

        var infoWindow1 = new google.maps.InfoWindow({ // 吹き出しの追加
        
            content: '<div class="sample"><p>' + shops[counter]["shop_name"]
            //'<img src = ' + markerdata[i]['image'] + '>' +
            + '</p><a href ="' + shops[counter]["link"] + '" target="_blank">link</a><br>'
            + '</div>'
          });
        infoWindow.push(infoWindow1);
        counter++;
    google.maps.event.addListener(marker,'mouseover', function(event) { // マーカーに重ねたとき
        for(var j=0;j<infoWindow.length;j++){
            infoWindow[j].close();
        }
        infoWindow1.open(marker.getMap(), marker); // 吹き出しの表示
        });

}
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
    // form要素を取得
var element = document.getElementById( "target" ) ;
// form要素内のラジオボタングループ(name="hoge")を取得
var radioNodeList = element.place ;
// 選択状態の値(value)を取得
var address = radioNodeList.value ;
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