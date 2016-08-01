<!DOCTYPE html>
<html lang="zh-Hant">

<head>
<meta charset="utf-8" />
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=viewport content="width=device-width, initial-scale=1">
<meta name=description content="">
<meta name=author content="">
<title>Add order</title>
<script src="jquery-2.2.0.min.js"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="add_order.js"></script>
<link href="bootstrap/css/bootstrap.min.css" rel=stylesheet>
<link href="normalize.css" rel=stylesheet>
<link href="add_order.css" rel=stylesheet>
</head>

<body>
<div class="container">
<div id="order" class="order" style="width:100%;padding:10px 0px 10px 0px">
<form id="order_information" method="post" action="">
<table class="input_table">
                    <thead>
                        <tr>
                            <th width="12%"></th>
                            <th width="18%"></th>
                            <th width="18%"></th>
                            <th width="18%"></th>
                            <th width="16%"></th>
                            <th width="19%"></th>
                        </tr>
                    </thead>
<tbody>
<tr>
    <td>
        <label for="Serial">流水號</label>
    </td>
    <td colspan="5">
        <label for="Company">公司行號&單位</label>
        <input type="text" name="Company" id="Company" style="width:77%" />
    </td>
</tr>
<tr>
    <td colspan="6">
        <label for="Customer_Name">姓名</label>
        <input type="text" name="Customer_Name" id="Customer_Name" style="width:15%"/>

        <label for="Height">身高</label>
        <input type="text" name="Height" id="Height" style="width:10%"/>

        <label for="Weight">體重</label>
        <input type="text" name="Weight" id="Weight" style="width:10%"/>

        <label for="Customer_Phone">電話</label>
        <input type="text" name="Customer_Phone" id="Customer_Phone" style="width:25%"/>

        <label >性別</label>
        <label >男</label>
        <input type="radio" name="Sex_ID[]" id="Sex_ID[]" value="1" />
        <label >女</label>
        <input type="radio" name="Sex_ID[]" id="Sex_ID[]" value="2" />
    </td>
</tr>
<tr>
    <td>
        <label for="Body_Size">各部位人體尺寸</label>
    </td>
    <td colspan="5">
        <label>西裝布版</label> 
                <input type="text" name="Suit_Fabric_1" id="Suit_Fabric_1" style="width:16%">
                <input type="text" name="Suit_Fabric_2" id="Suit_Fabric_2" style="width:16%">
                <input type="text" name="Suit_Fabric_3" id="Suit_Fabric_3" style="width:16%">
                <input type="text" name="Suit_Fabric_4" id="Suit_Fabric_4" style="width:16%">
                <input type="text" name="Suit_Fabric_5" id="Suit_Fabric_5" style="width:16%">
    </td>        
</tr>

<tr>
    <td>
        <label for="Neck" class="body_size" ">領圍</label>
            <input type="text" name="Neck" id="Neck" style="width:35%">
    </td>
    <td colspan="5">
        <label>襯衫布版</label> 
            <input type="text" name="Shirting_Fabric_1" id="Shirting_Fabric_1" style="width:16%">
            <input type="text" name="Shirting_Fabric_2" id="Shirting_Fabric_2" style="width:16%">
            <input type="text" name="Shirting_Fabric_3" id="Shirting_Fabric_3" style="width:16%">
            <input type="text" name="Shirting_Fabric_4" id="Shirting_Fabric_4" style="width:16%">
            <input type="text" name="Shirting_Fabric_5" id="Shirting_Fabric_5" style="width:16%">
    </td>
