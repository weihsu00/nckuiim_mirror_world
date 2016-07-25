<?php
$error = ""; $result = ""; 
if (isset($_POST["send"])) {  // 是否是表單送回
    $title = $_POST["title"];
    $reciever = (int)$_POST["reciever"];
    $reciever_result="";
    switch ($reciever) {
            case 0:
                $reciever_result="0";
                break;
            case 1:
                $reciever_result="1";
                break;
            default:
                $reciever_result="0";
                break;
        }
    $type = (int)$_POST["type"];
    $type_result="";
        switch ($type) {
            case 0:
                $type_result="0";
                break;
            case 1:
                $type_result="1";
                break;
            default:
                $type_result="0";
                break;
        }
    $delivery_date = $_POST["delivery_date"];
    $content = $_POST["content"];
    if (empty($title)) { // 欄位沒填
        $error = "標題不可是空白<br/>";
    }
    else { 
        if ($reciever_result=="0") // 欄位沒填
        $error .= "受文者不可是空白<br/>";   
        else { // 表單處理
        $db = mysqli_connect("localhost", "root", "xxxg00w0");
        mysqli_select_db($db, "mirrorworld"); // 選擇資料庫
        $sql = "INSERT INTO instruct" .
        "(Title, Account_ID_Reciever, Type_ID, Delivery_Date, Content)" .
        "VALUES ('$title', '$reciever_result', '$type_result', '$delivery_date', '$content')";
        }
        if (!mysqli_query($db, $sql)) { // 執行SQL指令
            $result = "新增記錄失敗...<br/>" . mysqli_error($db);
        }
        else $result = "新增記錄成功...<br/>";
        mysqli_close($db); // 關閉連接         
    }
   
}
else {  // 初始表單欄位值
    $title = ""; $reciever = "";
    $type = ""; $delivery_date = ""; $content = "";
} 

/*function show_work_remind(){
    $db = mysqli_connect("localhost", "root", "xxxg00w0");
if (!$db) die("錯誤: 無法連接MySQL伺服器!" . mysqli_connect_error());
mysqli_select_db($db, "mirrorworld") or  // 選擇資料庫
    die("錯誤: 無法選擇資料庫!" . mysqli_error($db));
$sql = "SELECT * FROM instruct";
$rows = mysqli_query($db, $sql); // 執行SQL查詢              
$num = mysqli_num_rows($rows); // 取得記錄數
mysqli_close($db); // 關閉伺服器連接
}*/
?>

<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="WeiHsu">
    <link rel=icon href=/Content/AssetsBS3/img/favicon.ico>
    <title>妙華如發訂單系統-首頁</title>
    <link href="bootstrap/css/bootstrap.min.css" rel=stylesheet>
    <link href="normalize.css" rel=stylesheet>
    <link href="frontpage.css" rel=stylesheet>
   
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
            <!--交辦事項及每月目標-->
            <div class="Workremind">
                <h3>交辦事項</h3>
                <div class="content">
                    <form id="instruct_form" class="form" name="workremind_form" action="">
                        <div class="fl-column1">
                            <div class="fl-name">
                                <label>標題</label>
                            </div>
                            <div>
                                <input type="text" class="form-control" id="title"  name="title" placeholder="Text input">
                            </div>
                            <div class="fl-name">
                                <label>受文者</label>
                            </div>
                            <div>
                                <select name="reciever">
                                    <option value="0">請選擇受文者
                                    </option>
                                    <option value="1">1
                                    </option>
                                </select>
                            </div>
                            <div class="fl-name">
                                <label>類型</label>
                            </div>
                            <div>
                                <select name="type">
                                    <option value="0">請選擇類型
                                    </option>
                                    <option value="1">1
                                    </option>
                                </select>
                            </div>
                            <div class="fl-name">
                                <label>指定完成日</label>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="delivery_date">
                            </div>
                        </div>
                        <div>
                            <p>內文</p>
                            <textarea class="form-control" rows="3" name="content"></textarea>
                        </div>
                        <input type="submit" name="send" value="送出">
                        <input type="reset" name="notsend" value="重置">
                        <?php echo $result ?>
                    </form>
                    
                    <table class="workremind_output">
                    <thead>
                        <tr>
                            <th>狀態</th>
                            <th>主旨</th>
                            <th>類型</th>
                            <th>指定完成日</th>
                            <th>交待人</th>
                            <th>受文者</th>
                            <th>附加檔案</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $db = mysqli_connect("localhost", "root", "xxxg00w0");
                        if (!$db) die("錯誤: 無法連接MySQL伺服器!" . mysqli_connect_error());
                        mysqli_select_db($db, "mirrorworld") or  // 選擇資料庫
                        die("錯誤: 無法選擇資料庫!" . mysqli_error($db));
                        $sql = "SELECT * FROM instruct";
                        $rows = mysqli_query($db, $sql); // 執行SQL查詢              
                        $num = mysqli_num_rows($rows); // 取得記錄數
                        mysqli_close($db); // 關閉伺服器連接
                        if ($num > 0) { // 有記錄
                        // 顯示每一筆記錄  
                            for ($i = 0;$i < $num; $i++ ) {
                            // 取出記錄資料
                                $row = mysqli_fetch_row($rows);
                                echo "<tr>";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1] . "</td>";
                                echo "<td>" . $row[2] . "</td>";
                                echo "<td>" . $row[3] . "</td>";
                                echo "<td>" . $row[4] . "</td>";
                                echo "<td>" . "</td>";
                                echo "<td>" . "</td>";
                                echo "</tr>";
                            }
                        }
                        mysqli_free_result($rows);
                        ?>
                    </tbody>
                </table>
                </div>
                
            </div>
            <div class="Monthlytask">
                <h3>每月目標</h3>
            </div>
        </div>
        
    </div>
    <div class="Mastfoot">
            <!--置底文字-->
            <p> Copyright© 2016 Mirrorworld Inc. Aii Rights Reserved. </p>
        </div>
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>