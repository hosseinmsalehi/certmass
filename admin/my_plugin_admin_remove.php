<!-- پاک کردن نمرات دانشجو -->
<?php
global $wpdb;
if(isset($_GET['id'])){
    $myTableName = $wpdb->prefix . 'mycertificate';
    $id = intval($_GET['id']);
    
    $wpdb->delete( $myTableName, array( 'id' => $id ) );
    header('Location: admin.php?page=certificate');
    die();
}

?>