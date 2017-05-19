<?php
include "libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "templates";
$smarty->compile_dir = "templates_c";
$smarty->assign('beauty',array('西施','貂蝉','王昭君','杨玉环'));
$smarty->display('radio.tpl');