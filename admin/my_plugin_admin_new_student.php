<!-- اضافه کردن دانشجوی جدید -->
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
<form name="registerCustomer" method="post" enctype="multipart/form-data" action="<?php echo plugins_url('../include/my_plugin_insert_st_to_db.php', __FILE__); ?>" onsubmit="return jsValidation.validation();">
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    نام :
    </div>
    <div style="width: 70%;float:right">
        <input type="text" name="stName" class="myPluginClsCss" id="stIdName">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    نام خانوادگی:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="stFamily" class="myPluginClsCss" id="stIdFamily">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    کد ملی:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="stMeli" class="myPluginClsCss" id="stIdMeli">
    </div>
 </div>
 <!-- اینجا کد دانشجویی اضافه شده باید در دیتا بیس هم اضافه بشه -->
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    کد دانشجویی:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="stMeli" class="myPluginClsCss" id="stIdMeli">
    </div>
 </div>
  <!-- اینجا تاریخ تولد اضافه شده باید در دیتا بیس هم اضافه بشه -->

 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
تاریخ تولد:    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="stMeli" class="myPluginClsCss" id="stIdMeli">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    شماره تماس:
    </div>
    <div style="width: 70%;float:right">
    <input type="text" name="stPhone" class="myPluginClsCss" id="stIdPhone">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    تصویر دانشجو:
    </div>
    <div style="width: 70%;float:right">
    <input type="file" name="stPicStudent" class="myPluginClsCss" id="stIdPicStudent">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:30%;float:right">
    </div>
    <div style="width: 70%;float:right">
    <input type="submit" name="myPluginSub" class="myPluginClsCss button button-primary button-large" id="myPluginSub" value="ثبت">
    </div>
 </div>
</form>
</div>