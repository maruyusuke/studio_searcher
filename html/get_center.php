 <?php
$query = "select distinct name, lat, lng, url, is_studio from place ";

//mysqlに接続
include('db_config.php');
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname,$dbport);

mysqli_set_charset($link, "utf8mb4");

if(mysqli_connect_errno()){
    die("DBに接続できません！".mysqli_connect_errno()."¥n");
}

if($result = mysqli_query($link,$query)){
   
    foreach($result as $key => $value){
        
         echo "{ name:'".$value['name'].
               "',lat: ".$value['lat'].
               ", lng: ".$value['lng'].
               ", url: '".$value['url'].
               "',is_studio: ".$value['is_studio']."},\n";
             
    }
}//if($result = mysqli_query($link,$query))

mysqli_close($link);
?>