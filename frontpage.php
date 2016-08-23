<?php
/*$msg ="";
session_start(); // 啟用交談期
if ($_SESSION["login_session"] != true) {
    header("Location: homepage.php");
}*/
$error = ""; $result = ""; 
if (isset($_POST["send_remind"])) {  // 是否是表單送回
    $title = $_POST["title"];   // 取得表單欄位值
    $reciever = $_POST["reciever"];
    $reciever_result = "";
    switch ($reciever) {
        case 0:
            $reciever_result = "0";  
            break;
        case 1:
            $reciever_result = "布織道";
            break;
    }
    $type = $_POST["type"];
    $type_result = "";
    switch ($type) {
        case 0:
            $type_result = "0";
            break;
        case 1:
            $type_result = "修改物件寄送";
            break;
        case 2:
            $type_result = "緊急事件";
            break;
        case 3:
            $type_result = "訂單資料及相片";
            break;
        case 4:
            $type_result = "文書檔案";
            break;
        case 5:
            $type_result = "訂單更動通知";
            break;
        case 6:
            $type_result = "其他";
            break;
    }
    $delivery_date = $_POST["delivery_date"];
    $content = $_POST["content"];
    if (empty($title)) { //確認是否正確輸入資訊
        $error .= "請填入標題<br/>";
    }   else if ($reciever==0){
        $error .= "請選擇受文者<br/>";
    }   else if ($type==0){
        $error .= "請選擇類型<br/>";
    }   else if (empty($delivery_date)){
        $error .= "請輸入指定完成日<br/>";
    }   else if (empty($content)){
        $error .= "請輸入內文<br/>";
    }
    else{
        $db = @mysqli_connect("localhost", "root", "xxxg00w0");
        mysqli_select_db($db, "mirrorworld"); // 選擇資料庫
        $sql = "INSERT INTO instruct" .
        "(Title, Account_ID_Reciever, Type_ID, Delivery_date, Content)" .
        "VALUES ('$title', '$reciever_result', '$type_result', '$delivery_date', '$content')";
        if (!mysqli_query($db, $sql)) {
            $result = "新增交辦事項失敗...<br/>" . mysqli_error($db);
        }
        else $result = "新增交辦事項成功...<br/>";
        mysqli_close($db);
    }
}
else {  // 初始表單欄位值
   $title = ""; $reciever_result = ""; $reciever = ""; $type_result = ""; $type = ""; 
   $delivery_date = ""; $content = ""; 
} 

//上傳檔案
if (isset($_FILES['file']['name'])) {
    $big5_name=iconv("UTF-8", "big5", $_FILES['file']['name']);//UTF-8轉BIG5讓電腦上顯示正常
    $name=$_FILES['file']['name'];
    $target_path="upload/" . $big5_name;
    move_uploaded_file($_FILES['file']['tmp_name'], $target_path);//移動檔案位置
}


function create_remind(){  //取出交辦事項資料
    $db = mysqli_connect("localhost", "root", "xxxg00w0");
    if (!$db) die("錯誤: 無法連接MySQL伺服器!" . mysqli_connect_error());
        mysqli_select_db($db, "mirrorworld") or  // 選擇資料庫
            die("錯誤: 無法選擇資料庫!" . mysqli_error($db));
        $sql = "SELECT * FROM instruct ORDER BY ID DESC";
        $rows = mysqli_query($db, $sql); // 執行SQL查詢              
        $num = mysqli_num_rows($rows); // 取得記錄數
        mysqli_close($db); // 關閉伺服器連接
    if ($num > 0) { // 有記錄 
        for ($i = 0; $i < 10; $i++ ) { // 新增表格並提取資料庫資料
            $row = mysqli_fetch_row($rows);
            echo "<tr>";
            echo "<td id=firsttd onClick=show_hide_tr($row[0])> 待確認</td>";
            echo "<td onClick=show_hide_tr($row[0])> $row[1] </td>";
            echo "<td onClick=show_hide_tr($row[0])> $row[2] </td>";
            echo "<td onClick=show_hide_tr($row[0])> $row[3] </td>";
            echo "<td onClick=show_hide_tr($row[0])> 一二三(四)</td>";
            echo "<td onClick=show_hide_tr($row[0])> $row[4] </td>";
            echo "</tr>";
            echo "<tr>";
            // 隱藏的整個框架
            echo "<td abbr=0 colspan=6 id=$row[0]td style=display:none> 
                    <div id=$row[0] style=display:none>
                    $row[5]";
                    
            echo "</div> 
                </td>" ;
            echo "</tr>";
        }
    }
mysqli_free_result($rows); // 釋放儲存的空間
}
                    
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
   
    
    <script type="text/javascript">
    $.noConflict();//使jquery不重複引用
    //日歷的內容中文化
    jQuery(document).ready(function($){ 
        var opt={dayNames:["星期日","星期一","星期二","星期三","星期四","星期五","星期六"],
               dayNamesMin:["日","一","二","三","四","五","六"],
               monthNames:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
               monthNamesShort:["一月","二月","三月","四月","五月","六月","七月","八月","九月","十月","十一月","十二月"],
               prevText:"上月",
               nextText:"次月",
               weekHeader:"週",
               showMonthAfterYear:true,
               dateFormat:"yy-mm-dd",
               minDate:"0"
               };
      $("#delivery_date").datepicker(opt);
    $('#myTab a').click(function(e) {
    e.preventDefault()
    $(this).tab('show')
})
      });
    
    //點整排來縮放的函式
    function show_hide_tr(R_num){ 
        if ($("#"+R_num+"td").attr("abbr") == "0")
        {
            $("#"+R_num+"td").attr("abbr","1");
            $("#"+R_num+"td").toggle();
            $("#"+R_num).slideToggle("fast");
        }
        else                               
        {
            $("#"+R_num+"td").attr("abbr","0");
            $("#"+R_num).slideToggle("fast" , function(){$("#"+R_num+"td").toggle()});
        }
    }
    </script>
