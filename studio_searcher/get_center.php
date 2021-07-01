 <?php
$query = "select distinct name,lat,lng,url,type from studio_place ";

//mysqlに接続
include('db_config.php');
$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(mysqli_connect_errno()){
    die("DBに接続できません！".mysqli_connect_errno()."¥n");
}

if($result = mysqli_query($link,$query)){
   
    foreach($result as $key => $value){
        
         echo "{ name:'".$value['name'].
               "',lat: ".$value['lat'].
               ", lng: ".$value['lng'].
               ", url: '".$value['url'].
               "',type: ".$value['type']."},\n";
             
    }
}//if($result = mysqli_query($link,$query))

mysqli_close($link);
?>