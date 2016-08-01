<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=description content="">
    <meta name=author content="">
    <link rel=icon href=/Content/AssetsBS3/img/favicon.ico>
    <title>Add order</title>
    <link href="bootstrap/css/bootstrap.min.css" rel=stylesheet>
    <link href="normalize.css"   rel=stylesheet>
    <link href="add_order.css" rel=stylesheet>
    <script src="http://220.130.96.189/ncku_test/application/libraries/jquery/js/jquery-1.5.1.min.js"></script>
</head>
<script type="text/javascript">
  $(document).ready(function(){
        //遮罩
        for ( var i = 6 ; i <= 10 ; i++ ){
            set_disabled($("input[name^=info][id$=t][tabindex="+i+"]"));}
        
        function set_disabled(size){
                var s = size.attr("tabindex");
                if(size.val() == '')
                    $("input[tabindex="+s+"]").attr("disabled",true);
                else
                    $("input[tabindex="+s+"]").attr("disabled",false);
                size.attr("disabled",false);
                size.keyup(function (){ 
                    set_disabled(size); 
                });
        }
        //直接跳下一塊tab
        var Enter = "13";  
        $("input[tabindex=1]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=info\\[name\\]]").focus();});
        $("input[tabindex=2]").keydown(function(event){if(event.keyCode==Enter) $("input[name=body_size\\[neck\\]]").focus();});
        $("input[tabindex=3]").keydown(function(event){if(event.keyCode==Enter) $("input[name=suit_fabric\\[\\]]")[0].focus();});
        $("input[tabindex=4]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=shirting_fabric\\[\\]]")[0].focus();});
        $("input[tabindex=5]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=info\\[shirt\\]]").focus();});
        $("input[tabindex=6]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=info\\[jacket\\]]").focus();});
        $("input[tabindex=7]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=info\\[vest\\]]").focus();});
        $("input[tabindex=8]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=info\\[skirt\\]]").focus();});
        $("input[tabindex=9]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=info\\[pant\\]]").focus();});
        $("input[tabindex=10]").keydown(function(event) { if(event.keyCode==Enter) $("input[name=info\\[price\\]]").focus();});
        $("input[tabindex=13]").keydown(function(event) { if(event.keyCode==Enter) $("textarea[name=info\\[company_footnote\\]]").focus();});

        
        //乳點長 寬 前胸 後背 自動複製
        $("input[name=shirt\\[bust_length\\]]").keyup(function() {
            $("input[name$=\\[bust_length\\]]").val(this.value); });
        $("input[name=jacket\\[bust_length\\]]").keyup(function() {
            $("input[name=vest\\[bust_length\\]]").val(this.value); });

        $("input[name=shirt\\[bust_width\\]]").keyup(function() {
            $("input[name$=\\[bust_width\\]]").val(this.value); });
        $("input[name=jacket\\[bust_width\\]]").keyup(function() {
            $("input[name=vest\\[bust_width\\]]").val(this.value); });
        
        $("input[name=shirt\\[ACROSS_front\\]]").keyup(function() {
            $("input[name$=\\[ACROSS_front\\]]").val(this.value); });
        $("input[name=jacket\\[ACROSS_front\\]]").keyup(function() {
            $("input[name=vest\\[ACROSS_front\\]]").val(this.value); });

        $("input[name=shirt\\[ACROSS_back\\]]").keyup(function() {
            $("input[name$=\\[ACROSS_back\\]]").val(this.value); });
        $("input[name=jacket\\[ACROSS_back\\]]").keyup(function() {
            $("input[name=vest\\[ACROSS_back\\]]").val(this.value); });
    });  



