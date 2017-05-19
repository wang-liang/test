<?php
1)查出“计算机系”的所有学生信息。
select * from 学生表 where 院系ID=(select 院系ID from 院系 where 院系ID='计算机系')
select * from 学生表 inner join 院系 on 学生表.院系ID=院系.院系ID where 院系名称='计算机系'
2)查出“韩顺平”所在的院系信息。
select * from 院系 where 院系ID=(select 院系ID from 学生表 where 学生='韩顺平')
select 院系.* from 学生表 inner join 院系 on 学生表.院系ID=院系.院系ID where 学生='韩顺平'
3)查出在“行政楼”办公的院系名称。
select 院系名称 from 院系 where 系办地址 like '%行政%'
4)查出男生女生各多少人。
select 性别,count(*) as 数量 from 学生表 group by 性别
5)查出人数最多的院系信息。
select * from 院系 where 院系ID=(
    以院系ID分组，查找院系ID，条件是找出数量上最大的值
    select 院系ID from 学生表 group by 院系ID having count(*)=(
            从院系ID分组的结果中，查找出数量最大的值
           select count(*) from 学生表 group by 院系ID order by count(*) desc limit 0,1))
6)查出人数最多的院系的男女生各多少人。
select 性别,count(*) from 学生表 where 院系ID=(
     #以院系ID分组，查找院系ID，条件是找出数量上最大的值
    select 院系ID from 学生表 group by 院系ID having count(*)=(
            #从院系ID分组的结果中，查找出数量最大的值
           select count(*) from 学生表 group by 院系ID order by count(*) desc limit 0,1))
)group by 性别
7)查出跟“罗弟华”同籍贯的所有人。
select * from 学生表 where 籍贯=(select 籍贯 from 学生表 where 学生='罗弟华')
8)查出有“河北”人就读的院系信息。
select * from 院系 where 院系ID in(select 院系ID from 学生表 where 籍贯='河北')
select 院系.* from 学生表 inner join 院系 on 学生表.院系ID=院系.院系ID where 籍贯='河北'
9)查出跟“河北女生”同院系的所有学生的信息。
select * from 学生表 where 院系ID in (select 院系ID from 学生表 where 性别='女' and 籍贯='河北')


1)查询选修了 MySQL 的学生姓名；
select name from stu where id in(
    select stu_id from stu_kecheng where kecheng_id =(
        select id from kecheng where kecheng_name='Mysql'
    ) 
)
select name from stu 
    inner join stu_kecheng on stu.id=stu_kecheng.stu_id
        inner join kecheng on stu_kecheng.kecheng_id=kecheng.id
        where kecheng_name='Mysql'
2)查询 张三 同学选修了的课程名字；
select kecheng_name from kecheng where id in (
    select kecheng_id from stu_kecheng where stu_id = (
        select id from stu where name='张三'
    )
)
select kecheng_name from kecheng 
    inner join stu_kecheng on kecheng.id = stu_kecheng.kecheng_id
        inner join stu on stu_kecheng.stu_id = stu.id where name='张三'
3)查询只选修了1门课程的学生学号和姓名；
select id,name from stu where id in(
    以学生ID分组，如果分组后只有一条记录，就代表该学生只修了一门课程
    select stu_id from stu_kecheng group by stu_id having count(*) =1
)
4)查询选修了至少3门课程的学生信息；
select * from stu where id in (
    select stu_id from stu_kecheng group by stu_id having count(*)>=3
)
select * from stu where id in( select stu_id from stu_kecheng group by stu_id having count(kecheng_id)>=3)

5)查询选修了所有课程的学生信息；
select * from stu where id in (
    select stu_id from stu_kecheng group by stu_id having count(*)=(
        select count(*) from kecheng
    )
)

select * from stu where id in(
    #找出以学生ID分组后，选修了所有课程的学生
    #这里找出的一行记录就代表一个学生选修了多门课程的一个集合，
    #count(*)可以求得选修了几门课程
    select stu_id from stu_kecheng group by stu_id having count(*) = (
        #找出所有课程
        select count(*) from kecheng)
)
//这里只要有学生选修了其中一门课程，就会在分数表中显示有具体的分数和学生id信息
6)查询选修了课程的总人数；

select count(*) as 总人数 from stu_kecheng group by stu_id having kecheng_id in (
    select id from kecheng 
)










#以找出的学生ID作为"数据源"统计其行数，就是有多少个学生，即总人数
select count(*) from (
    #找出stu_kecheng表中选修了所有课程的学生ID
    #这里找出的一行记录就代表一个学生选修了多门课程的一个集合
    #（其实就是一个学生，“有几条记录就代表有几个学生选修了课程”）
    select stu_id from stu_kecheng group by stu_id)
7)查询所学课程至少有一门跟 张三 所学课程相同的学生信息。
select * from stu where id in(
    select stu_id from stu_kecheng where kecheng_id in(
        select kecheng_id from stu_kecheng where stu_id =(
            select id from stu where name='张三'
        )
    )
)

8)查询两门及两门以上不及格同学的平均分
select stu_id,name,avg(sorce) from stu_kecheng as sk
    inner join stu on stu.id = sk.stu_id
        where stu_id in(
        select stu_id from stu_kecheng where score < 60
        group by stu_id having count(*) >=2
)
group by stu_id,name

select stu_id,name,avg(score) from stu_kecheng
    inner join stu on stu.id = stu_kecheng.stu_id
    where stu_id from stu_kecheng where score <60
    group by stu_id having count(*) >=2

select stu_id,avg(score) from stu_kecheng group by stu_id having sum(score<60)>=2;						
select avg(score) from stu_kecheng where stu_id in(select stu_id from stu_kecheng group by stu_id having sum(score<60)>=2)
