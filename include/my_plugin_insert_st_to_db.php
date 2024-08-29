<!-- ذخیره دانشجوی جدید در دیتا بس  -->
<?php
require_once('../../../../wp-config.php');
global $wpdb;
$myTableName = $wpdb->prefix . 'mystudents';

if (isset($_POST["myPluginSub"])) {
    $Name = $_POST["stName"];
    $Family = $_POST["stFamily"];
    $Meli = $_POST["stMeli"];
    $Phone = $_POST['stPhone'];
    $DateRegister = date('Y-m-d H:i:s');
    $tmp_name = $_FILES["stPicStudent"]["tmp_name"];
    if (empty($tmp_name)) {
        wp_redirect(admin_url('/admin.php?page=students&msg=error1'));
        exit;
    } else {
        $path_array = wp_upload_dir();
        $img = $_FILES['stPicStudent']['name'];
        $file_name = $Meli . '-' . date('Y-m-d-H-i-s') . '_' . $img;
        $targetpath = $path_array["path"] . "/" . $file_name;

        if (move_uploaded_file($tmp_name, $targetpath)) {
            $pic = $path_array["url"] . "/" . $file_name;
        } else {
            wp_redirect(admin_url('/admin.php?page=students&msg=error3'));
            exit;
        }
        if ($wpdb->query($wpdb->prepare(
            "INSERT INTO $myTableName (stName, stFamily, stMeli, stPicStudent, stPhone, stDateRegister) VALUES (%s, %s, %s, %s, %s, %s)",
            array($Name, $Family, $Meli, $pic, $Phone, $DateRegister)
        ))) {
            wp_redirect(admin_url('/admin.php?page=students&msg=success'));
            exit;
        } else {
            wp_redirect(admin_url('/admin.php?page=students&msg=error2'));
            exit;
        }
    }
} else {
    wp_redirect(admin_url('/admin.php?page=students&msg=error4'));
    exit;
}
