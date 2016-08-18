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
    <link href="view_order_2.css" rel=stylesheet>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
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
            <div>
                <div style="text-align:center; width:100%; margin:10px;">
                    <b style="font-size:24px">訂單編號</b> <b style="font-size:24px">訂單名稱</b>
                </div>
            <div class="output_table">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2" width="40%">訂單資訊</th>
                            <th colspan="2" width="40%">日期資訊</th>
                            <th width="20%">管理</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>套量單位</td>
                            <td></td>
                            <td>下單日期</td>
                            <td></td>
                            <td rowspan="7" style="vertical-align:top;">
                                <label style="font-size:20px"><input type="checkbox" name="priority_order">
                                插單件</label>
                                <a href="#" class="s3d btn_revised">修改 <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                <a href="#" class="s3d btn_add_order" aria-hidden="true">增加訂單<span class="glyphicon glyphicon-plus"></span></a> 
                                <a href="#" class="s3d btn_submit" aria-hidden="true">發至待審夾<span class="glyphicon glyphicon-arrow-right"></span></a> 
                            </td>
                        </tr>
                        <tr>
                            <td>套量人員</td>
                            <td></td>
                            <td>預定交貨日</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>總售價</td>
                            <td></td>
                            <td>進待審夾日</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>總訂金</td>
                            <td></td>
                            <td>進生產中日</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>進運輸中日</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>進到貨日</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>完成日</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <br></br>
                <table>
                    <thead>
                        <tr>
                            <th>性別</th>
                            <th>襯衫</th>
                            <th>外套</th>
                            <th>背心</th>
                            <th>褲子</th>
                            <th>裙子</th>
                            <th>流水單總銷售額</th>
                            <th>流水單總訂金</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>男</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>女</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <input type="text" name="order_remind" style="width:100%" value="在此留言...">
                <input type="button" name="message_button" onclick="add_message();" value="發送留言" style="padding:2px;width:100%;">

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