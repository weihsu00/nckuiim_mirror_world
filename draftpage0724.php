<?php
header('Content-Type: text/html; charset=utf8');
$error = ""; $result = ""; 
if (isset($_POST["send"])) {  // 是否是表單送回
   $Title = $_POST["Title"];   // 取得表單欄位值
   $Delivery_Date = $_POST["Delivery_Date"];
   $Account_Name = $_POST["Account_Name"];
   $Account_Unit_ID = $_POST["Account_Unit_ID"];
   $Customer_Name = $_POST["Customer_Name"];
   $Customer_Phone = $_POST["Customer_Phone"];
   $Total_Price = $_POST["Total_Price"];
   $Total_Deposit = $_POST["Total_Deposit"];
   $Payment_Style = (int)$_POST["Payment_Style_Result"];
      switch ($Payment_Style) {
        case 0:$Payment_Style="現金";
           break;
        case 1:$Payment_Style="匯款";
           break;
        case 2:$Payment_Style="支票";
           break;
        case 3:$Payment_Style="刷卡";
           break;
        case 4:$Payment_Style="其他";
           break;   
   }

   if (empty($Title)) { // 欄位沒填
      echo "<script>alert('訂單名稱不可是空白');</script>";
   }
   else { 
      if (empty($Delivery_Date)) { // 欄位沒填
         echo "<script>alert('預定交貨日不可是空白');</script>";
      } 
      if (empty($Account_Name)) { // 欄位沒填
         echo "<script>alert('套量人員不可是空白');</script>";
      }
      if (empty($Account_Unit_ID)) { // 欄位沒填
         echo "<script>alert('套量單位不可是空白');</script>";
      }
      if (empty($Customer_Name)) { // 欄位沒填
         echo "<script>alert('客戶聯絡人不可是空白');</script>";
      }
      if (empty($Customer_Phone)) { // 欄位沒填
         echo "<script>alert('聯絡人電話不可是空白');</script>";
      }
      if (empty($Total_Price)) { // 欄位沒填
         echo "<script>alert('單一窗口收款總售價不可是空白');</script>";
      }
      if (empty($Total_Deposit)) { // 欄位沒填
         echo "<script>alert('單一窗口收款總訂金不可是空白');</script>";
      }

      else { // 表單處理
         $db = mysqli_connect("localhost", "root", "t19950515");
         @mysqli_query($db,"SET NAMES utf8");
         mysqli_select_db($db, "mirrorworld"); // 選擇資料庫
         $sql = "INSERT INTO draftpage"."(Title, Delivery_Date, Account_Name, Account_Unit_ID, Customer_Name, Customer_Phone, Total_Price, Total_Deposit, Payment_Style)"."VALUES('$Title', '$Delivery_Date', '$Account_Name', '$Account_Unit_ID', '$Customer_Name', '$Customer_Phone', '$Total_Price', '$Total_Deposit', '$Payment_Style')";
         if (!mysqli_query($db, $sql)) { // 執行SQL指令
            $result = "新增記錄失敗...<br/>" . mysqli_error($db);
            echo "<script>alert('新增記錄失敗');</script>";
         }
         else {
            $result = "新增記錄成功...<br/>";
            echo "<script>alert('新增記錄成功');</script>";
     }
         mysqli_close($db); // 關閉連接         
      }
   }
}
else {  // 初始表單欄位值
   $Title= ""; $Delivery_Date= ""; $Account_Name= ""; $Account_Unit_ID= ""; $Customer_Name= ""; $Customer_Phone= ""; $Total_Price= ""; $Total_Deposit= ""; $Payment_Style= "";
} 
?>

<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/Content/AssetsBS3/img/favicon.ico>
    <title>妙華如發訂單系統-首頁</title>
    <link href="bootstrap/css/bootstrap.min.css" rel=stylesheet>
    <link href="normalize.css" rel=stylesheet>
    <link href="draftpage.css" rel=stylesheet>
</head>

<body>
    <!--標頭包含使用者資訊以及選單按鈕-->
    <div class="Head">
        <!--使用者資訊-->
        <a href="">登出</a>
    </div>
    <div class="container">
        <div class="Masthead">
            <!--選單按鈕-->
            <div class="menu_navbar">
                <ul class="menu-navigation">
                    <li class=""><a href="">首頁</a></li>
                    <li class=""><a href="">草稿匣</a></li>
                    <li class=""><a href="">待審匣</a></li>
                    <li class=""><a href="">送件匣</a></li>
                    <li class=""><a href="">已到貨-尾款未收</li>
                    <li class=""><a href="">已完成</a></li>
                    <li class=""><a href="">訂單統計</a></li>
                    <li class=""><a href="">列印功能</a></li>
                    <li class=""><a href="">訂單搜尋</a></li>
                </ul>
            </div>
        </div>
        <div class="Innercover">
            <!--網頁內文請寫在這-->
            <div>
                <h3 style="font-weight:700">訂單 草稿夾</h3>
            </div>
            <div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">建立草稿訂單</button>
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="myModalLabel">建立新訂單</h4>
                                        <div style="color: red"><?php echo $error ?></div>
                                    </div>
                                    <div class="modal-body">
                                        <form id="newdraft_form" name="newdraft_form"  method="post" action="">
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Title">訂單名稱</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="text" name="Title" id="Title" value="<?php echo $Title ?>"/>
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Delivery_Date">預定交貨日</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="date" name="Delivery_Date" id="Delivery_Date" value="<?php echo $Delivery_Date;?>" />
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Account_Name">套量人員</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="text" name="Account_Name" id=" Account_Name" value="<?php echo $Account_Name;?>"/>
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Account_Unit_ID">套量單位</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="text" name="Account_Unit_ID" id="Account_Unit_ID" value="<?php echo $Account_Unit_ID;?>"/>
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Customer_Name">客戶聯絡人</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="text" name="Customer_Name" id="Customer_Name" value="<?php echo $Customer_Name;?>"/>
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Customer_Phone">聯絡人電話</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="text" name="Customer_Phone" id="Customer_Phone" value="<?php echo $Customer_Phone;?>"/>
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Total_Price">單一窗口收款總售價</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="text" name="Total_Price" id="Total_Price" value="<?php echo $Total_Price;?>"/>
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Total_Deposit">單一窗口收款總訂金</label>
                                                </div>
                                                <div class="nf-3">
                                                    <input type="text" name="Total_Deposit" id="Total_Deposit" value="<?php echo $Total_Deposit?>"/>
                                                </div>
                                            </div>
                                            <div class="nf-1">
                                                <div class="nf-2">
                                                    <label for="Payment_Style_Result">單一窗口收款方式</label>
                                                </div>
                                                <div class="nf-3">
                                                    <div>
                                                        <select name="Payment_Style_Result" id="Payment_Style_Result" >
                                                            <option value="0">現金</option>
                                                            <option value="1">滙款</option>
                                                            <option value="2">支票</option>
                                                            <option value="3">刷卡</option>
                                                            <option value="4">其他</option>
                                                        </select>
                                                        <?php echo $Payment_Style?>
                                                    </div>
                                                </div>
                                            </div>
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                                        <button name="send" id="send" type="submit" class="btn btn-primary">新增訂單</button>
                                        
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button name="send" type="submit" class="btn btn-primary">新增訂單</button>
                                    </div>
                                        <?php echo $result ?>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default btn-sm" onClick="">回收桶</button>
                    
            </div>

        </div>
    </div>
    <div class="Mastfoot">
        <!--置底文字-->
        <p> Copyright© 2016 Mirrorworld Inc. Aii Rights Reserved. </p>
    </div>
<?php echo $result ?>
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</html>
