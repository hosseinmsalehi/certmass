<!-- نمایش لیست نمرات -->
<?php
global $wpdb;
$my_plugin_table_name = $wpdb->prefix . 'mycertificate';
$results = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name . " ORDER BY myName");
?>
<div class="wrap">
<table class="widefat">
<h1 class="wp-heading-inline">
مدارک</h1>
<a href="admin.php?page=addnewcertificate" class="page-title-action"> ثبت مدرک جدید</a>
<tr>
<th>scores id</th>
<th>courses name</th>
<th> STD ID</th>
<th>courses term</th>
<!-- <th>شماره تماس </th> -->
<th>Listening </th>
<th>Speaking </th>
<th>Reading </th>
<th>writing </th>
<th>Totalgrade </th>
<th>Date test </th>
<th>تاریخ  </th>
<th>عملیات </th>
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
<a href="admin.php?page=certificate%2Fadmin%2Fmy_plugin_admin_remove.php&plugin=certificate&id=<?php echo $results->id; ?>" onclick="return confirm('آیا مطمئن هستید؟')"> حذف </a>

<a href="admin.php?page=edit_certificate&id=<?php echo $results->id; ?>" > ویرایش </a>
</td>
<?php } ?>
</tr>
</table>
</div>