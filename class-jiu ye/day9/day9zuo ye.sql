1，建一个innodb类型且字符集为utf8的表，其中包括以下类型的字段：
int(自增长），float，char，varchar，datetime，date，text，enum， set。
并且在自增长的int类型字段上有主键，varchar类型字段上有普通索引
create table day9_zuoye1(
    id int primary key auto_increment,
    name varchar(10),
    salary float comment '工资',
    postcode char(6) comment '邮政编码',
    sex enum('男','女'),
    fav set('篮球','足球','排球','羽毛球'),
    intro text comment '自我介绍',
    birthday date comment '生日',
    reg_time datetime comment '注册时间'
) engine = InnoDB,charset=utf8;
2，给该表添加一个int字段，默认值是18；
alter table day9_zuoye1 add age int default 18;
3，修改表中char类型字段设定的长度；
alter table day9_zuoye1 change postcode postcode char(8) comment '邮政编码';
4，修改表名。
alter table day9_zuoye1 rename to day9zuoye_demo;
5，再创建跟前面那个同样的表，表的名字在前一个名字基础上加一个“2”，但其表类型是myisam，观察/data目录下的表文件跟前一个表的异同。
create table day9zuoye_demo1 like day9zuoye_demo;
alter table day9zuoye_demo1 engine = MYIsam;