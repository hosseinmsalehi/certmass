<!-- صفحه ورود اطلاعات دانشجو  -->
<?php
/*
Plugin Name: استعلام گواهینامه و مدرک
Description: افزونه استعلام و ثبت گواهینامه و مدرک - برای نمایش استعلام کد کوتاه [showMyForm] را در نوشته یا برگه خود وارد کنید
Plugin URI: https://jixa.ir
Version: 1.3
Author: jixa free lancer group 
*/


// این برای امنیت فایل ها در وردپرس است 
if(!defined('ABSPATH')){exit;}


// تعریف ثاب های url و path فایل های اصلی پلاگین 
define( 'inquiry_url', plugin_dir_url( __FILE__ ) );
define( 'inquiry', plugin_dir_path( __FILE__ ) );


// شناسایی افراد وارد شده  دسترسی پذیری
// طبقه بندی کاربران 
// با استفاده از session_id و همینطور add_action ("init",....) هوگ 
//  init باعث میشه بعد از وردپرس سریع اجرا بشه 
function register_session(){
    if( !session_id() )
        session_start();
}
add_action('init','register_session');


// اضافه کردن منو با استفاده از هوگ admin_menu 
// و استفاده از فانکشن با فرمت خاص
// برای اضافه کردن تب در پیشخواز از 
// add_menu_page استفاده میشه و برای زیر منو از 
// add_submenu_page استفاده میشه 
// اضافه کردن فانکش ها برای دسترسی به صفحات مختلف 
// ساختار اصلی پلاگین اینجا مشخص میشه 


// Add menu
function certificate_menu() {

    add_menu_page("مدارک", "مدارک","manage_options", "certificate", "displayList","dashicons-id"); 
    add_submenu_page("certificate","ثبت دانشجویان", "ثبت دانشجویان","manage_options", "studentsSet", "addEntryStudent");
    add_submenu_page("certificate","دانشجویان", "دانشجویان","manage_options", "students", "displayListStudents");
    add_submenu_page("certificate","ثبت مدرک", "ثبت مدرک","manage_options", "addnewcertificate", "addEntry");
    add_submenu_page("certificate","تنظیمات", "تنظیمات ","manage_options", "optionscertificate", "optionsEntry");
    add_submenu_page("","تنظیمات", "تنظیمات ","manage_options", "edit_certificate", "edit_certificate");
}

add_action("admin_menu", "certificate_menu");

function displayList(){
    require_once (inquiry.'admin/my_plugin_admin_result.php');

}

function addEntryStudent(){
    require_once (inquiry.'admin/my_plugin_admin_new_student.php');

}

function displayListStudents(){
    require_once (inquiry.'admin/my_plugin_admin_result_students.php');

}

function addEntry(){
    require_once (inquiry.'admin/my_plugin_admin_new.php');

}

function optionsEntry(){
    require_once (inquiry.'admin/my_plugin_admin_options.php');

}

function edit_certificate(){
    require_once (inquiry.'admin/my_plugin_admin_edit.php');
}



// اینو نفهمیدم چیه ؟
// ***************
// ***************
if(isset($_GET['plugin'])=='certificate'){
    require_once (inquiry.'admin/my_plugin_admin_remove.php');
}

// ساخت دیتا بیس برای پلاگین 
require_once (inquiry.'database/my_plugin_table.php');

register_activation_hook( __FILE__, 'pluginprefix_install' );



// تعریف شرت کد نمایش فرم در front و استفاده از پلاگین
function my_plugin_information_form(){
        require_once (inquiry.'public/my_plugin_form.php');        
}

add_shortcode('showMyForm', function (){
    
    my_plugin_information_form();
});

// وارد کردن فایل های جاوا اسکریپ و اجرای آنها
function my_plugin_load_javascriptsandcss()
{
    wp_register_script('my_plugin_reservation_form_javascript', plugins_url('js/myPluginJsValidation.js', __FILE__), array(), '1.1', true);


    wp_enqueue_script('my_plugin_reservation_form_javascript');
}
add_action('wp_enqueue_scripts', 'my_plugin_load_javascriptsandcss');

function my_plugin_load_css()
{
    wp_register_style('my_plugin_reservation_form_css', inquiry_url.'css/myPluginStyle.css');
    wp_enqueue_style('my_plugin_reservation_form_css');
}
add_action('wp_enqueue_scripts', 'my_plugin_load_css');
?>

