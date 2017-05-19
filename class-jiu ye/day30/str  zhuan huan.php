<?php
$str = "get_student_info";
//$str = explode("_",$str);
$str = str_replace("_"," ",$str);
//print_r($str);
//$str = strrchr($str,"i");
$str = ucwords($str);
$str = str_replace(' ','',$str);
echo $str;
