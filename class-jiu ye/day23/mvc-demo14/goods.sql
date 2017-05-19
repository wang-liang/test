
create table goods(
    goods_id int unsigned not null auto_increment,
    goods_name varchar(64) not null default '',
    shop_price decimal(10,2) not null default 0,
    goods_desc text,
    goods_number int not null default 0,
    is_best tinyint not null default 0,
    is_new tinyint not null default 1,
    is_hot tinyint not null default 0,
    is_on_sale tinyint not null default 1,
    image_ori varchar(255) not null default '' comment '上传的原始图片',
    admin_id int unsigned not null default 0 comment '谁哪个管理员添加的商品',
    create_time int not null default 0 comment '添加时间,时间戳,整型',
    primary key (goods_id)
) engine=myisam charset=utf8;


alter table goods add column image_ori varchar(255) not null default '' comment '上传的原始图片' after is_on_sale;