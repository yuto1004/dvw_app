var map;
var marker = [];
var infoWindow = [];
var shops =$('#hogejs').data('shops');
var reviews =$('#hogejs').data('reviews');
var counter = 0;
var marker2 = [];

function initMap () {


//経路案内
  var directionsDisplay;
      var directionsService = new google.maps.DirectionsService();
      directionsDisplay = new google.maps.DirectionsRenderer();
      var mapOptions = {
          zoom: 7,
          center: new google.maps.LatLng(35.6644419, 139.76238680000006),
      };
      map = new google.maps.Map(document.getElementById("searchmap"), mapOptions);
  directionsDisplay.setMap(map);
  var origin =$('#hogejs').data('keiro1');
  var destination =$('#hogejs').data('keiro2');
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


// ショップをシャッフル
function shuffle(array) {
    for (let i = array.length - 1; i >= 0; i--) {
      let rand = Math.floor(Math.random() * (i + 1));
      [array[i], array[rand]] = [array[rand], array[i]]
    }
    return array;
  }
  shoprand = shuffle(shops);



//ここからマーカー処理
    for (var i = 0; i < shops.length; i++) {
        var geocoder = new google.maps.Geocoder();
        　    geocoder.geocode(
        {
            'address': shoprand[i]['address'],
            'region': 'jp',
          },
          function (results, status){
              
            if(status===google.maps.GeocoderStatus.OK){
            var result = results[0].geometry.location;
            marker1 = new google.maps.Marker({
            position: result,
            animation: google.maps.Animation.DROP,
            opacity:1,
            label: {
                text: shoprand[counter]['genre'].slice(0,1),                           //ラベル文字
                color: 'black',                    //文字の色
                fontSize: '20px'                     //文字のサイズ
            }
            
        });
        marker1.setMap(map);
        marker.push(marker1);
        fukidasi(marker1);
    }
          })
        }

    //ふきだし作成。
    function fukidasi(marker){ 
        if(shoprand[counter]["avatar"]==0){
            var shopimage = "/assets/images/icon/no_image.png";
        } else {
            var shopimage = shoprand[counter]["avatar"];
        }
        var shopshow = "/shops/show/"+shoprand[counter]["id"];
            var infoWindow1 = new google.maps.InfoWindow({ // 吹き出しの追加
                content: '<div class="sample"><p>' 
                + '<img src = ' + shopimage + ' width="200" height="150">'
                + '</p><a href ="'+shoprand[counter]['link']+ '"target="_blank">'
                + shoprand[counter]["shop_name"] + '</a>('+shoprand[counter]['genre']+')<br>'
                + '<p></p>'
                + '<a href ='+ shopshow +'>Read Review!</a>'+"  /   "
                + '<a href =/review/creation/' + shoprand[counter]['id'] +'>'+"Let's Review!"+'</a>'
                + '</div>',
              });
            infoWindow.push(infoWindow1);
            counter++;
        google.maps.event.addListener(marker,'mouseover', function(event) { // マーカーに重ねたとき
            for(var j=0;j<infoWindow.length;j++){
                infoWindow[j].close();
            }
            infoWindow1.open(marker.getMap(), marker); // 吹き出しの表示
            });
            google.maps.event.addListener(marker,'click', function(event) { // マーカーに重ねたとき
                infoWindow1.close(marker.getMap(), marker); // 吹き出しの表示
                });
    }
}
    
    
    //検索タブ
    $(window).on("load", function() {
        $("li").on("click", function() {
            $("li.selected").removeClass("selected");
            $(this).addClass("selected");
            $(".contents div").hide(); // 二つの要素を非表示にする
            $("." + this.id).show(); // クリックされたボタンに対応する要素を表示する
        });
      });
    
    
      //駅検索
      function station(){
    var element = document.getElementById( "target" ) ;
    var radioNodeList = element.place ;
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
            alert('駅をチェックして検索してください');
        }
      }
    );
    }
    
    //ランダム検索
    function randomsearch(){
        initMap();
    }
    
    
    //ジャンル検索
    function genresearch(){
        var infoWindow2 = [];
            var counter2 = 0;
        var genre;
        var genrepin = [];
        var elements = document.getElementsByName('genre') ;
        for(var i = 0 ; i < elements.length ; i ++){
          if(elements[i].checked == true){
            genre = elements[i].value;
            for (var i = 0; i < shops.length; i++) {
                    if( genre===shops[i]['genre']){
                    genrepin.push(shops[i]);
                    }   
                }
            }
        }
            //一旦マーカー削除。元のマーカー配列と、ジャンル検索用のマーカー配列のどちらも消している。
            function deleteMakers(idx=null) {
                if(idx == null){
                    for (var i = 0; i < marker.length; i++) {
                            marker[i].setMap(null);
                    }   marker = [];
                }else{
                    for (var i = 0; i < marker.length; i++) {
                        if(idx.indexOf(i) >= 0){
                            marker[i].setMap(null);
                        }
                    }
                }
            }
            function deleteMakers2(idx=null) {
                if(idx == null){
                    for (var i = 0; i < marker2.length; i++) {
                            marker2[i].setMap(null);
                    }
                      marker2 = [];
                }else{
                    for (var i = 0; i < marker2.length; i++) {
                        if(idx.indexOf(i) >= 0){
                            marker2[i].setMap(null);
                        }
                    }
                }
            }
           deleteMakers();
           deleteMakers2();
           
           //ここからマーカー処理
           for (var i = 0; i < genrepin.length; i++) {
           var geocoder = new google.maps.Geocoder();
           　    geocoder.geocode(
           {
              'address': genrepin[i]['address'],
              'region': 'jp',
            },
            function (results, status){
                
              if(status===google.maps.GeocoderStatus.OK){
              var result = results[0].geometry.location;
              marker1 = new google.maps.Marker({
              position: result,
              animation: google.maps.Animation.DROP,
              opacity:1
           });
           marker1.setMap(map);
           marker2.push(marker1);
           fukidasi(marker1);
           }})}
           function fukidasi(marker){
            if(genrepin[counter2]["avatar"]==0){
                var shopimage = "/assets/images/icon/no_image.png";
    
            } else {
                var shopimage = genrepin[counter2]["avatar"];
    
            }
            var shopshow = "/shops/show/"+genrepin[counter2]["id"];
              var infoWindow1 = new google.maps.InfoWindow({ // 吹き出しの追加
                  content: '<div class="sample"><p>' 
                  + '<img src = ' + shopimage + ' width="200" height="150">'
                  + '</p><a href ="' + genrepin[counter2]['link'] + '" target="_blank">'
                  + genrepin[counter2]["shop_name"] + '</a>('+genrepin[counter2]['genre']+')<br>'
                  + '<p></p>'
                  + '<a href ='+ shopshow +'>Read Review!</a>'+"  /   "
                  + '<a href =/review/create>'+"Let's Review!"+'</a>'
                  + '</div>'
                });
              infoWindow2.push(infoWindow1);
              counter2++;
           google.maps.event.addListener(marker,'mouseover', function(event) { // マーカーに重ねたとき
              for(var j=0;j<infoWindow2.length;j++){
                  infoWindow2[j].close();
              }
              infoWindow1.open(marker1.getMap(), marker); // 吹き出しの表示
              });
              google.maps.event.addListener(marker,'click', function(event) { // マーカーに重ねたとき
                infoWindow1.close(marker.getMap(), marker); // 吹き出しの表示
                });
           }
                       }