</tr>
<tr>
    <td>
        <label for="Shoulder" class="body_size">肩寬</label>
            <input type="text" name="Shoulder" id="Shoulder" style="width:35%;">
    </td>
    <td>
        <label for="Shirt_Size">襯衫
            <input type="text" name="Shirt_Size" id="Shirt_Size" style="width:45%;"> 號</label>
    </td>
    <td>
        <label for="Jacket_Size">外套
            <input type="text" name="Jacket_Size" id="Jacket_Size" style="width:45%;"> 號</label>
    </td>
    <td>
        <label for="Vest_Size">背心
            <input type="text" name="Vest_Size" id="Vest_Size" style="width:45%;"> 號</label>
    </td>
    <td>
        <label for="Skirt_Size">裙子
            <input type="text" name="Skirt_Size" id="Skirt_Size" style="width:45%;"> 號</label>
    </td>
    <td>
        <label for="Pant_Size">褲子
            <input type="text" name="Pant_Size" id="Pant_Size" style="width:45%;"> 號</label>
    </td>
</tr>
<tr>
    <td>
        <label for="Upper_Bust" class="body_size">胸上圍</label>
            <input type="text" name="Upper_Bust" id="Upper_Bust" style="width:36%; ; margin-left:12.5px;">
    </td>
    <td>
        <label for="Shirt_Note"></label>
            <input type="text" name="Shirt_Note" id="Shirt_Note" style="width:65%"; ">
        <label for="Shirt_Amount"></label>
            <input type="text" name="Shirt_Amount" id="Shirt_Amount" style="width:25%"; ">
    </td>
    <td>
        <label for="Jacket_Note"></label>                    
            <input type="text" name="Jacket_Note" id="Jacket_Note" style="width:65%"; ">
        <label for="Jacket_Amount"></label>    
            <input type="text" name="Jacket_Amount" id="Jacket_Amount" style="width:25%"; ">
    </td>
    <td>
        <label for="Vest_Note"></label>
            <input type="text" name="Vest_Note" id="Vest_Note" style="width:65%"; ">
        <label for="Vest_Amount"></label>    
            <input type="text" name="Vest_Amount" id="Vest_Amount" style="width:25%"; ">
    </td>
    <td>
        <label for="Skirt_Note"></label>    
            <input type="text" name="Skirt_Note" id="Skirt_Note" style="width:65%"; ">
        <label for="Skirt_Amount"></label>
            <input type="text" name="Skirt_Amount" id="Skirt_Amount" style="width:25%"; ">
    </td>
    <td>
        <label for="Pant_Note"></label>    
            <input type="text" name="Pant_Note" id="Pant_Note" style="width:65%"; ">
        <label for="Pant_Amount"></label>
            <input type="text" name="Pant_Amount" id="Pant_Amount" style="width:25%"; ">
    </td>
</tr>
<tr>
    <td>
        <label for="Bust" class="body_size">胸圍 </label>
            <input type="text" name="Bust" id="Bust" style="width:35%;">
    </td>
    <td>
        <label for="Shirt_Length">衣長</label>
            <input type="text" name="Shirt_Length" id="Shirt_Length" style="width:75%;">
    </td>
    <td>
        <label for="Jacket_Length">衣長</label>
            <input type="text" name="Jacket_Length" id="Jacket_Length" style="width:75%;">
    </td>
    <td>
        <label for="Vest_Length">衣長</label>
            <input type="text" name="Vest_Length" id="Vest_Length" style="width:75%;">
    </td>
    <td>
        <label for="Skirt_Length">裙長</label>
            <input type="text" name="Skirt_Length" id="Skirt_Length" style="width:73%;">
    </td>
    <td>
        <label for="Pant_Length">褲長</label>
            <input type="text" name="Pant_Length" id="Pant_Length" style="width:75%;">
    </td>
</tr>

<tr>
    <td>
        <label for="Lower_Bust" class="body_size">胸下圍</label>
            <input type="text" name="Lower_Bust" id="Lower_Bust" style="width:36%; ; margin-left:12.5px;">
    </td>
    <td>
        <label for="Shirt_Sleeve">袖長</label>
            <input type="text" name="Shirt_Sleeve" id="Shirt_Sleeve" style="width:75%;">
    </td>
    <td>
        <label for="Jacket_Sleeve">袖長</label>
            <input type="text" name="Jacket_Sleeve" id="Jacket_Sleeve" style="width:75%;">
    </td>
    <td>
        <label for="Vest_Shoulder_Point">肩寬</label>
            <input type="text" name="Vest_Shoulder_Point" id="Vest_Shoulder_Point" style="width:75%;">
    </td>
    <td>
        <label for="Skirt_Waist">腰圍</label>
            <input type="text" name="Skirt_Waist" id="Skirt_Waist" style="width:73%;">
    </td>
    <td>
        <label for="Pant_Waist">腰圍</label>
            <input type="text" name="Pant_Waist" id="Pant_Waist" style="width:75%;">
    </td>