</script>
<body>
    <div class="container">
        <div id="order" class="order" style="width:100%;padding:10px 0px 10px 0px">
            <form name="" method="" action="">
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
                                <label>流水號</label>
                            </td>
                            <td colspan="5">
                                <label for="company" >公司行號&單位</label>
                                <input tabindex="1" type="text" name="info[company]" id="company" style="width:77%" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6">
                                <label for="name">姓名</label>
                                <input tabindex="2" type="text" name="info[name]" id="name" style="width:15%" />
                                <label for="height">身高</label>
                                <input tabindex="2" type="text" name="info[height]" id="height" style="width:10%" />
                                <label for="weight">體重</label>
                                <input tabindex="2" type="text" name="info[weight]" id="weight" style="width:10%" />
                                <label for="phone">電話</label>
                                <input tabindex="2" type="text" name="info[phone]" id="phone" style="width:25%" />
                                <label for="male">性別</label>
                                <label for="male">男</label>
                                <input tabindex="2" type="radio" name="sex" id="male" />
                                <label for="female">女</label>
                                <input tabindex="2" type="radio" name="sex" id="female" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>各部人體尺寸</label>
                            </td>
                            <td colspan="5">
                                <label for="suit_fabric">西裝布版</label>
                                <input tabindex="4" type="text" name="suit_fabric[]" id="suit_fabric" style="width:16%" />
                                <input tabindex="4" type="text" name="suit_fabric[]" style="width:16%" />
                                <input tabindex="4" type="text" name="suit_fabric[]" style="width:16%" />
                                <input tabindex="4" type="text" name="suit_fabric[]" style="width:16%" />
                                <input tabindex="4" type="text" name="suit_fabric[]" style="width:16%" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[neck]" class="body_size">領圍</label>
                                <input tabindex="3" type="text" name="body_size[neck]" id="body_size[neck]" style="width:40%;" />
                            </td>
                            <td colspan="5">
                                <label for="shirting_fabric">襯衫布版</label>
                                <input tabindex="5" type="text" name="shirting_fabric[]" id="shirting_fabric" style="width:16%;" />
                                <input tabindex="5" type="text" name="shirting_fabric[]" style="width:16%;" />
                                <input tabindex="5" type="text" name="shirting_fabric[]" style="width:16%;" />
                                <input tabindex="5" type="text" name="shirting_fabric[]" style="width:16%;" />
                                <input tabindex="5" type="text" name="shirting_fabric[]" style="width:16%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[shoulder]" class="body_size">肩寬</label>
                                <input tabindex="3" type="text" name="body_size[shoulder]" id="body_size[shoulder]" style="width:40%;">
                            </td>
                            <td>
                                <label for="shirt">襯衫
                                    <input tabindex="6" type="text" name="info[shirt]" id="shirt" style="width:45%;"> 號</label>
                            </td>
                            <td>
                                <label for="jacket">外套
                                    <input tabindex="7" type="text" name="info[jacket]" id="jacket" style="width:45%;"> 號</label>
                            </td>
                            <td>
                                <label for="vest">背心
                                    <input tabindex="8" type="text" name="info[vest]" id="vest" style="width:45%;"> 號</label>
                            </td>
                            <td>
                                <label for="skirt">裙子
                                    <input tabindex="9" type="text" name="info[skirt]" id="skirt" style="width:45%;"> 號</label>
                            </td>
                            <td>
                                <label for="pant">褲子
                                    <input tabindex="10" type="text" name="info[pant]" id="pant" style="width:45%;"> 號</label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[upper_bust]">胸上圍</label>
                                <input tabindex="3" type="text" name="body_size[upper_bust]" id="body_size[upper_bust]" style="width:40%; margin-left:4px;">
                            </td>
                            <td>
                                <input tabindex="6" type="text" name="info[shirt_detail]" id="skirt_detail" style="width:70%;">
                                <input tabindex="6" type="text" name="info[shirtNum_detail] " id="skirtNum_detail" style="width:25% ;">
                            </td>
                            <td>
                                <input tabindex="7" type="text" name="info[jacket_detail]" id="jacket_detail" style="width:70%;">
                                <input tabindex="7" type="text" name="info[jacketNum_detail] " id="jacketNum_detail" style="width:25%;">
                            </td>
                            <td>
                                <input tabindex="8" type="text" name="info[vest_detail]" id="vest_detail" style="width:70%;">
                                <input tabindex="8" type="text" name="info[vestNum_detail] " id="vestNum_detail " style="width:25% ;">
                            </td>
                            <td>
                                <input tabindex="9" type="text" name="info[skirt_detail]" id="skirt_detail" style="width:70%;">
                                <input tabindex="9" type="text" name="info[skirtNum_detail] " id="skirtNum_detail" style="width:25%;">
                            </td>
                            <td>
                                <input tabindex="10" type="text" name="info[pant_detail]" id="pant_detail" style="width:70%;">
                                <input tabindex="10" type="text" name="info[pantNum_detail] " id="pantNum_detail" style="width:25%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[bust]" class="body_size">胸圍 </label>
                                <input tabindex="3" type="text" name="body_size[bust]" id="body_size[bust]" style="width:40%;">
                            </td>
                            <td>
                                <label for="shirt_length">衣長</label>
                                <input tabindex="6" type="text" name="shirt[length]" id="shirt_length" style="width:75%;">
                            </td>
                            <td>
                                <label for="jacket_length">衣長</label>
                                <input tabindex="7" type="text" name="jacket[length]" id="jacket_length" style="width:75%;">
                            </td>
                            <td>
                                <label for="vest_length">衣長</label>
                                <input tabindex="8" type="text" name="vest[length]" id="vest_length" style="width:75%;">
                            </td>
                            <td>
                                <label for="skirt_length">裙長</label>
                                <input tabindex="9" type="text" name="skirt[length]" id="skirt_length" style="width:70%;">
                            </td>
                            <td>
                                <label for="pant_length">褲長</label>
                                <input tabindex="10" type="text" name="pant[length]" id="pant_length" style="width:75%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[lower_bust]">胸下圍</label>
                                <input tabindex="3" type="text" name="body_size[lower_bust]" id="body_size[lower_bust]" style="width:40%; margin-left:4px;">
                            </td>
                            <td>
                                <label for="_sleeve">袖長</label>
                                <input tabindex="6" type="text" name="jacket[sleeve]" id="shirt_sleeve" style="width:75%;">
                            </td>
                            <td>
                                <label for="jacket_sleeve">袖長</label>
                                <input tabindex="7" type="text" name="jacket[sleeve]" id="jacket_sleeve" style="width:75%;">
                            </td>
                            <td>
                                <label for="vest_shoulder_point">肩點</label>
                                <input tabindex="8" type="text" name="vest[shoulder_point]" id="vest_shoulder_point" style="width:75%;">
                            </td>
                            <td>
                                <label for="skirt_waist">腰圍</label>
                                <input tabindex="9" type="text" name="skirt[waist]" id="skirt_waist" style="width:70%;">
                            </td>
                            <td>
                                <label for="pant_waist">腰圍</label>
                                <input tabindex="10" type="text" name="pant[waist]" id="pant_waist" style="width:75%;">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[waist]" class="body_size">腰圍 </label>
                                <input tabindex="3" type="text" name="body_size[waist]" id="body_size[waist]" style="width:40%;">
                            </td>
                            <td>
                                <label for="shirt_shoulder">肩寬</label>
                                <input tabindex="6" type="text" name="shirt[shoulder]" id="shirt_shoulder" style="width:75%;">
                                <label for="shirt_shoulder_front">肩前移</label>
                                <input tabindex="6" type="text" name="shirt[shoulder_front]" id="shirt_shoulder_front" style="width:65%;">
                            </td>
                            <td>
                                <label for="jacket_shoulder">肩寬</label>
                                <input tabindex="7" type="text" name="jacket[shoulder]" id="jacket_shoulder" style="width:75%;">
                                <label for="jacket_shoulder_front">肩前移</label>
                                <input tabindex="7" type="text" name="jacket[shoulder_front]" id="jacket_shoulder_front" style="width:65%;" />
                            </td>
                            <td>
                                <label for="vest_shoulder">肩寬</label>
                                <input tabindex="8" type="text" name="vest[shoulder]" id="vest_shoulder" style="width:75%;">
                                <label for="vest_shoulder_front">肩前移</label>
                                <input tabindex="8" type="text" name="vest[shoulder_front]" id="vest_shoulder_front" style="width:65%;" />
                            </td>
                            <td>
                                <label for="skirt_middle_hip">腹圍</label>
                                <input tabindex="9" type="text" name="skirt[middle_hip]" id="skirt_middle_hip" style="width:70%;" />
                            </td>
                            <td>
                                <label for="pant_middle_hip">腹圍</label>
                                <input tabindex="10" type="text" name="pant[middle_hip]" id="pant_middle_hip" style="width:75%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[belly]" class="body_size">肚圍 </label>
                                <input tabindex="3" type="text" name="body_size[belly]" id="body_size[belly]" style="width:40%;" />
                            </td>
                            <td>
                                <label for="shirt_bust">胸圍</label>
                                <input tabindex="6" type="text" name="shirt[bust]" id="shirt_bust" style="width:75%;" />
                            </td>
                            <td>
                                <label for="jacket_bust">胸圍</label>
                                <input tabindex="7" type="text" name="jacket[bust]" id="jacket_bust" style="width:75%;" />
                            </td>
                            <td>
                                <label for="vest_bust">胸圍</label>
                                <input tabindex="8" type="text" name="vest[bust]" id="vest_bust" style="width:75%;" />
                            </td>
                            <td>
                                <label for="skirt_hip">臀圍</label>
                                <input tabindex="9" type="text" name="skirt[hip]" id="skirt_hip" style="width:70%;" />
                            </td>
                            <td>
                                <label for="pant_hip">臀圍</label>
                                <input tabindex="10" type="text" name="pant[hip]" id="pant_hip" style="width:75%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[middle_hip]" class="body_size">腹圍 </label>
                                <input tabindex="3" type="text" name="body_size[middle_hip]" id="body_size[middle_hip]" style="width:40%;" />
                            </td>
                            <td>
                                <label for="shirt_bust_length">乳點長</label>
                                <input tabindex="6" type="text" name="shirt[bust_length]" id="shirt_bust_length" style="width:25%;" />
                                <label for="shirt_bust_width">寬</label>
                                <input tabindex="6" type="text" name="shirt[bust_width]" id="shirt_bust_width" style="width:24%;" />
                            </td>
                            <td>
                                <label for="jacket_bust_length">乳點長</label>
                                <input tabindex="7" type="text" name="jacket[bust_length]" id="jacket_bust_length" style="width:25%;" />
                                <label for="jacket_bust_width">寬</label>
                                <input tabindex="7" type="text" name="jacket[bust_width]" id="jacket_bust_width" style="width:24%;" />
                            </td>
                            <td>
                                <label for="vest_bust_length">乳點長</label>
                                <input tabindex="8" type="text" name="vest[bust_length]" id="vest_bust_length" style="width:25%;" />
                                <label for="vest_bust_width">寬</label>
                                <input tabindex="8" type="text" name="vest[bust_width]" id="vest_bust_width" style="width:24%;" />
                            </td>
                            <td>
                                <label for="skirt_sid">裙擺</label>
                                <input tabindex="9" type="text" name="skirt[side]" id="skirt_side" style="width:70%;" />
                            </td>
                            <td>
                                <label for="pant_cortch">大腿圍</label>
                                <input tabindex="10" type="text" name="pant[crotch]" id="pant_crotch" style="width:64%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[hip]" class="body_size">臀圍 </label>
                                <input tabindex="3" type="text" name="body_size[hip]" id="body_size[hip]" style="width:40%;" />
                            </td>
                            <td>
                                <label for="shirt_waist">腰圍</label>
                                <input tabindex="6" type="text" name="shirt[waist]" id="shirt_bust" style="width:75%;" />
                            </td>
                            <td>
                                <label for="jacket_waist">腰圍</label>
                                <input tabindex="7" type="text" name="jacket[waist]" id="jacket_waist" style="width:75%;" />
                            </td>
                            <td>
                                <label for="vest_waist">腰圍</label>
                                <input tabindex="8" type="text" name="vest[waist]" id="vest_waist" style="width:75%;" />
                            </td>
                            <td rowspan="2">
                                <input tabindex="9" type="text" name="skirt[hip]" id="skirt_hip" style="width:50%;">
                                <label style="font-size:10px">0:不顯示</label>
                                <label style="font-size:10px">1:直裙</label>
                                <label style="font-size:10px">2:西裙</label>
                                <label style="font-size:10px">3:小A裙</label>
                            </td>
                            <td rowspan="2">
                                <label for="pant_full_rise">褲全檔</label>
                                <input tabindex="10" type="text" name="pant[full_rise]" id="pant_full_rise" style="width:65%;">
                                <label for="pant_front_rise">前檔</label>
                                <input tabindex="10" type="text" name="pant[front_rise]" id="pant_front_rise" style="width:25%;">
                                <label for="pant_back_rise">後檔</label>
                                <input tabindex="10" type="text" name="pant[back_rise]" id="pant_back_rise" style="width:25%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[hindquarter]">臀腿圍</label>
                                <input tabindex="3" type="text" name="body_size[hindquarter]" id="body_size[hindquarter]" style="width:40%; margin-left:4px;"/>
                            </td>
                            <td>
                                <label for="shirt_middle_hip">腹圍</label>
                                <input tabindex="6" type="text" name="shirt[middle_hip]" id="shirt_middle_hip" style="width:75%;" />
                            </td>
                            <td>
                                <label for="jacket_middle_hip">腹圍</label>
                                <input tabindex="7" type="text" name="jacket[middle_hip]" id="jacket_middle_hip" style="width:75%;" />
                            </td>
                            <td>
                                <label for="vest_middle_hip">腹圍</label>
                                <input tabindex="8" type="text" name="vest[middle_hip]" id="vest_middle_hip" style="width:75%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[crotch]">大腿圍</label>
                                <input tabindex="3" type="text" name="body_size[crotch]" id="body_size[crotch]" style="width:40%; margin-left:4px;" />
                            </td>
                            <td>
                                <label for="shirt_hip">臀圍</label>
                                <input tabindex="6" type="text" name="shirt[hip]" id="shirt_hip" style="width:75%;" />
                            </td>
                            <td>
                                <label for="jacket_hip">臀圍</label>
                                <input tabindex="7" type="text" name="jacket[hip]" id="jacket_hip" style="width:75%;" />
                            </td>
                            <td>
                                <label for="vest_hip">臀圍</label>
                                <input tabindex="8" type="text" name="vest[hip]" id="vest_hip" style="width:75%;" />
                            </td>
                            <td>
                                <input tabindex="9" type="text" name="skirt[waistband]" id="skirt_waistband" style="width:50%;">
                                <label style="font-size:10px">0:不顯示</label>
                                <label style="font-size:10px">1:要腰頭</label>
                                <label style="font-size:10px">2:否</label>
                            </td>
                            <td>
                                <label for="pant_knee">膝圍</label>
                                <input tabindex="10" type="text" name="pant[knee]" id="pant_knee" style="width:75%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[under_crotch]">大腿中</label>
                                <input tabindex="3" type="text" name="body_size[under_crotch]" id="body_size[under_crotch]" style="width:40%; margin-left:4px;" />
                            </td>
                            <td>
                                <label for="shirt_front_amhole">袖襱前</label>
                                <input tabindex="6" type="text" name="shirt[front_amhole]" id="shirt_front_amhole" style="width:25%;" />
                                <label for="shirt_behind_amhole">寬</label>
                                <input tabindex="6" type="text" name="shirt[behind_amhole]" id="shirt_behind_amhole" style="width:24%;" />
                            </td>
                            <td>
                                <label for="jacket_front_amhole">袖襱前</label>
                                <input tabindex="7" type="text" name="jacket[front_amhole]" id="jacket_front_amhole" style="width:25%;" />
                                <label for="jacket_behind_amhole">寬</label>
                                <input tabindex="7" type="text" name="jacket[behind_amhole]" id="jacket_behind_amhole" style="width:24%;" />
                            </td>
                            <td>
                                <label for="vest_front_amhole">袖襱前</label>
                                <input tabindex="8" type="text" name="vest[front_amhole]" id="vest_front_amhole" style="width:25%;" />
                                <label for="vest_behind_amhole">寬</label>
                                <input tabindex="8" type="text" name="vest[behind_amhole]" id="vest_behind_amhole" style="width:24%;" />
                            </td>
                            <td rowspan="2">
                                <input tabindex="9" type="text" name="skirt[side_style]" id="skirt_side_style" style="width:50%;">
                                <label style="font-size:10px">0:不顯示</label>
                                <label style="font-size:10px">1:雙邊</label>
                                <label style="font-size:10px">2:後中</label>
                                <label style="font-size:10px">3:無</label>
                            </td>
                            <td>
                                <label for="pant_foot">腳圍</label>
                                <input tabindex="10" type="text" name="pant[foot]" id="pant_foot" style="width:75%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[upper_knee]">膝上圍</label>
                                <input tabindex="3" type="text" name="body_size[upper_knee]" id="body_size[upper_knee]" style="width:40%; margin-left:4px;" />
                            </td>
                            <td>
                                <label for="shirt_across_front">前胸</label>
                                <input tabindex="6" type="text" name="shirt[across_front]" id="shirt_across_front" style="width:25%;" />
                                <label for="shirt_across_back">後背</label>
                                <input tabindex="6" type="text" name="shirt[across_back]" id="shirt_across_back" style="width:24%;" />
                                <td>
                                    <label for="jacket_across_front">前胸</label>
                                    <input tabindex="7" type="text" name="jacket[across_front]" id="jacket_across_front" style="width:25%;" />
                                    <label for="jacket_across_back">後背</label>
                                    <input tabindex="7" type="text" name="jacket[across_back]" id="jacket_across_back" style="width:24%;" />
                                </td>
                                <td>
                                    <label for="vest_across_front">前胸</label>
                                    <input tabindex="8" type="text" name="vest[across_front]" id="vest_across_front" style="width:25%;" />
                                    <label for="vest_across_back">後背</label>
                                    <input tabindex="8" type="text" name="vest[across_back]" id="vest_across_back" style="width:24%;" />
                                </td>
                                <td>
                                    <input tabindex="10" type="text" name="skirt[side_style]" id="skirt_side_style" style="width:50%;">
                                    <label style="font-size:10px">0:不顯示</label>
                                    <label style="font-size:10px">1:直筒</label>
                                    <label style="font-size:10px">2:小直筒</label>
                                    <label style="font-size:10px">3:鉛筆</label>
                                </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[back]" class="body_size">背長 </label>
                                <input tabindex="3" type="text" name="body_size[back]" id="body_size[back]" style="width:40%;" />
                            </td>
                            <td>
                                <label for="shirt_unit_price">單價</label>
                                <input tabindex="6" type="text" name="shirt[unit_price]" id="shirt_unit_price" style="width:75%;" />
                            </td>
                            <td>
                                <label for="jacket_unit_price">單價</label>
                                <input tabindex="7" type="text" name="jacket[unit_price]" id="jacket_unit_price" style="width:75%;" />
                            </td>
                            <td>
                                <label for="vest_unit_price">單價</label>
                                <input tabindex="8" type="text" name="vest[bunit_price]" id="vest_unit_price" style="width:75%;" />
                            </td>
                            <td>
                                <label for="skirt_unit_price">單價</label>
                                <input tabindex="9" type="text" name="skirt[hip]" id="skirt_unit_price" style="width:70%;" />
                            </td>
                            <td>
                                <label for="pant_unit_price">單價</label>
                                <input tabindex="10" type="text" name="pant[unit_price]" id="pant_unit_price" style="width:75%;" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[armhole]" class="body_size">袖擺 </label>
                                <input tabindex="3" type="text" name="body_size[armhole]" id="body_size[armhole]" style="width:40%;" />
                            </td>
                            <td colspan="3">
                            </td>
                            <td>
                                <label for="info_price">售價</label>
                                <input tabindex="11" type="text" name="info[price]" id="info_price" style="width:70%;" />
                            </td>
                            <td>
                                <label for="info_deposit">訂金</label>
                                <input tabindex="12" type="text" name="info[deposit]" id="info_deposit" style="width:75%;" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="6" style="text-align:center;">售價、訂金會加總到總售價及總訂金。</td>
                        </tr>
                        <tr>
                            <td>
                                <label for="body_size[arm]">手臂圍</label>
                                <input tabindex="3" type="text" name="body_size[arm]" id="body_size[arm]" style="width:40%; margin-left:4px;" />
                            </td>
                            <td colspan="5">
                                肩厚
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="1" />、 豐滿
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="2" />、 有肚
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="3" />、 腹凸
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="4" />、 臀翹
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="5" />、 斜肩
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="6" />、 胸肌
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="7" />、 折腰
                                <input tabindex="13" type="checkbox" name="bodily_form[]" value="8" />
                            </td>
                        </tr>
                        <tr>
                            <td>公司備註</td>
                            <td colspan="5">
                                <textarea tabindex="14" name="info[company_footnote]" rows="1" style="width:95%;resize:none;"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>廠商備註</td>
                            <td colspan="5">
                                <textarea tabindex="15" name="info[factory_footnote]" rows="1" style="width:95%;resize:none;"></textarea>
                            </td>
                        
                        </tr>

                    </tbody>
                </table>
            </form>
            <div id="add_order_button">
            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">送出</button>
            	<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">清除</button>
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
