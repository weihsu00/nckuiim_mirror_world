# nckuiim_mirror_world
Project of MW web database.
Using HTML, PHP + MySQL on Linux.

<!--

網頁統一格式

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
    <link href="" rel=stylesheet> /*引號內寫所引用之css檔之位置與name*/
    <script src="bootstrap/js/bootstrap.min.js"></script>
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
        </div>
        
        </div>
    <div class="Mastfoot">
            <!--置底文字-->
            <p> Copyright© 2016 Mirrorworld Inc. Aii Rights Reserved. </p>
        </div>
</body>
<script src="http://code.jquery.com/jquery.js"></script>

</html>
-->

<!--
以下為CSS的部分
/*基本架構*/

* {
	font-size: 12px;
}
html,body{
	width:100%;
	height:100%;
	text-align: left;
}

body {
	flex-direction: column;
	font-family: 標楷體;
	overflow-x: hidden;
}

/*body內的部分*/
.Head {
	position: fixed;
	width: 100%;
	height: 20px;
	text-align: right;
	margin:0px 5px 0px 5px;
}
.Head a{
	padding-right: 20px;
}

.container{
	display: flex;
	height:100%;
	width:990px;
	align-items: flex-start;
	flex-direction: column;
	justify-content: center;

}

.Masthead {
	top: 21px;
	position: fixed;	
	width: 100%;
	height: 53px;

	
}


.Masthead div{
	font-family: 新細明體;
}

.menu_navbar{
	height:53px;
	width: 990px;
}
.Innercover {
	width: 100%;
}

ul li{
	display: inline;
}
/*請將css內容寫在其下之範圍內*/


/*請將css內容寫在其上之範圍內*/

/*Mastfoot*/
.Mastfoot{
    position: fixed;
    bottom:0px;
    background-color: #222;
    width: 100%;
    color:#FFFFFF;
    text-align: center;

}

.Mastfoot p {
	text-align: center; 
	font-family: arial;
	color:#ffffff;
}
-->
