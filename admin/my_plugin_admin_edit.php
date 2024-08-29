<!-- ویرایش اطلاعات مربوط به نمرات -->
<?php
if(isset($_GET['id'])){
    global $wpdb;
    $my_plugin_table_name = $wpdb->prefix . 'mycertificate';
    $id = $_GET['id'];
    $result = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name . " WHERE id=".$id);
?>
<link rel="stylesheet" href="https://narvantech.ir/plugin/certificate/css/persianDatepicker-default.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://narvantech.ir/plugin/certificate/js/persianDatepicker.js"></script>
<script src="https://narvantech.ir/plugin/certificate/js/persianDatepicker.min.js"></script>
<script type="text/javascript">
            $(function() {
               $("#alwaysShow").persianDatepicker({alwaysShow:false});  
            });
        </script>
        <div class="wrap">
    <h1>فرم اطلاعات</h1>
    <p id="MypluginFormMessage"></p>
    <form name="registerCustomer" method="post" enctype="multipart/form-data" action="<?php echo plugins_url('../include/my_plugin_update_to_db.php', __FILE__); ?>" onsubmit="return jsValidation.validation();">
     <div style="width:32%;padding-top:45px">
     <input type="hidden" name="myPluginId" class="myPluginClsCss" id="myPluginIdName" value="<?php echo $id ?>">
        <div style="width:30%;float:right">
      scores id       <!-- نام : -->
        </div>
        <div style="width: 70%;float:right">
            <input type="text" name="myPluginName" class="myPluginClsCss" id="myPluginIdName" value="<?php echo $result[0]->myName ?>">
        </div>
     </div>
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        courses name     <!-- نام خانوادگی: -->
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginFamily" class="myPluginClsCss" id="myPluginIdFamily" value="<?php echo $result[0]->myFamily ?>">
        </div>
     </div>
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        STD ID           <!-- شماره گواهینامه: -->
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginCert" class="myPluginClsCss" id="myPluginIdCert" value="<?php echo $result[0]->myCert ?>">
        </div>
     </div>
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        courses term     <!-- کد ملی: -->
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginMeli" class="myPluginClsCss" id="myPluginIdMeli" value="<?php echo $result[0]->myMeli ?>">
        </div>
     </div>
     <!-- <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        شماره تماس:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginPhone" class="myPluginClsCss" id="myPluginIdPhone" value="<?php echo $result[0]->myPhone ?>">
        </div>
     </div> -->

     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        Listening:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginListening" class="myPluginClsCss" id="myPluginIdListening" value="<?php echo $result[0]->myListening ?>">
        </div>
     </div>
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        Speaking:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginSpeaking" class="myPluginClsCss" id="myPluginIdSpeaking" value="<?php echo $result[0]->mySpeaking ?>">
        </div>
     </div>
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        Reading:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginReading" class="myPluginClsCss" id="myPluginIdReading" value="<?php echo $result[0]->myReading ?>">
        </div>
     </div>

     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        Writing:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginWriting" class="myPluginClsCss" id="myPluginIdWriting" value="<?php echo $result[0]->myWriting ?>">
        </div>
     </div>

    
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        Totalgrade:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginTotalgrade" class="myPluginClsCss" id="myPluginIdTotalgrade" value="<?php echo $result[0]->myTotalgrade ?>">
        </div>
     </div>
     <!-- تاریخ اضافه شده  -->
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        date:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginTotalgrade" class="myPluginClsCss" id="myPluginIdTotalgrade" value="<?php echo $result[0]->myTotalgrade ?>">
        </div>
     </div>
     <!-- <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
       تاریخ:
        </div>
        <div style="width: 70%;float:right">
        <input type="text" name="myPluginDate" class="example1" id="alwaysShow" value="<?php echo $result[0]->myDate ?>">
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
     <!-- این خط باید کامن بشه -->
     <!-- <?php $pic = get_site_url().'/wp-content/uploads/'.$result[0]->myPic; 
     if($result[0]->myPic != null){
     ?>
            <img width="256" src="<?php echo $pic ?>">
      <?php } ?> -->
     <div style="width:32%;padding-top:45px">
        <div style="width:30%;float:right">
        </div>
        <div style="width: 70%;float:right">
        <input type="submit" name="myPluginSub" class="myPluginClsCss button button-primary button-large" id="myPluginSub" value="ثبت">
        </div>
     </div>
    </form>
    </div>
<?php    
}
