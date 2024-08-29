<!-- ذخیره تنظیمات پلاگین در دیتا بیس -->
<?php
require_once('../../../../wp-config.php');
global $wpdb;
$myTableName = $wpdb->prefix . 'mycertificate_option';
if (isset($_POST["myPluginSub"])) {
    if(isset($_POST["showPhone"]) && $_POST["showPhone"]=='on')
    {
        $showPhone = $_POST["showPhone"];
    }
    else{
        $showPhone = 'off';
    }
    /*test 2*/
    if(isset($_POST["showListening"]) && $_POST["showListening"]=='on')
    {
        $showListening = $_POST["showListening"];
    }
    else{
        $showListening = 'off';
    }
    if(isset($_POST["showReading"]) && $_POST["showReading"]=='on')
    {
        $showReading = $_POST["showReading"];
    }
    else{
        $showReading = 'off';
    }
    if(isset($_POST["showWriting"]) && $_POST["showWriting"]=='on')
    {
        $showWriting = $_POST["showWriting"];
    }
    else{
        $showWriting = 'off';
    }
    if(isset($_POST["showSpeaking"]) && $_POST["showSpeaking"]=='on')
    {
        $showSpeaking = $_POST["showSpeaking"];
    }
    else{
        $showSpeaking = 'off';
    }
    if(isset($_POST["showTotalgrade"]) && $_POST["showTotalgrade"]=='on')
    {
        $showTotalgrade = $_POST["showTotalgrade"];
    }
    else{
        $showTotalgrade = 'off';
    }
    if(isset($_POST["showName"]) && $_POST["showName"]=='on')
    {
        $showName = $_POST["showName"];
    }
    else{
        $showName = 'off';
    }
    if(isset($_POST["showFamily"]) && $_POST["showFamily"]=='on')
    {
        $showFamily = $_POST["showFamily"];
    }
    else{
        $showFamily = 'off';
    }
    if(isset($_POST["showMeli"]) && $_POST["showMeli"]=='on')
    {
        $showMeli = $_POST["showMeli"];
    }
    else{
        $showMeli = 'off';
    }
    if(isset($_POST["showDate"]) && $_POST["showDate"]=='on')
    {
        $showDate = $_POST["showDate"];
    }
    else{
        $showDate = 'off';
    }
 $data = [
        'captcha' => $_POST["captcha"],
        'inquiry' => $_POST["inquiry"],
        'name'    => $showName,
        'family'  => $showFamily,
        'meli'    => $showMeli,
        'phone'   => $showPhone,
        'Listening'     => $showListening,
        'Reading'     => $showReading,
        'Writing'     => $showWriting,
        'Speaking'     => $showSpeaking,
        'Totalgrade'     => $showTotalgrade,
        'date'    => $showDate,
        'title'   => $_POST["showTitle"]
    ];
    foreach($data as $key => $value){
        $result = $wpdb->get_row("SELECT id FROM " . $myTableName . " WHERE myKey='".$key."'");
        
        $update = $wpdb->update($myTableName,['myValue' => $value], array('id'=>$result->id));
        wp_redirect( admin_url( '/admin.php?page=optionscertificate' ) );
        // exit();
    }
 

}
?>