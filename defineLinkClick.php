<!DOCTYPE html>
<html>
<head>
	<title> 用連結模擬一個按鈕 </title>
	<meta charset="utf-8">
	<script type="text/javascript">
	function defineLinkClick(){
		var myLink = document.getElementById("myLink");
		myLink.style.fontSize = '16px';
		myLink.style.textAlign = 'center';
		myLink.style.color = 'white';
		myLink.style.padding = '4px 10px';
		myLink.style.margin = '3px';
		myLink.style.background = 'gray';
		myLink.style.textDecoration = 'none';
		myLink.style.borderColor = '#EEEEEE #717171 #717171 #EEEEEE';
		myLink.style.borderStyle = 'solid';
		myLink.style.borderWidth = '1px';
	}
	</script>
</head>
<body onload="defineLinkClick();" style="text-align:center">
 <!--定義X連結-->
<a href="https://www.google.com.tw/" id="myLink">按鈕式連結</a>
</body>
</html>