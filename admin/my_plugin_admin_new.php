<!-- این صفحه مربوط به وارد کردن نمره های جدید هست. -->


<?php

global $wpdb;
?>
<!-- <link rel="stylesheet" href="https://narvantech.ir/plugin/certificate/css/persianDatepicker-default.css"> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script src="https://narvantech.ir/plugin/certificate/js/persianDatepicker.js"></script>
<script src="https://narvantech.ir/plugin/certificate/js/persianDatepicker.min.js"></script> -->

<script type="text/javascript">
            $(function() {  
				$("#alwaysShow").persianDatepicker({alwaysShow:false});    
            });
        </script>
<div class="wrap">
<h1>فرم اطلاعات</h1>
<p id="MypluginFormMessage"></p>
<form name="registerCustomer" method="post" enctype="multipart/form-data" action="<?php echo plugins_url('../include/my_plugin_insert_to_db.php', __FILE__); ?>" onsubmit="return jsValidation.validation();">
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    scores id <!-- نام : -->
    </div>
    <div style="width: 70%;float:right">
        <input type="text" name="myPluginName" class="myPluginClsCss" id="myPluginIdName">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    courses name   <!-- نام خانوادگی: -->
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginFamily" class="myPluginClsCss" id="myPluginIdFamily">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    STD ID  <!-- شماره گواهینامه: -->
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginCert" class="myPluginClsCss" id="myPluginIdCert">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    courses term<!-- کد ملی: -->
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginMeli" class="myPluginClsCss" id="myPluginIdMeli">
    </div>
 </div>
 <!-- <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    شماره تماس:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginPhone" class="myPluginClsCss" id="myPluginIdPhone">
    </div>
 </div> -->
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
      Listening:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginListening" class="myPluginClsCss" id="myPluginIdListening">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    Speaking:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginSpeaking" class="myPluginClsCss" id="myPluginIdSpeaking">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
      Reading:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginReading" class="myPluginClsCss" id="myPluginIdReading">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
      Writing:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginWriting" class="myPluginClsCss" id="myPluginIdWriting">
    </div>
 </div>

 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
      Totalgrade:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginTotalgrade" class="myPluginClsCss" id="myPluginIdTotalgrade">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
      date:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginTotalgrade" class="myPluginClsCss" id="myPluginIdTotalgrade">
    </div>
 </div>
<!-- 
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
   تاریخ:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="myPluginDate" class="myPluginClsCss" id="alwaysShow">
    </div>
 </div> -->

 <!-- <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    تصویر گواهینامه:
    </div>
    <div style="width: 70%;float:right">
    <input type="file" name="myPluginPic" class="myPluginClsCss" id="myPluginIdPic">
    </div>
 </div> -->
 
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    </div>
    <div style="width: 70%;float:right">
    <input type="submit" name="myPluginSub" class="myPluginClsCss button button-primary button-large" id="myPluginSub" value="ثبت">
    </div>
 </div>
</form>
</div>