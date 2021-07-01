<!DOCTYPE html>
<html lang="ja">
    <head>
        <!--<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="responsive.css">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="test.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyPde0wIo5wjHOTsWrMSmuDaB30J8fW-w&libraries=&v=weekly" async defer></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="test.css">
        <title>ダンススタジオサーチ</title>
    </head>
<body>
    
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid p-2 ps-3 pe-3">
    <div class="navbar-right">
      <span class="navbar-text text-dark">
        ダンススタジオサーチ
      </span>
    </div>
  <div class="navbar-left">
<!-- ハンバーガーメニュー -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link pe-3 text-dark" aria-current="page" href="#">このサイトの目的</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-item text-dark" href="#form">スタジオを探す</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron jumbotron-extend">
  <div class="container">
    <!--<div class="col mx-auto">-->
      <h1 class="display-3  text-white text-center pt-4">ダンススタジオを探そう</h1>
    <!--</div>-->
    <div class="text-center " id="purpose">
        <p class="lh-sm text-white mb-4" id="para">GoogleMapにストリートダンサーがよく使う色んなダンススタジオを載せました<br>さあ、踊りに行こう</p>
    </div>
    <div class="d-grid gap-2 col-4 mx-auto mt-2">
      <button type="button" class="btn btn-outline-light" id="button-to-map">探しに行く</button>
    </div>
  </div>
</div>
<div class="container">
    <div class="col-3 mx-auto pt-3">
        <p class="text-center">どこにしよう</p>
    </div>
</div>
<div class="container" name="search">
    <div class="col-6 mx-auto  mt-3 mb-3">
        <form  action="index.php" method="GET" id="form">
            <select id="selectCenter" name="menu" class="form-select form-select-md" aria-label="Default select example" onchange="centerSelector();return false">
                <option value="選択してください">駅から探す</option>
                <option value='現在地' >現在地</option>
                <!--phpでoption内容を取得-->
                <?php
                include("option.php");
                place_select();
                ?>
            </select>
        </form>
    </div>
</div><!--form-container-->
<div class="container" id="map-container">
    <div class="col-10 mx-auto h-100 mb-4" id="map-col">
        <div id="map" style="width:100%; height:500px" class="rounded-3 Regular shadow"></div><!--google map表示場所-->
    </div>
</div>
<div class="container reserveUrl site" id="site">
    <!--<div class="col-1 text-right">-->
        <span class="text-right" id="closerAround">
            <button type="button" class="btn-close" aria-label="Close" id="closer"></button>
            <!--<a class="dropdown-item rounded-circle .btn-ignore" href="#map" id="closer">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square" viewBox="0 0 16 16">
                <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </a>-->
    </span>
<!--</div>-->
    <div class="col-10 mx-auto h-100 mb-4">
        <div class="embed-responsive embed-responsive-1by1">
            <iframe class="embed-responsive-item rounded-3 Regular shadow" style="width:100%; height:500px;" src="" id="frame" allowfullscreen></iframe><!--予約画面表示場所-->
        </div>
    </div>
</div>
    <footer class="bg-light py-5 mt-3">
      <div class="container">
        <div class="row">
          <div class="col-md-9 mx-auto">
            <ul class="list-inline text-center text-md-right mb-0">
              <li class="list-inline-item mx-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                <a class="text-dark" target="_blank" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                      <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                    </svg>
                </a>
              </li>
              <li class="list-inline-item mx-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                <a class="text-dark" target="_blank" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                    </svg>
                </a>
              </li>
              <li class="list-inline-item mx-3" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                <a class="text-dark" target="_blank" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                      <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                    </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
<script>

let map;
let center = [];
let point = [  
    //centerをphpで取得
    <?php
    include("get_center.php");//中心座標を配列に入力
    ?>
]; //var point閉じ

let marker = [];
let infoWindow = [];
let select = document.getElementById("selectCenter");
let mapId = document.getElementById("map");
let iframe = document.getElementById('frame');
let site = document.getElementById('site');
let currentInfoWindow=null;

//mapの非表示設定
mapId.style.display = "none";
//siteの非表示設定
site.style.display = "none";

