<!DOCTYPE html>
　　<html>
　　　　<head>
　　　　　　　<meta charset="utf-8" />
　　　　　　　<title> Link.php </title>
　　　　</head>
　　　　<body>
<?php
// 建立MySQL伺服器連接 
$db = @mysqli_connect( 
            '127.0.0.1',  // MySQL主機名稱 
            't199560213',       // 使用者名稱 
            't19950515');    // 密碼 
@mysqli_query($db,"SET NAMES utf8"); 

if ( !$db ) {
   echo "MySQL伺服器連接錯誤!<br/>";
   exit();
}
else {
   echo "MySQL伺服器連接成功!<br/>";

   $dbname = "MirrorWorld";
// 開啟指定的資料庫
if ( !mysqli_select_db($db, $dbname) )
   die("無法開啟 $dbname 資料庫!<br/>");
else
   echo "資料庫: $dbname 開啟成功!<br/>";

}
mysqli_close($db);  // 關閉伺服器連接
?>
</body>
</html>