</head>



<body>
    <!--標頭包含使用者資訊以及選單按鈕-->
    <div class="Head">
        <!--使用者資訊-->
        <?php //echo $_SESSION["username"] . "您好！" ?>
        <a href="">登出</a>
    </div>
    <div class="container">
        <div class="Masthead">
            <!--選單按鈕-->
            <div class="menu_navbar">
                <ul class="menu_navigation">
                    <li class=""><a href="">首頁</a></li>
                    <li class=""><a href="">草稿匣</a></li>
                    <li class=""><a href="">待審匣</a></li>
                    <li class=""><a href="">送件匣</a></li>
                    <li class=""><a href="">已到貨-尾款未收</li></a>
                    <li class=""><a href="">已完成</a></li>
                    <li class=""><a href="">訂單統計</a></li>
                    <li class=""><a href="">列印功能</a></li>
                    <li class=""><a href="">訂單搜尋</a></li>
                </ul>
            </div>
        </div>
        <div class="Innercover">
            <!--交辦事項及每月目標-->
            <div class="uppercover"></div>
                <div role="tabpanel">
                <!--navtab-->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#instruct" aria-controls="instruct" role="tab" data-toggle="tab">交辦任務</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">未完成之交辦任務</a></li>
                         <li role="presentation"><a href="#monthly_task" aria-controls="monthly_task" role="tab" data-toggle="tab">每月任務</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">重大公告事項</a></li>
                    </ul>
                        <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active Workremind" id="instruct">
                            <input type="button" onclick=show_hide_tr(-1) value="新增" id="add_new">
                            <div style="color: red; font-size: 16px;"><?php echo $error ?></div>
                            <div style="font-size: 16px"><?php echo $result ?></div>
                                    
                                        <div class="Workremind_post">
                                            <div>
                                            <p><?php //echo "由 " . $_SESSION["username"] . " 所交辦的事項" ?></p>
                                            </div>
                                            <div id="-1" abbr="0" style="display: none;">
                                                <form  id="instruct_form" class="form" name="workremind_form" action="" method="post" enctype="multipart/form-data">
                                                    <div class="fl-col">
                                                        <div></div>
                                                        <div class="fl_row">
                                                        <label>標題: </label>
                                                        <input type="text" class="form-control" id="title"  name="title" style="width:120px;"><label>受文者</label>
                                                        <select name="reciever" id="reciever">
                                                        <option value="0">請選擇受文者</option>
                                                        <option value="1">1</option>
                                                        </select>
                                                        <label>類型</label>
                                                        <select name="type" id="type">
                                                        <option value="0">請選擇類型</option>
                                                        <option value="1">修改物件寄送</option>
                                                        <option value="2">緊急事件</option>
                                                        <option value="3">訂單資料及相片</option>
                                                        <option value="4">文書檔案</option>
                                                        <option value="5">訂單更動通知</option>
                                                        <option value="6">其他</option>
                                                        </select>
                                                        <label>指定完成日</label>
                                                        <input type="text" class="form-control" name="delivery_date" id="delivery_date" style="width:120px;">
                                                        <p>內容：</p>
                                                        <textarea class="form-control" rows="3" name="content" id="content"></textarea>
                                                    </div>
                                                    <div id="send_button">
                                                    <input type="file" name="file" id="file" value="選擇檔案">
                                                    <input type="submit" name="send_remind" id="send_remind" value="送出">                                        
                                                    <input type="reset" name="send_remind" id="send_remind"  onclick=show_hide_tr(-1) value="取消">
                                                    
                                                    </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    
                            <table class="workremind_output">
                            <thead>
                                <tr>
                                    <th>狀態</th>
                                    <th>主旨</th>
                                    <th>類型</th>
                                    <th>指定完成日</th>
                                    <th>交待人</th>
                                    <th>受文者</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php create_remind(); ?>
                            <tr id="moreinfo">
                                <td colspan="6"><a href="">觀看更多...</a></td>
                            </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- End of Workremind -->
                        <div role="tabpanel" class="tab-pane" id="profile">bbb



                        </div>
                        <!-- End of profile -->
                        <div role="tabpanel" class="tab-pane" id="monthly_task">
                            <h3>每月目標</h3>
                            <div class="content">
                                <table class="monthly_output">
                                    <thead>
                                        <tr>
                                            <th>職位</th>
                                            <th>已完成業績</th>
                                            <th>本月目標業績</th>
                                        </tr>
                                    </thead>
                                    <table>
                                    </table>
                             </div>           
                        </div>
                        <!-- End of monthly task -->
                         <div role="tabpanel" class="tab-pane" id="settings">...

                         </div>
                         <!-- End of settings -->
                    </div>                    
                </div>
            </div>                                   
        </div>        
    </div>
    <div class="Mastfoot">
            <!--置底文字-->
            <p> Copyright© 2016 Mirrorworld Inc. All Rights Reserved. </p>
        </div>
</body>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>