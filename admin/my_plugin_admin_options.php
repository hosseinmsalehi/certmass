<!-- صفحه مربوط به تنظیمات پلاگین -->

<?php

global $wpdb;
$my_plugin_table_name = $wpdb->prefix . 'mycertificate_option';
$results = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name);
foreach($results as $value){
   switch ($value->myKey) {
      case 'captcha':
         $captcha = $value->myValue;
         break;
      case 'inquiry':
         $inquiry = $value->myValue;
         break;
      case 'name':
         $name = $value->myValue;
         break;
      case 'family':
         $family = $value->myValue;
         break;
      case 'meli':
         $meli = $value->myValue;
         break;
      case 'phone':
         $phone = $value->myValue;
         break;   
      case 'Listening':
         $Listening = $value->myValue;
         break;   
      case 'Reading':
         $Reading = $value->myValue;
         break;   
      case 'Writing':
         $Writing = $value->myValue;
         break;   
      case 'Speaking':
         $Speaking = $value->myValue;
         break;   
      case 'Totalgrade':
         $Totalgrade = $value->myValue;
         break;
      case 'date':
         $date = $value->myValue;
         break;
      case 'title':
         $title = $value->myValue;
         break;
   }
}
?>

<div class="wrap">
<h1>تنظیمات</h1>

<p id="MypluginFormMessage"></p>
 
<form name="registerCustomer" method="post" enctype="multipart/form-data" action="<?php echo plugins_url('../include/my_plugin_change_option.php', __FILE__); ?>" onsubmit="return jsValidation.validation();">
<div style="width:32%;padding-top:45px">
    <div style="width:50%;float:right">
    عنوان فرم استعلام
    </div>
    <div style="width: 50%;float:right">
        <input type="text" name="showTitle" style="width: 100%;" value="<?php echo $title; ?>">
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:50%;float:right">
    استفاده از کپچا در فرم استعلام؟
    </div>
    <div style="width: 50%;float:right">
        <select name="captcha" id="" style="width: 100%;">
         <option value="1" <?php echo ($captcha==1)?'selected':''; ?> >بله</option>
         <option value="0" <?php echo ($captcha==0)?'selected':''; ?> >خیر</option>
        </select>
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:50%;float:right">
    استعلام از طریق
    </div>
    <div style="width: 50%;float:right">
        <select name="inquiry" id="" style="width: 100%;">
         <option value="1" <?php echo ($inquiry==1)?'selected':''; ?> >شماره گواهی</option>
         <option value="0" <?php echo ($inquiry==0)?'selected':''; ?> >کد ملی</option>
         <option value="2" <?php echo ($inquiry==2)?'selected':''; ?> >هردو</option>
        </select>
    </div>
 </div>
 <div style="width:32%;padding-top:45px">
    <div style="width:50%;float:right">
    نمایش در صفحه استعلام
    </div>
    <div style="width: 50%;float:right">
        <label>نام  <input type="checkbox" name="showName" <?php echo ($name=='on')?'checked':''; ?>></label><br><br>
        <label>نام خانوادگی  <input type="checkbox" name="showFamily" <?php echo ($family=='on')?'checked':''; ?>></label><br><br>
        <label>کد ملی <input type="checkbox" name="showMeli" <?php echo ($meli=='on')?'checked':''; ?>></label><br><br>
        <label>شماره تماس <input type="checkbox" name="showPhone" <?php echo ($phone=='on')?'checked':''; ?>></label><br><br>
        <label>Listening <input type="checkbox" name="showListening" <?php echo ($Listening=='on')?'checked':''; ?>></label><br><br>
        <label>Reading <input type="checkbox" name="showReading" <?php echo ($Reading=='on')?'checked':''; ?>></label><br><br>
        <label>Writing <input type="checkbox" name="showWriting" <?php echo ($Writing=='on')?'checked':''; ?>></label><br><br>
        <label>Speaking <input type="checkbox" name="showSpeaking" <?php echo ($Speaking=='on')?'checked':''; ?>></label><br><br>
        <label>Totalgrade <input type="checkbox" name="showTotalgrade" <?php echo ($Totalgrade=='on')?'checked':''; ?>></label><br><br>
        <label>تاریخ <input type="checkbox" name="showDate" <?php echo ($date=='on')?'checked':''; ?>></label><br><br>
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