</tr>
<tr>
    <td>
        <label for="Waist" class="body_size">腰圍 </label>
            <input type="text" name="Waist" id="Waist" style="width:35%;">
    </td>
    <td>
        <label for="Shirt_Shoulder">肩寬</label>
            <input type="text" name="Shirt_Shoulder" id="Shirt_Shoulder" style="width:75%;">
        <label for="Shirt_Shoulder_Front">肩前移</label>
            <input type="text" name="Shirt_Shoulder_Front" id="Shirt_Shoulder_Front" style="width:65%;">
    </td>
    <td>
        <label for="Jacket_Shoulder">肩寬</label>
            <input type="text" name="Jacket_Shoulder" id="Jacket_Shoulder" style="width:75%;">
        <label for="Jacket_Shoulder_Front">肩前移</label>
            <input type="text" name="Jacket_Shoulder_Front" id="Jacket_Shoulder_Front" style="width:65%;">
    </td>
    <td>
        <label for="Vest_Shoulder">肩寬</label>
            <input type="text" name="Vest_Shoulder" id="Vest_Shoulder" style="width:75%;">
        <label for="Vest_Shoulder_Front">肩前移</label>
            <input type="text" name="Vest_Shoulder_Front" id="Vest_Shoulder_Front" style="width:65%;">
    </td>
    <td>
        <label for="Skirt_Middle_Hip">腹圍</label>
            <input type="text" name="Skirt_Middle_Hip" id="Skirt_Middle_Hip" style="width:73%;">
    </td>
    <td>
        <label for="Pant_Middle_Hip">腹圍</label>
            <input type="text" name="Pant_Middle_Hip" id="Pant_Middle_Hip" style="width:75%;">
    </td>
</tr>
<tr>
    <td>
        <label for="Belly" class="body_size">肚圍 </label>
            <input type="text" name="Belly" id="Belly" style="width:35%;">
    </td>
    <td>
        <label for="Shirt_Bust">胸圍</label>
            <input type="text" name="Shirt_Bust" id="Shirt_Bust" style="width:75%;">
    </td>
    <td>
        <label for="Jacket_Bust">胸圍</label>
            <input type="text" name="Jacket_Bust" id="Jacket_Bust" style="width:75%;">
    </td>
    <td>
        <label for="Vest_Bust">胸圍</label>
            <input type="text" name="Vest_Bust" id="Vest_Bust" style="width:75%;">
    </td>
    <td>
        <label for="Skirt_Hip">臀圍</label>
            <input type="text" name="Skirt_Hip" id="Skirt_Hip" style="width:73%;">
    </td>
    <td>
        <label for="Pant_Hip">臀圍</label>
            <input type="text" name="Pant_Hip" id="Pant_Hip" style="width:75%;">
    </td>
