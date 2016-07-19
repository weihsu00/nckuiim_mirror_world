<!DOCTYPE html>
<html>
<head>
	<title>Check Data</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function checkname(){
			if (document.SPAD.SNAME.value =='姓名'||document.SPAD.SNAME.value ==''){
				alert('請確實輸入姓名');
				return(false)
			}
			else{
				return(true)
			}
		}

		function checkID(){
			var ID_Load = ''+document.SPAD.SNAME.value.toUpperCase()

			if(ID_Load.length != 10){
				alert('身分證字號字數不足')
				return(false)
			}
		
		var ID_Input = new Array(10)
		for(var i=0; i<10; i++){
			ID_Input[i] = ID_Load.charAt(i)
		}

		var EngString = 'ABCDEFGHIJKLMNPQRSTUVXYXZIO'
		ID_Input[0] = EngString,indexOf(ID_Input[0])

		if(ID_Input[0] == -1){
			alert('無開頭字母')
			return(false)
		}
		if(ID_Input[1]!=1 && ID_Input[1] !=2){
			alert('無性別')
		}

		var X2 = (10+ID_Input[0])%10
		var X1 = (10+ID_Input[0]-X2)/10
		var result = X1+X2*9

		for(var i=1; i<10; i++){
			var NumString = '0123456789'
			ID_Input[i]=NumString.indexOf(ID_Input[i])
			if (ID_Input[i]==-1) {
				alert('數字檢查錯誤')
				return(false)
			}
			else{
				result += ID_Input[i]*(9-i)
			}		
		}
		result += 1*ID_Input[9]
		if (result%10!=0) {
			alert('加總檢查錯誤')
			return(false)
		}
		return(true)
	}

	function checkdata(){
		if (!checkname()) {
			document.SPAD.SNAME.focus();
			return(false)
		}
		if(!checkID()){
			document.SPAD.SNAME.focus();
			return(false)
		}
		var username = document.SPAD.SNAME.value
		var usersex = ''
		if (document.SPAD.SNAME.value.charAt(1)=='1') {
			usersex ='先生'
		}
		else{
			usersex = '小姐'
		}

		var usermessage = username+usersex + '資料正確'

		alert(usermessage)
		return(true)

	}

	</script>
</head>
<body onload="document.SPAD.SNAME.focus()">
<form name="SPAD" method="POST" enctype="text/plain" onsubmit="return checkdata()">
	大名:
	<input type="text" name="SNAME" value="姓名">
	身分證:
	<input type="text" name="SID" value="身分證" maxlength=10>

	 <input type=submit value="傳送">

</form>

</body>
</html>