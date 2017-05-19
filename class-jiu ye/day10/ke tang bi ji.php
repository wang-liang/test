<?php
create table tab_load_data(
	id int auto_increment primary key,
	name varchar(10),
	sex enum('男','女'),
	jiguan varchar(10),
	f5 int
);

create table tab_xuanxiang(
	id int auto_increment primary key,
	name varchar(10),
	age tinyint
)
charset = gbk,
engine = MyIsam,
auto_increment = 1000,
comment = '文字说明...'
;
insert into tab_xuanxiang (id,name,age) values(null,'张三',11);
alter table tab_xuanxiang add column email varchar(50);
alter table tab_xuanxiang add key (age);/*添加一个普通索引*/
?>