</tr>
<tr>
    <td>
        <label for="Middle_Hip" class="body_size">腹圍</label>
            <input type="text" name="Middle_Hip" id="Middle_Hip]" style="width:35%;">
    </td>
    <td>
        <label for="Shirt_Bust_Length">乳點長</label>
            <input type="text" name="Shirt_Bust_Length" id="Shirt_Bust_Length" style="width:25%;">
        <label for="Shirt_Bust_Width">寬</label>
            <input type="text" name="Shirt_Bust_Width" id="Shirt_Bust_Width" style="width:24%;">
    </td>
    <td>
        <label for="Jacket_Bust_Length">乳點長</label>
            <input type="text" name="Jacket_Bust_Length" id="Jacket_Bust_Length" style="width:25%;">
        <label for="Jacket_Bust_Width">寬</label>
            <input type="text" name="Jacket_Bust_Width" id="Jacket_Bust_Width" style="width:24%;">
    </td>
    <td>
        <label for="Vest_Bust_Length">乳點長</label>
            <input type="text" name="Vest_Bust_Length" id="Vest_Bust_Length" style="width:25%;">
        <label for="Vest_Bust_Width">寬</label>
            <input type="text" name="Vest_Bust_Width" id="Vest_Bust_Width" style="width:24%;">
    </td>
    <td>
        <label for="Skirt_Side">裙擺</label>
            <input type="text" name="Skirt_Side" id="Skirt_Side" style="width:73%;">
    </td>
   <td>
        <label for="Pant_Crotch">大腿中</label>
            <input type="text" name="Pant_Crotch" id="Pant_Crotch" style="width:75%;">
    </td>
</tr>
<tr>
    <td>
        <label for="Hip" class="body_size">臀圍 </label>
            <input type="text" name="Hip" id="Hip" style="width:35%;">
    </td>
    <td>
        <label for="Shirt_Waist">腰圍</label>
            <input type="text" name="Shirt_Waist" id="Shirt_Waist" style="width:75%;">
    </td>
    <td>
        <label for="Jacket_Waist">腰圍</label>
            <input type="text" name="Jacket_Waist" id="Jacket_Waist" style="width:75%;">
    </td>
    <td>
        <label for="Vest_Waist">腰圍</label>
            <input type="text" name="Vest_Waist" id="Vest_Waist" style="width:75%;">
    </td>
    <td rowspan="2">
        <label for="Skirt_Style_ID"></label>            
            <input type="text" name="Skirt_Style_ID" id="Skirt_Style_ID" style="width:50%;"><br/>
                <label style="font-size:10px">0:不顯示</label>
                <label style="font-size:10px">1:直裙</label>
                <label style="font-size:10px">2:西裙</label>
                <label style="font-size:10px">3:小A裙</label>
    </td>

    <td rowspan="2">
        <label for="Pant_Full_Rise">褲全檔</label>
            <input type="text" name="Pant_Full_Rise" id="Pant_Full_Rise" style="width:65%;">
        <label for="Pant_Front_Rise">前檔</label>
            <input type="text" name="Pant_Front_Rise" id="Pant_Front_Rise" style="width:25%;">
        <label for="Pant_Back_Rise">後檔</label>
            <input type="text" name="Pant_Back_Rise" id="Pant_Back_Rise" style="width:25%;">
    </td>
</tr>
<tr>
    <td>
        <label for="Hindquarter" class="body_size">臀腿圍</label>
            <input type="text" name="Hindquarter" id="Hindquarter" style="width:36%; ; margin-left:12.5px;">
    </td>
    <td>
        <label for="Shirt_Middle_Hip">腹圍</label>
            <input type="text" name="Shirt_Middle_Hip" id="Shirt_Middle_Hip" style="width:75%;">
    </td>
    <td>
        <label for="Jacket_Middle_Hip">腹圍</label>
            <input type="text" name="Jacket_Middle_Hip" id="Jacket_Middle_Hip" style="width:75%;">
    </td>
    <td>
        <label for="Vest_Middle_Hip">腹圍</label>
            <input type="text" name="Vest_Middle_Hip" id="Vest_Middle_Hip" style="width:75%;">
    </td>                       
