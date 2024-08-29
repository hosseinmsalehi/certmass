<!-- ایجاد دیتا بیس -->
<?php
function pluginprefix_install() {
 global $wpdb;
 $charset_collate = $wpdb->get_charset_collate();
 $my_db_name = $wpdb->prefix . 'mycertificate';
 if($wpdb->get_var( "show tables like '$my_db_name'" ) != $my_db_name) 
    {
    $sql = "CREATE TABLE $my_db_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        myName VARCHAR(25) NULL,
        myFamily VARCHAR(45) NULL,
        myCert VARCHAR(36) NULL,
        myMeli VARCHAR(12) NULL,
        myPic TEXT NOT NULL,


        52820114
        myPhone VARCHAR(12) NULL,
        myListening VARCHAR(12) NULL,
        myReading VARCHAR(12) NULL,
        myWriting VARCHAR(12) NULL,
        mySpeaking VARCHAR(12) NULL,
        myTotalgrade VARCHAR(12) NULL,
        myDate VARCHAR(12) NULL,
        date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
        PRIMARY KEY  (id)
      ) $charset_collate;
      
      require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
      dbDelta( $sql );
  }
  $my_db_name = $wpdb->prefix . 'mystudents';
      if($wpdb->get_var( "show tables like '$my_db_name'" ) != $my_db_name) 
         {
         $sql = "CREATE TABLE $my_db_name (
              id mediumint(9) NOT NULL AUTO_INCREMENT,
              stName VARCHAR(25) NULL,
              stFamily VARCHAR(45) NULL,
              stMeli VARCHAR(12) NULL,
              stPicStudent TEXT NOT NULL,
              stPhone VARCHAR(12) NULL,
              stDateRegister VARCHAR(12) NULL,
             date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
             PRIMARY KEY  (id)
           ) $charset_collate;";
           require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
           dbDelta( $sql );
         }
           
}




 $my_db_name = $wpdb->prefix . 'mycertificate_option';
 if($wpdb->get_var( "show tables like '$my_db_name'" ) != $my_db_name) 
    {
    $sql = "CREATE TABLE $my_db_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        myName VARCHAR(25) NOT NULL,
        myKey VARCHAR(45) NOT NULL,
        myValue VARCHAR(255) NOT NULL,
        PRIMARY KEY  (id)
      ) $charset_collate;";
      
      require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
      dbDelta( $sql );

      $data = [
        ['myName' => 'نمایش کد کپچا','myKey' => 'captcha','myValue' => 1],
        ['myName' => 'طرح نمایش استعلام','myKey' => 'inquiry','myValue' => 1],
        ['myName' => 'نام','myKey' => 'name','myValue' => 'on'],
        ['myName' => 'نام خانوادگی','myKey' => 'family','myValue' => 'on'],
        ['myName' => 'کد ملی','myKey' => 'meli','myValue' => 'on'],
        ['myName' => 'شماره تماس','myKey' => 'phone','myValue' => 'on'],
        ['myName' => 'Listening','myKey' => 'Listening','myValue' => 'on'],
        ['myName' => 'Reading','myKey' => 'Reading','myValue' => 'on'],
        ['myName' => 'Writing','myKey' => 'Writing','myValue' => 'on'],
        ['myName' => 'Speaking','myKey' => 'Speaking','myValue' => 'on'],
        ['myName' => 'Totalgrade','myKey' => 'Totalgrade','myValue' => 'on'],
        ['myName' => 'تاریخ','myKey' => 'date','myValue' => 'on'],
        ['myName' => 'عنوان فرم','myKey' => 'title','myValue' => 'فرم استعلام'],
        ['myName' => 'نام','myKey' => 'stName','myValue' => 'on'],
        ['myName' => 'نام خانوادگی','myKey' => 'stFamily','myValue' => 'on'],
        ['myName' => 'کد ملی','myKey' => 'stMeli','myValue' => 'on'],
        ['myName' => 'تصویر','myKey' => 'stPicStudent','myValue' => 'on'],
        ['myName' => 'شماره تماس','myKey' => 'stPhone','myValue' => 'on'],
        ['myName' => 'تاریخ','myKey' => 'stDateRegister','myValue' => 'on']
        ];
      
      for ($i=0; $i < count($data); $i++) { 
        $wpdb->insert( $my_db_name, $data[$i] );
      }
  }

  