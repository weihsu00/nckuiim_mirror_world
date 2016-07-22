<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
    <link href="css/bootstrap.min.css" rel=stylesheet>
    <link href="view_order.css" rel=stylesheet>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>

	<div class = Masthead>
		<div class = Head> 
			xxx你好 <a href="">登出</a>
		</div>
		<div class= Menu > <!--選單按鈕-->
			<button type = "button" class = "btn btn-primary" id = "frontpage">首頁</button>
			<button type = "button" class = "btn btn-primary" id = "draft">草稿匣</button>
			<button type = "button" class = "btn btn-primary" id = "waiting">待審匣</button>
			<button type = "button" class = "btn btn-primary" id = "di">送件匣</button>
			<button type = "button" class = "btn btn-primary" id = "producing">生產中</button>
			<button type = "button" class = "btn btn-primary" id = "dilivering">運輸中</button>
			<button type = "button" class = "btn btn-primary" id = "unpaid">已到貨-尾款未收</button>
			<button type = "button" class = "btn btn-primary" id = "finished">已完成</button>
			<button type = "button" class = "btn btn-primary" id = "caculation">訂單統計</button>
			<button type = "button" class = "btn btn-primary" id = "print">列印功能</button>
			<button type = "button" class = "btn btn-primary" id = "search">訂單搜尋</button>
		</div>
	</div>
	
	<div class = Innercover >
		<div>
			<h2><p>訂單編號 訂單名稱</p></h2>
			<table class = Form width="100%" >
				<th width="40%">訂單資訊</th><th width="40%">日期資訊</th><th >管理</th>
				<tr>
				<td height="250"></td><td></td><td></td>
			</table>
		</div>
		<div>
			<input type="text" name="add_message" style="width:99%;" placeholder = "在此留言">
			<button type = "button" class = "btn btn-primary" id = "message">發送留言</button>
		</div>
		<div>
			<div class = Tool>
				訂單流水號  修改次數 : 0
				<button type = "button" class = "btn btn-primary" id = "message">修改</button>
				<button type = "button" class = "btn btn-primary" id = "message">刪除</button>
				<button type = "button" class = "btn btn-primary" id = "message">複製成新單</button>
				<button type = "button" class = "btn btn-primary" id = "message">圖片上傳</button>
			</div>
			<div>
				<table class="Form" width = "100%" >
				<td height="500" style="border:none"><h1>流水單表格</h1></td>
				</table>				
			</div>
		</div>		
	</div>
</body>
	<div class = Mastfoot> 
		Copyright© 2016 Mirrorworld Inc. All Rights Reserved. 
	</div>


</html>