</tr>
<tr>
    <td>
        <label for="Crotch" class="body_size">大腿圍</label><input type="text" name="Crotch" id="Crotch" style="width:36%; ; margin-left:12.5px;">
    </td>
    <td>
        <label for="Shirt_Hip">臀圍</label>
            <input type="text" name="Shirt_Hip" id="Shirt_Hip" style="width:75%;">
    </td>
    <td>
        <label for="Jacket_Hip">臀圍</label>
            <input type="text" name="Jacket_Hip" id="Jacket_Hip" style="width:75%;">
    </td>
    <td>
        <label for="Vest_Hip">臀圍</label>
            <input type="text" name="Vest_Hip" id="Vest_Hip" style="width:75%;">
    </td>
    <td>
        <label for="Skirt_Waistbond_ID"></label>
            <input type="text" name="Skirt_Waistbond_ID" id="Skirt_Waistbond_ID" style="width:50%;"><br/>
                <label style="font-size:10px">0:不顯示</label>
                <label style="font-size:10px">1:要腰頭</label>
                <label style="font-size:10px">2:否</label>
    </td>                       
    <td>
        <label for="Pant_Knee" >膝圍</label>
            <input type="text" name="Pant_Knee" id="Pant_Knee" style="width:75%;">
    </td>
</tr>
<tr>
    <td>
        <label for="Under_Crotch" class="body_size">大腿中</label>
            <input type="text" name="Under_Crotch" id="Under_Crotch" style="width:36%; ; margin-left:12.5px;">
    </td>
    <td>
        <label for="Shirt_Front_Amhole">袖襱前</label>
            <input type="text" name="Shirt_Front_Amhole" id="Shirt_Front_Amhole" style="width:25%;">
        <label for="Shirt_Behind_Amhole">後</label>
            <input type="text" name="Shirt_Behind_Amhole" id="Shirt_Behind_Amhole" style="width:24%;">
    </td>
    <td>
        <label for="Jacket_Front_Amhole">袖襱前</label>
            <input type="text" name="Jacket_Front_Amhole" id="Jacket_Front_Amhole" style="width:25%;">
        <label for="Jacket_Behind_Amhole">後</label>
            <input type="text" name="Jacket_Behind_Amhole" id="Jacket_Behind_Amhole" style="width:24%;">
    </td>
    <td>
        <label for="Vest_Front_Amhole">袖襱前</label>
            <input type="text" name="Vest_Front_Amhole" id="Vest_Front_Amhole" style="width:25%;">
        <label for="Vest_Behind_Amhole">後</label>
            <input type="text" name="Vest_Behind_Amhole" id="Vest_Behind_Amhole" style="width:24%;">
    </td>                       
    <td rowspan="2">
        <label for="Skirt_Side_Type_ID"></label>    
            <input type="text" name="Skirt_Side_Type_ID" id="Skirt_Side_Type_ID" style="width:50%;"><br/>
                <label style="font-size:10px">0:不顯示</label>
                <label style="font-size:10px">1:雙邊</label>
                <label style="font-size:10px">2:後中</label>
                <label style="font-size:10px">3:無</label>
    </td>                             
    <td>
        <label for="Pant_Foot">腳圍</label>    
            <input type="text" name="Pant_Foot" id="Pant_Foot" style="width:75%;">              
    </td>
</tr>
<tr>
    <td>
        <label for="Upper_Knee" class="body_size">膝上圍</label>
            <input type="text" name="Upper_Knee" id="Upper_Knee" style="width:36%; ; margin-left:12.5px;">
    </td>
    <td>
        <label for="Shirt_Across_Front">前胸</label>
            <input type="text" name="Shirt_Across_Front" id="Shirt_Across_Front" style="width:25%;">
        <label for="Shirt_Across_Back">後背</label>
            <input type="text" name="Shirt_Across_Back" id="Shirt_Across_Back" style="width:24%;">                      
    <td>
        <label for="Jacket_Across_Front">前胸</label>
            <input type="text" name="Jacket_Across_Front" id="Jacket_Across_Front" style="width:25%;">
        <label for="Jacket_Across_Back">後背</label>
            <input type="text" name="Jacket_Across_Back" id="Jacket_Across_Back" style="width:24%;">
    </td>
    <td>
        <label for="Vest_Across_Front">前胸</label>
            <input type="text" name="Vest_Across_Front" id="Vest_Across_Front" style="width:25%;">
        <label for="Vest_Across_Back">後背</label>
            <input type="text" name="Vest_Across_Back" id="Vest_Across_Back" style="width:24%;">
    </td>
    <td>
        <label for="Pant_Style_ID"></label>    
            <input type="text" name="Pant_Style_ID" id="Pant_Style_ID" style="width:50%;"><br/>
                <label style="font-size:10px">0:不顯示</label>
                <label style="font-size:10px">1:直筒</label>
                <label style="font-size:10px">2:小直筒</label>
                <label style="font-size:10px">3:鉛筆</label>           
    </td>
