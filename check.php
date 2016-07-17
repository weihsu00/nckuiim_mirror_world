<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>檢查表單</title>

	<script type="text/javascript">
		function checkdata(){
			var sflag = true
			if(document.PAD.UserName.value=='')
				{sflag = false}

		if (sflag){
			alert('完整')
		}
		else{
			alert('不完整')
		}
		return sflag
		}

	</script>
</head>
<form name="PAD" onsubmit="return checkdata()">
請輸入姓名 <input type="text" name="UserName">
 <input type=submit value="傳送">
	
</form>
<body>

</body>
</html>