/*
//mapをブラウザ上に表示させる
function selectMap(){
    document.getElementById("map").style.opacity=0;
    setTimeout(function() {
        document.getElementById("map").style.display="none";
    },350);
    setTimeout(function(){
        document.getElementById("map").style.display="block";
    },1000);
    setTimeout(function(){
        document.getElementById("map").style.opacity=1;
    },1500);
    currentSelect=select.value;
}//selectMap()
*/
//中心を選択する 
function centerSelector(){  
    //setTimeout(function(){
        if(select.value == '現在地'){
            window.navigator.geolocation.getCurrentPosition(
                function(position){ // 成功した時
                    center = {lat: position.coords.latitude, lng: position.coords.longitude};
                },
                function(){} // 失敗した時
            );
        }else{
            for(var i=0 ; i<point.length ; i++){
                if(select.value==point[i]['name']){
                    center = {
                                lat: point[i]['lat'],
                                lng: point[i]['lng']
                            };
                    console.log(center);
                }
            }
        }
        initMap();
    //},500)
}//centerSelector()


//center debug
if(center==0){
    console.log("no center");
}else{
    console.log(center);
}


 // 地図の作成
function initMap() {

   map = new google.maps.Map( mapId, { // #mapに地図を埋め込む
            center: center,// 地図の中心を指定
            zoom: 15 ,// 地図のズームを指定
            zoomControlOptions: {
            //LEFT_BOTTOMで左下に指定
            position: google.maps.ControlPosition.LEFT_BOTTOM
            },
            mapTypeControl: false,
        });
 　

// マーカー毎の処理
//urlがあるものだけマーカーを立てる
    for (var i = 0; i < point.length; i++) {
        if(point[i]['url']!=''){
            var markerLatLng = new google.maps.LatLng({lat: point[i]['lat'], lng: point[i]['lng']}); // 緯度経度のデータ作成
            marker[i] = new google.maps.Marker({ // マーカーの追加
                position: markerLatLng, // マーカーを立てる位置を指定
                map: map // マーカーを立てる地図を指定
            });
      
            infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
                position: center, 
                content:'<div id="studio">' +
                        '<a class="pageName dropdown-item" href="#frame" onclick="pageDown()">' + point[i]['name'] + '</a>' 
                        +'</div>',// 吹き出しに表示する内容
                pixelOffset: new google.maps.Size( 0, 0 )         
            });
        markerEvent(i); // マーカーにクリックイベントを追加
        }
    }
}//initMap
 
 
// マーカーにクリックイベントを追加
function markerEvent(i) {
    marker[i].addListener('click', function() { // マーカーをクリックしたとき
        //別のマーカーをクリックしたら今のマーカーを閉じる
        if(currentInfoWindow){
            currentInfoWindow.close();
        }
        
        infoWindow[i].open(map, marker[i]); // 吹き出しの表示
        currentInfoWindow=infoWindow[i];
        iframe.src=point[i]['url'];
        site.style.display="block";
    });
}//markerEvent

/*
//予約ページ閉じるボタン
function infoWindowClose(){
    site.style.display="none";
}

function scrollToMap(){
    let height = select.getBoundingClientRect();
    window.scroll({
      top: height.top-20,
      behavior: "smooth"
    });
    
}

*/
//既に開いているinfowindow内のaタグをクリックするとsite再表示
function pageDown(){
    //予約ページが閉じられていたら再度開く
    if(site.style.display=="none"){
        site.style.display="block";
    }
}


//jquery
$(function(){
    
    $(document).ready(function(){
       $('.jumbotron').fadeIn(500);
       $('h1').fadeIn(1000);
       $('#para').fadeIn((1500));
       $('#button-to-map').fadeIn(2000);
    });
    
    //infowindow内スタジオ名クリックでiframeまでスクロール
    $('.pageName').click(function() {
        $('#site').fadeIn(100);
    })
    
    
    //select切り替えでmap表示/非表示
    $('select').change(function(){
        $('#map').fadeOut(50);
        $('#map').fadeIn(500);
        $("html,body").animate(
            {scrollTop : $('form').offset().top}, 
            {queue : false}
        );
    })
    
    //closerをクリックでmapへスクロール
    $('#closer').click(function() {
        $('#site').fadeOut(750);
        $("html,body").animate(
            {scrollTop : $('form').offset().top}, 
            {queue : false}
        );
    })
    
    //探しに行くボタンスクロール
    $('#button-to-map').click(function(){
        $("html,body").animate(
            {scrollTop : $('form').offset().top}, 
            {queue : false}
        );
    });
    
    
});

</script>
</body>
</html>