</tr>
<tr>
    <td>
        <label for="Back" class="body_size">背長</label>
            <input type="text" name="Back" id="Back" style="width:35%;">
    </td>
    <td>
        <label for="Shirt_Unit_Price">單價</label>
            <input type="text" name="Shirt_Unit_Price" id="Shirt_Unit_Price" style="width:75%;">
    </td>
    <td>
        <label for="Jacket_Unit_Price">單價</label>
            <input type="text" name="Jacket_Unit_Price" id="Jacket_Unit_Price" style="width:75%;">
    </td>
    <td>
        <label for="Vest_Unit_Price">單價</label>
            <input type="text" name="Vest_Unit_Price" id="Vest_Unit_Price" style="width:75%;">
    </td>
    <td>
        <label for="Skirt_Unit_Price">單價</label>
            <input type="text" name="Skirt_Unit_Price" id="Skirt_Unit_Price" style="width:73%;">
    </td>
    <td>
        <label for="Pant_Unit_Price">單價</label>
            <input type="text" name="Pant_Unit_Price" id="Pant_Unit_Price" style="width:73%;">
    </td>
</tr>
<tr>
    <td>
        <label for="Armhole" class="body_size">袖擺</label>
            <input type="text" name="Armhole" id="Armhole" style="width:35%;">
    </td>
    <td colspan="3">
        <label> </label>            
    </td>
    <td>
        <label for="Serial_Price">售價</label>
            <input type="text" name="Serial_Price" id="Serial_Price" style="width:73%;">
    </td>
    <td>
        <label for="Serial_Deposit">訂金</label>
            <input type="text" name="Serial_Deposit" id="Serial_Deposit" style="width:75%;">
    </td>
</tr>
<tr>
    <td colspan="6" style="text-align:center;">
        <label>售價、訂金會加總到總售價及總訂金。</label>
    </td>
</tr>
<tr>
    <td>
        <label for="Arm" class="body_size">手臂圍</label>
            <input type="text" name="Arm" id="Arm" style="width:36%; ; margin-left:12.5px;"/>
    </td>
    <td colspan="5">
        <label>肩厚</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="1" />
        <label>豐滿</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="2" />
        <label>有肚</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="3" />
        <label>腹凸</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="4" />
        <label>臀翹</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="5" />
        <label>斜肩</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="6" />
        <label>胸肌</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="7" />
        <label>折腰</label> 
            <input tabindex="12" type="checkbox" name="Order_Bodily_Form_Style_ID[]" id="Order_Bodily_Form_Style_ID[]" value="8" />
    </td>
</tr>
<tr>
    <td>
        <label for="Company_Footnote">公司備註</label> 
    </td>
        <td colspan="5">
            <input type="text"  name="Company_Footnote" id="Company_Footnote"  style="width:95%;resize:none;"/>
        </td>
</tr>
<tr>
    <td>
        <label for="Factory_Footnote">廠商備註</label> 
    </td>
        <td colspan="5">
            <input type="text"  name="Factory_Footnote" id="Factory_Footnote"  style="width:95%;resize:none;"/>
        </td>
</tr>

</tbody>    
</table>
    <input type="submit" value="新增流水單"/>
    <div id="msg" class="box"></div>    
</form>
</div>
</div>        
    </div>
    <div class="Mastfoot">
        <!--置底文字-->
        <p> Copyright© 2016 Mirrorworld Inc. Aii Rights Reserved. </p>
    </div>
</body>
</html>