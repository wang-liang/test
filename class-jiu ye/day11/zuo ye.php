<?php
//1)查出“计算机系”的所有学生信息。
select
//2)查出“韩顺平”所在的院系信息。

//3)查出在“行政楼”办公的院系名称。

//4)查出男生女生各多少人。

//5)查出人数最多的院系信息。

//6)查出人数最多的院系的男女生各多少人。

//7)查出跟“罗弟华”同籍贯的所有人。

//8)查出有“河北”人就读的院系信息。


//9)查出跟“河北女生”同院系的所有学生的信息。



//1)查询选修了 MySQL 的学生姓名；
"select name from stu inner join kecheng on stu.id=kecheng.id where kecheng_name = Mysql";
//2)查询 张三 同学选修了的课程名字；
"select kecheng_name.* from stu inner join kecheng on id=id where name='张三'";
//3)查询只选修了1门课程的学生学号和姓名；
"select class_id,name from ";
//5)查询选修了所有课程的学生；
"select name from stu inner join kecheng on stu.id=kecheng.id where (select kecheng_name.* from kecheng)";
//6)查询选修了课程的总人数；
?>