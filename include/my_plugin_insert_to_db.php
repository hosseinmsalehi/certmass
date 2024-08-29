<!-- ذخیره نمرات جدید در دیتا بیس -->
<?php
require_once('../../../../wp-config.php');
global $wpdb;
$myTableName = $wpdb->prefix . 'mycertificate';
if (isset($_POST["myPluginSub"])) {

 $name = $_POST["myPluginName"];
 $family = $_POST["myPluginFamily"];
 $cert = $_POST["myPluginCert"];
 $meli = $_POST["myPluginMeli"];
 $phone = $_POST["myPluginPhone"];
 $Listening = $_POST['myPluginListening'];
 $Reading = $_POST['myPluginReading'];
 $Writing = $_POST['myPluginWriting'];
 $Speaking = $_POST['myPluginSpeaking'];
 $Totalgrade = $_POST['myPluginTotalgrade'];
 $date = $_POST['myPluginDate'];
 $tmp_name = $_FILES["myPluginPic"]["tmp_name"];

 if (!isset($cert)) {
    wp_redirect( admin_url( '/admin.php?page=certificate&msg=error1' ) );
    exit;
 } else {
    $pic = "";
   if($tmp_name != null){
      $path_array  = wp_upload_dir(); // normal format start
      $img = $_FILES['myPluginPic']['name'];
      $file_name   = $meli.'-'.date('Y-m-d-H-s-i').'_'.$img;  
      $imgtype     = strtolower(pathinfo($tmp_name,PATHINFO_EXTENSION));                
      $targetpath  = $path_array["path"]."/".$file_name;
      $movefile = move_uploaded_file($tmp_name, $targetpath );
      $pic = wp_upload_dir()['subdir'].'/'.$file_name;
   } 

 if ($wpdb->query($wpdb->prepare("INSERT INTO ".$myTableName."(myName,myFamily,myCert,myMeli,myPic,myPhone,myListening,myReading,myWriting,mySpeaking,myTotalgrade,myDate)VALUES(%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)", array($name, $family, $cert, $meli, $pic, $phone, $Listening, $Reading, $Writing,$Speaking, $Totalgrade, $date)))) {
    wp_redirect( admin_url( '/admin.php?page=certificate&msg=success' ) );
    exit;
 } else {
    wp_redirect( admin_url( '/admin.php?page=certificate&msg=error2' ) );
    exit;
 }

 }
} else {
    wp_redirect( admin_url( '/admin.php?page=certificate&msg=error4' ) );
    exit;
}