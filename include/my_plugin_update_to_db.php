<!-- آپدیت ویرایش دانشجو در دیتا بیس  -->
<?php
require_once('../../../../wp-config.php');
global $wpdb;
$myTableName = $wpdb->prefix . 'mycertificate';

if (isset($_POST["myPluginSub"])) {
    $id = $_POST["myPluginId"];
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

    if($tmp_name != null){
        $path_array  = wp_upload_dir(); // normal format start
        $img = $_FILES['myPluginPic']['name'];
        $file_name   = $meli.'-'.date('Y-m-d-H-s-i').'_'.$img;  
        $imgtype     = strtolower(pathinfo($tmp_name,PATHINFO_EXTENSION));                
        $targetpath  = $path_array["path"]."/".$file_name;
        $movefile = move_uploaded_file($tmp_name, $targetpath );
        $pic = wp_upload_dir()['subdir'].'/'.$file_name;
        $sql = "UPDATE $myTableName SET myName = '$name', myFamily = '$family', myCert = '$cert', myMeli = '$meli', myPic = '$pic', myPhone = '$phone', myListening = '$Listening', myReading = '$Reading', myWriting = '$Writing', mySpeaking = '$Speaking', myTotalgrade = '$Totalgrade', myDate = '$date' WHERE id = '$id'";
    }else{
        $sql = "UPDATE $myTableName SET myName = '$name', myFamily = '$family', myCert = '$cert', myMeli = '$meli', myPhone = '$phone', myListening = '$Listening', myReading = '$Reading', myWriting = '$Writing', mySpeaking = '$Speaking', myTotalgrade = '$Totalgrade', myDate = '$date' WHERE id = '$id'";
    }
    $query = $wpdb->query($wpdb->prepare($sql));
    if($query){
        wp_redirect( admin_url( '/admin.php?page=certificate&msg=success' ) );
        exit;
    }else{
        var_dump($sql);
        // wp_redirect( admin_url( '/admin.php?page=certificate&msg=error5' ) );
        // exit;
    }
}