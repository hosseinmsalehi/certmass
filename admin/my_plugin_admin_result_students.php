
<!-- نمایش لیست دانشجویان -->
<?php

global $wpdb;
$my_plugin_table_name = $wpdb->prefix . 'mystudents';
$results = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name . " ORDER BY stName");
?>

<div class="wrap">
<table class="widefat">
<h1 class="wp-heading-inline">
مدارک</h1>
<a href="admin.php?page=studentsSet" class="page-title-action"> ثبت دانشجوی جدید</a>
<tr>
<th>نام</th>
<th>نام خانوادگی</th>
<th>کد ملی</th>
<th>کد دانشجویی</th>
<th>تاریخ تولد</th>
<th>شماره تماس </th>
<th>تصویر دانشجو </th>
<th>تاریخ  </th>
<th>عملیات </th>
</tr>

<?php foreach ($results as $results){ ?>
<tr>
<td>
<?php echo $results->stName; ?>
</td>
<td>
<?php echo $results->stFamily; ?>
</td>
<td>
<?php echo $results->stMeli; ?>
</td>
<td>
<?php echo $results->stPhone; ?>
</td>
<td>
<?php echo $results->stPicStudent; ?>
</td>
<td>
<?php echo $results->stDateRegister; ?>
</td>
<!-- <td>
<?php echo $results->myDate; ?>
</td>-->
<td> 
<a href="admin.php?page=certificate%2Fadmin%2Fmy_plugin_admin_remove.php&plugin=certificate&id=<?php echo $results->id; ?>" onclick="return confirm('آیا مطمئن هستید؟')"> حذف </a>
|<a href="admin.php?page=edit_certificate&id=<?php echo $results->id; ?>" > ویرایش </a>
</td>
<?php } ?>
</tr>
</table>
</div>