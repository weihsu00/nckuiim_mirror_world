<?php
session_start();  // 啟用交談期
$username = "";
$password = "";
$msg = "";
// 取得表單欄位
if (isset($_POST["Username"]))
   $username = $_POST["Username"];
if (isset($_POST["Password"]))
   $password = $_POST["Password"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 建立MySQL伺服器連接
   $db = mysqli_connect("localhost","root","t19950515");
   mysqli_select_db($db, "mirrorworld"); // 選擇資料庫
   // 建立SQL指令字串
   $sql = "SELECT * FROM Account WHERE password='";
   $sql.= $password."' AND username='".$username."'";
   $rows = mysqli_query($db, $sql); // 執行SQL指令字串
   // 是否查詢到記錄
   if (mysqli_fetch_row($rows) != false) {
      // 成功登入, 指定Session變數
      $_SESSION["login_session"] = true;
      $_SESSION["username"] = $username;
      header("Location: frontpage.php");  // 轉址至首頁
   } 
   else{
      $msg = "使用者名稱或密碼錯誤!<br/>";
   }
   mysqli_close($db);  // 關閉伺服器連接
}
?>
<!DOCTYPE html>
<html lang="zh-Hant">

<head>

    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="LuYH">
    <title>妙華如發訂單系統</title>
    <link href="bootstrap/js/bootstrap.min.js" rel=stylesheet>
    <link href="normalize.css" rel=stylesheet>
    <link href="cover.css" rel=stylesheet>

    <!--[if lt IE 9]><script src=~/Scripts/AssetsBS3/ie8-responsive-file-warning.js></script><![endif]-->
    <script src=/Scripts/AssetsBS3/ie-emulation-modes-warning.js></script>
    <!--[if lt IE 9]><script src=https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js></script><script src=https://oss.maxcdn.com/respond/1.4.2/respond.min.js></script><![endif]-->


    <body>
　　
        <div class="wrapper">
            <div class="cover">
                <div class="cover-left col-md-6">
            
                </div>
                <div class="cover-right col-md-6">
                    <div class="inner-cover">
                        <form role="form" class="form" action="homepage.php" method="post">
                            <div class="form-group">
                            <label for="UserName" id="label_UserName">帳號</label>
                            <input type="text" class="signInText" id="Username" placeholder="輸入帳號" name="Username">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1" id="label_password">密碼</label>
                            <input type="password" class="signInText" id="Password" placeholder="輸入密碼" name="Password">
                        </div>
                        <div class="checkbox">
                        <label id="remember_me">
                        <input type="checkbox" id="checkbox_login"> 記住我
                        </label>
                        </div>
                        <div class="login_button">      
                        <button type="submit" class="login-form-button">登入</button>
                        </div>

                         <p><?php echo $msg; ?></p>

                        </form>
                     
                    </div>    
                </div>
            </div>

            <div class="mastfoot">
                <p>Copyright © 2016 Mirror World Inc. All rights reserved.</p>
            </div>
        </div>

    </body>
            <script src="http://code.jquery.com/jquery.js"></script>
            <script src=bootstrap/css/bootstrap.min.css></script>
            <script src=/Scripts/AssetsBS3/docs.min.js></script>
            <script src=/Scripts/AssetsBS3/ie10-viewport-bug-workaround.js></script>
