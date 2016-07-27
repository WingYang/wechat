/* 创建数据库 */
create database wechat default character set utf8;

/* */
use wechat;

/* 创建商品表 */
create table wechat.commodity (
commodity_id varchar(6) not null,
commodity_name varchar(50) not null,
commodity_img varchar(40) not null,
commodity_desc varchar(200) not null,
commodity_price float not null,
commodity_sale float default null,
commodity_type_id int(4) not null,
primary key (commodity_id)
)
