<!-- نمایش گواهینامه بعد از سرچ  -->
<?php

global $wpdb;
 $myTableOptions = $wpdb->prefix . 'mycertificate_option';
 $options = $wpdb->get_results("SELECT * FROM " . $myTableOptions);
 foreach ($options as $option){
    switch ($option->myKey) {
        case 'captcha':
           $captcha = $option->myValue;
           break;
        case 'inquiry':
           $inquiry = $option->myValue;
           break;
        case 'name':
           $name = $option->myValue;
           break;
        case 'family':
           $family = $option->myValue;
           break;
        case 'meli':
           $meli = $option->myValue;
           break;
        case 'phone':
           $phone = $option->myValue;
           break;   
        case 'Listening':
           $Listening = $option->myValue;
           break;
      case 'Reading':
         $Reading = $option->myValue;
         break;     
        case 'Writing':
         $Writing = $option->myValue;
         break;  
        case 'Speaking':
         $Speaking = $option->myValue;
         break; 
        case 'Totalgrade':
         $Totalgrade = $option->myValue;
         break;
        case 'date':
           $date = $option->myValue;
           break;
        case 'title':
           $title = $option->myValue;
           break;
     }
 }
 
if (isset($_GET["action"])) {
   if($captcha == 0 || ($captcha==1 && $_SESSION["vercode"] == $_GET['vercode'])){

 $cert ="'".$_GET["certificate"]."'";

 $my_plugin_table_name = $wpdb->prefix . 'mycertificate';
 if($inquiry == 1){
    $results = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name . " WHERE myCert=".$cert);
 }elseif($inquiry == 2){
    $results = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name . " WHERE myMeli=".$cert." OR myCert=".$cert);
    
 }else{
    $results = $wpdb->get_results("SELECT * FROM " . $my_plugin_table_name . " WHERE myMeli=".$cert);
 }
 $_SESSION["vercode"] = '';
 if(count($results)>0){
 ?>

<?php
    foreach ($results as $results){ 
    if($name == 'on') { ?>

<div class="resultsCertificateContainer" >

      <div class='alertSuccess'><img src="<?PHP echo plugins_url('../images/accept.png', __FILE__);?>" />
      <div>
      <p>This certificate belongs to</p>
      <span><?php echo $results->myName; ?></span><span> <?php echo $results->myFamily; ?></td></span></div>
      <?php } 
    $pic = get_site_url().'/wp-content/uploads'.$results->myPic;
    if($results->myPic != null){
     ?>

  <a href="<?php echo $pic ?>" download><img class="getCertificateFile" src='<?PHP echo plugins_url("../images/download.png", __FILE__);?>' /></a></div>'
 
  <div class="certificateFileImg">
  <img src="<?php echo $pic ?>">
  <!-- start add new section for test -->

  <div class="cert_container">
        <div class="header_container divider_shadow">
    <div class="title_container">
        <div><p class="title">METODENO</p></div>
        <div><P><span class="sub_title">test report form CLC (Conversational Language Course).</span>This certificate was issued by Metodeno Academy Scoring System. <br>
            This is certify that you achieved the following score on your exam. <br>
            We believe that the best certificate is an interview with a person.</P></div>
    </div>
    <div class="QRmass"><img src=<?PHP echo plugins_url("../images/QRcodemass.ir.png", __FILE__);?> alt=""></div>
        </div>
        <div class="std_info_container divider_shadow">
        <div class="std_info_text">
            <div class="std_info_text_part">
                <div><p>Last name:</p></div>
                <div><p>First name:</p></div>
            </div>
            <div class="std_info_text_part">
                <div><p>National ID NO:</p></div>
                <div><p>Date of birth:</p></div>
            </div>
            <div class="std_info_text_part">
                <div><p>Student ID NO:</p></div>
                <div><p>Date:</p></div>
            </div>
        </div>
        <div class="std_info_img">
            <img src=<?PHP echo plugins_url("../images/stdimg.jpeg", __FILE__);?> alt="">
        </div>
        </div>
        <div class="result_of_all_semesters-container divider_shadow">
            <div class="course_title"><p>CLC Course</p></div>
            <div class="result_of_all_semesters-container-parts">
                <div class="result_of_all_semesters-part a1 active_level">
                <p class="course_level_title">A1</p>
                <div class="semester_grades">
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 1</p><div class="semester_grade_box"><p class="semester_grade_number">13</p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 2</p><div class="semester_grade_box"><p class="semester_grade_number">13</p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 3</p><div class="semester_grade_box"><p class="semester_grade_number">13</p></div></div>
                </div>
                </div>
                <div class="result_of_all_semesters-part b2">  
                <p class="course_level_title">B2</p>
                <div class="semester_grades">
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 10</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 11</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 12</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 13</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    </div></div> 
                <div class="result_of_all_semesters-part a2">  
                <p class="course_level_title">A2</p>
                <div class="semester_grades">
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 4</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 5</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 6</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                </div>
                </div>
                    <div class="result_of_all_semesters-part c1">  
                    <p class="course_level_title">C1</p>
                    <div class="semester_grades">
                        <div class="semester_grade_container"><p class="semester_grade_title">Adult 14</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                        <div class="semester_grade_container"><p class="semester_grade_title">Adult 15</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                        <div class="semester_grade_container"><p class="semester_grade_title">Adult 16</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                        <div class="semester_grade_container"><p class="semester_grade_title">Adult 17</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    </div>
                    </div>
                <div class="result_of_all_semesters-part b1">  
                <p class="course_level_title">B1</p>
                <div class="semester_grades">
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 7</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 8</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 9</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                </div>
                </div>
                <div class="result_of_all_semesters-part c2">  
                <p class="course_level_title">C2</p>
                <div class="semester_grades">
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 18</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 19</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 20</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                    <div class="semester_grade_container"><p class="semester_grade_title">Adult 21</p><div class="semester_grade_box"><p class="semester_grade_number"></p></div></div>
                </div>
                </div>
            </div>
        </div>
        <div class="result_this_semester divider_shadow">
            <div class="result_this_semester_title">
            <p>Test Result  <span class="course_level_title"> A1 </span>Adult 1</p>
            </div>
            <div class="result_this_semester_skills">
            <div class="skills_container">
                <p class="skills_title">Listening</p>
                <div class="skills_num_box">
                    <p>30</p>
                </div>
            </div>
            <div class="skills_container">
                <p class="skills_title">Speaking</p>
                <div class="skills_num_box">
                    <p>30</p>
                </div>
            </div>
            <div class="skills_container">
                <p class="skills_title">Reading</p>
                <div class="skills_num_box">
                    <p>20</p>
                </div>
            </div>
            <div class="skills_container">
                <p class="skills_title">Writing</p>
                <div class="skills_num_box">
                    <p>20</p>
                </div>
            </div>
            <div class="skills_container">
                <p class="skills_title">Total grade</p>
                <div class="skills_num_box">
                    <p>100</p>
                </div>
            </div>
            <div class="skills_container">
               <div class="set_pass_fail">
                <div><p>pass</p><img src="/assets/img/tick-icon.png" alt=""></div>
                <div><p>Fail</p><img src="" alt=""></div>
               </div>
            </div>
            </div>
        </div>
        <div class="signature_container">
            <div class="signature_container_part">
                <p>Administator</p>
                <p>Name</p>
            </div>
            <div class="signature_container_part">
                <p>Administator Signature</p>
                <img src=<?PHP echo plugins_url("../images/Examiners-signature.png", __FILE__);?> alt="">
            </div>
            <div class="signature_container_part">
                <p></p>
                <img src=<?PHP echo plugins_url("../images/STAMP-REAL.png", __FILE__);?> alt="">
            </div>
        </div>
    </div>

  <!-- end add new section for test -->
</div>

</div>
<?php }
} ?>

<?php }else{
   $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

   $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
   $url = explode('?', $escaped_url);
   echo" <div class='alertDangerContainer'><div class='alertDanger'><img src="?><?PHP echo plugins_url('../images/warning.png', __FILE__);?> <?php echo " /><p> No certificates were found with this specification</p>  ";
   echo '<a href="'.$url[0].'"><img class="replayCertificatePages" src='?><?PHP echo plugins_url("../images/replay.png", __FILE__);?> <?php echo ' /></a></div></div>';
} 
}else{ 
   $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
$url = explode('?', $escaped_url);
echo" <div class='alertDangerContainer'><div class='alertDanger'><img src="?><?PHP echo plugins_url('../images/warning.png', __FILE__);?> <?php echo " /><p> Captcha code is incorrect</p>  ";
   echo '<a href="'.$url[0].'"><img class="replayCertificatePages" src='?><?PHP echo plugins_url("../images/replay.png", __FILE__);?> <?php echo ' /></a></div></div>';
   //echo "<script>window.location.replace('".$url[0]."');alert(".$_SESSION["vercode"].")</script>";
}
} else {

   ?>
<div class="certificate-form">

<h1 class="header-form"><?php echo $title; ?></h1>

<p id="MypluginFormMessage"></p>
 
<form class="certificate-forme-input" name="registerCustomer" method="GET" action="" onsubmit="return jsValidation.validation();">


 <!-- <p style="color:black;width:40%"> <?php if($inquiry == 1){ ?>
   Student ID: <input type="text" name="certificate" class="myPluginClsCss certificate-forme-input" id="myPluginIdCert"></p>  
 <?php }elseif($inquiry == 2){ ?> -->
   
<!-- <p >
ID number OR Student ID : <input type="text" name="certificate" class="myPluginClsCss certificate-forme-input" id="myPluginIdCert"></p> -->

<div>
      <label for="myPluginIdCert">ID number OR Student ID</label>
      <input type="text" name="certificate" id="myPluginIdCert">
</div>
  <?php }else{ ?>
   
   <p style="color:black;width:40%">
   ID number: <input type="text" name="certificate" class="myPluginClsCss certificate-forme-input" id="myPluginIdCert"></p>  
  <?php } if($captcha == 1){ ?>
   Enter the image code : 
 <p style="color:black;width:40%"> <input type="text" name="vercode"  class="myPluginClsCss" id="myPluginIdCert">

 <img src="<?php echo plugins_url('captcha.php', __FILE__); ?>"  style="margin-right:10px;display:inline-block;position: absolute;"/>
  <?php } ?></p> 
  
  <div class="btn"><button class="btn-certificate" name="action" id="myPluginSub">Get result</button></div>
<!-- <p><br></p><input type="submit" name="action" class="myPluginClsCss btn-certificate" id="myPluginSub"  style="color:black" value="Get result"></p> -->
</form>
<?php } ?>