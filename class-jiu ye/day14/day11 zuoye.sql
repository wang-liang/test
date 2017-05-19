要求：
1)查出“计算机系”的所有学生信息。 
select * from 学生表 inner join 院系 on 学生表.院系ID=院系.院系ID  where 院系名称 = '计算机系'
select * from 学生表 where 院系ID = (
    select 院系ID from 院系 where 院系名称 = '计算机系'
)
2)查出“韩顺平”所在的院系信息。
select * from 学生表 inner join 院系 on 学生表.院系ID=院系.院系ID where 学生 = '韩顺平'
select * from 院系 where 院系ID = (
    select 院系ID from 学生表 where 学生 = '韩顺平'
)
3)查出在“行政楼”办公的院系名称。
select 院系名称 from 院系 where 系办地址 like '%行政楼%'
4)查出男生女生各多少人。
select 性别,count(*) as 人数 from 学生表 group by 性别 
5)查出人数最多的院系信息。
select  * from 院系 where 院系ID = (
    select 院系ID from 学生表 group by 院系ID having count(*) = (
        select count(*) from 学生表 group by 院系ID order by count(*) desc limit 0,1
    )
)
6)查出人数最多的院系的男女生各多少人。
select 性别,count(*) as 人数 from 学生表 where 院系ID = (
    select 院系ID from 学生表 group by  院系ID having count(*) = (
        select count(*) from 学生表 group by  院系ID order by count(*) desc limit 0,1
    )
)group by 性别
7)查出跟“罗弟华”同籍贯的所有人。
select * from 学生表 where 籍贯=(
    select 籍贯 from 学生表 where 学生='罗弟华'
) and 学生<>'罗弟华'
8)查出有“河北”人就读的院系信息。
select * from 院系 where 院系ID in (
    select 院系ID from 学生表 where 籍贯 = '河北'
)

9)查出跟“河北女生”同院系的所有学生的信息。
select * from 学生表 where 院系ID in (
    select 院系ID from 学生表 where 籍贯='河北' and 性别='女'
) and not(籍贯='河北' and 性别='女')