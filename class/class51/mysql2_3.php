<?php
$filename='phpMyAdmin';
$wenjian='wenjian';
function duquwenjian($path,$wenjian){
	if(!file_exists($wenjian)){
		mkdir($wenjian);
	}
	if(file_exists($path)){	//判断文件是否存在
		if(is_dir($path)){	//判断文件是否是一个目录
			$handle=opendir($path);	//打开目录，获得目录句柄
			echo '<ul>';
			while(false!==$file=readdir($handle)){	//循环读取目录句柄条目
				if($file!='.'&&$file!='..'){	//判断条目为本级目录或上级目录则跳过
					echo $file.'<br>';
					copy($file,($wenjian.DIRECTORY_SEPARATOR.$file));
					//echo $wenjian.DIRECTORY_SEPARATOR.$file.'<br>';
					echo '<li>'.$file.'</li>';	//打印条目名称
					if(is_dir($path.DIRECTORY_SEPARATOR.$file)){	//再次判断条目是否为目录
						if(!file_exists($wenjian.DIRECTORY_SEPARATOR.$file)){
							mkdir($wenjian.DIRECTORY_SEPARATOR.$file);
							}
						duquwenjian($path.DIRECTORY_SEPARATOR.$file,$wenjian.DIRECTORY_SEPARATOR.$file);	//递归调用
					}
				}
			}
			echo '</ul>';
		}else{
			echo "你输入的不是一个目录";
		}
	}else{
		echo "对不起，文件不存在！";
	}
}
duquwenjian($filename,$wenjian);
?>
