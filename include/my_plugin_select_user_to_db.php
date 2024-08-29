 <!-- ذخیره دانشجوی جدید در دیتا بیس -->
<?php
require_once('../../../../wp-config.php');
global $wpdb;
$myTableName = $wpdb->prefix . 'mycertificate';
if (isset($_POST["myPluginSub"])) {

 $phone = $_POST["myPluginPhone"];
 $my_plugin_table_name = $wpdb->prefix . 'mycertificate';
 $results = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name . " WHERE myPhone=".$phone);
 
 ?>
<table>
    <tr>
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>شماره گواهینامه</th>
        <th>کد ملی</th>
        <th>شماره تماس </th>
        <th>Listening </th>
        <th>Reading </th>
        <th>writing </th>
        <th>Speaking </th>
        <th>Totalgrade  </th>
        <th>تاریخ </th>
        <th>تصویر </th>
    </tr>

    <?php foreach ($results as $results){ ?>
    <tr>
        <td>
            <?php echo $results->myName; ?>
        </td>
        <td>
            <?php echo $results->myFamily; ?>
        </td>
        <td>
            <?php echo $results->myCert; ?>
        </td>
        <td>
            <?php echo $results->myMeli; ?>
        </td>
        <td>
            <?php echo $results->myPhone; ?>
        </td>
        <td>
<?php echo $results->myListening; ?>
</td>
<td>
<?php echo $results->myReading; ?>
</td>
<td>
<?php echo $results->myWriting; ?>
</td>
<td>
<?php echo $results->mySpeaking; ?>
</td>
<td>
<?php echo $results->myTotalgrade; ?>
</td>
        <td>
            <?php echo $results->myDate; ?>
        </td>
        <td>
            <?php $pic = get_site_url().'/wp-content/uploads/'.$results->myPic; ?>
            <img src="<?php echo $pic ?>">
        </td>
        <?php } ?>
    </tr>
</table>
<?php
} else {
    header('location:' . plugins_url('../public/my_plugin_error.php', __FILE__));
 die();
}