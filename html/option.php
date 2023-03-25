<?php

//日にちを取得する関数
// function date_select(){
//     include('db_config.php');
//     $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport);
    
//     if(mysqli_connect_errno()){
//         die("DBに接続できません！".mysqli_connect_errno()."¥n");
//     }
//     $query = "select distinct Date from buzz_info2";
    
//     if($result = mysqli_query($link,$query)){
//         foreach($result as $row){
//             echo "<option value=".$row['Date'].">".date("Y年n月j日" ,strtotime($row['Date']))."</option>";
//         }   
//     }
// }

//人数から面積を算出する関数
// function room_size(){
//     for($i=1;$i<=10;$i++){
//         $s=$i*4;
//         echo "<option value=".$s.">".$i."人"."</option>";
//     }
// }

//columnの分だけselectを作る関数
// function time_select(){
//     include('db_config.php');
//     $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport);
    
//     if(mysqli_connect_errno()){
//         die("DBに接続できません！".mysqli_connect_errno()."¥n");
//     }
//     $query = "show columns from buzz_info2";
//     if($result = mysqli_query($link,$query)){
//         foreach($result as $row){
//            if($row['Field']!='Date'&&$row['Field']!='room'&&$row['Field']!='room_num'&&$row['Field']!='size'){
//                echo "<option value=".$row['Field'].">".$row['Field']."</option>";
//             }
//         }
//     }
// }


//利用時間を算出する関数　スタート時刻から深夜時間までの上限をlengthとすれば良い
// function use_time(){
//     for($t=1;$t<=12;$t++){
//         $T=$t*30;
//         echo "<option value=".$T.">".$T."分"."</option>";
//     }
// }

//駅のlat,lngを取得する関数
function place_select(){
    include('db_config.php');
    $link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport);
    
    mysqli_set_charset($link, "utf8mb4");
    
    if(mysqli_connect_errno()){
        die("DBに接続できません！".mysqli_connect_errno()."¥n");
    }
    
    $query = "select distinct name from place where is_studio = 0";
    
    if($result = mysqli_query($link,$query)){
        foreach($result as $row){
            echo "<option value="."'".$row['name']."'".">".$row['name']."</option>";
        }
    }
}

?>