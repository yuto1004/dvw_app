var map;
var marker = [];
var infoWindow = [];
var counter = 0;
var markerData = [ // マーカーを立てる場所名・緯度・経度
  {
        name: '現在地',
        address:'東京都港区東新橋1-8-1',
        url: "http://localhost:8000/",
        image: "assets/images/icon/new_logo.JPG",
        icon: "assets/images/icon/icon.png"
 }, {
        name: 'BLUE MOOD',
        address:'東京都中央区築地５丁目６−１０',
        url: "https://blue-mood.jp/",
        image: "https://blue-mood.jp/wp-content/uploads/2014/06/floorguide_key1.jpg"
 }, {
        name: 'Bubby’s Shiodome',
        address:'東京都港区東新橋1-5-2',
        url: "https://bubbys.jp/locations/shiodome/",
        image: "https://www.shiodome-cc.com/image/shiodomecc/store/storage/w420xh315/b2f_buddys_d_shop.jpg"
 }, {
        name: 'FIRE HOUSE DELIVERY SERVICE 新橋店',
        address:'東京都港区東新橋２丁目１０−７',
        url: "http://www.firehouse.co.jp/",
        image: "http://resize.blogsys.jp/8c61ab91a20e7c24fde2a5ddc26aa231042c32e0/trim2/0x384_22p_1200x604/http://livedoor.blogimg.jp/log_taka-test4/imgs/f/c/fc09c3f0.jpg"
 }, {
        name: 'ザ・ローズ&クラウン 汐留日テレプラザ店',
        address:'東京都港区東新橋1-6-1',
        url: "https://www.dynac-japan.com/shop/roseandcrown/shiodome/",
        image: "https://www.dynac-japan.com/roseandcrown/wp-content/uploads/sites/33/2017/08/2281_1_RC_shiodome_tennai_1_650.jpg"
 }, {
       name: '金春湯',
       address:'東京都中央区銀座8-7-5',
       url: "http://www002.upp.so-net.ne.jp/konparu/",
       image: "https://komparu-ginza.com/wp/wp-content/uploads/2014/11/048.jpg"
},
];
function initMap(){
var mapOptions = {
       zoom: 15,
       center: new google.maps.LatLng(35.6644419, 139.76238680000006),
   };
map = new google.maps.Map(document.getElementById("map"), mapOptions);
for (var i = 0; i < markerData.length; i++) {
       var geocoder = new google.maps.Geocoder();
       　    geocoder.geocode(
       {
           'address': markerData[i]['address'],
           'region': 'jp',
         },
         function (results, status){
             
           if(status===google.maps.GeocoderStatus.OK){
           var result = results[0].geometry.location;
           var marker1 = new google.maps.Marker({
           position: result,
           icon:markerData[counter]['icon']
       });
       marker1.setMap(map);
       marker.push(marker1);
       fukidasi(marker1);
   }
         })
       }

   //ふきだし作成。
   function fukidasi(marker){ 
       if(markerData[counter]["image"]==0){
           var shopimage = "/assets/images/icon/no_image.png";
       } else {
           var shopimage = markerData[counter]["image"];
       }
           var infoWindow1 = new google.maps.InfoWindow({ // 吹き出しの追加
               content: '<div class="sample"><p>' 
               + '<img src = ' + shopimage + ' width="200" height="150">'
               + '</p><a href ="'+markerData[counter]['url']+ '"target="_blank">'
               + markerData[counter]["name"] + '</a><br>'
               //+ '<p></p>'
               //+ '<a href ='+ shopshow +'>Read Review!</a>'+"  /   "
               //+ '<a href =http://localhost:8000/review/create>'+"Let's Review!"+'</a>'
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
    

$(window).on("load", function() {
  $("li").on("click", function() {
      $("li.selected").removeClass("selected");
      $(this).addClass("selected");
      $(".contents div").hide(); // 二つの要素を非表示にする
      $("." + this.id).show(); // クリックされたボタンに対応する要素を表示する
  });
});