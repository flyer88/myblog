create database mffc;
create table article(
id int not null auto_increment,
title varchar(225) not null,
content longtext not null,
updated_at datetime,
 created_at datetime,
deleted_at datetime,
 flag varchar(24)  not null,
primary key (id)	
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into article values ('','hello','hello world');

create table user(
id int not null auto_increment,
mail varchar(225) not null,
password varchar(225) not null,
remember_token 	text	,
primary key (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into user values('','253311459@qq.com','flyer123');

alter table article  add  updated_at datetime;
alter table article  add  created_at datetime;
alter table article  add  deleted_at datetime;
alter table user add  remember_token text ;


alter table article  add  flag varchar(64) not null;



create table comment(
id int not null auto_increment,
name  varchar(225) DEFAULT '匿名用户',
aid int not null,
title varchar(225) not null,
content longtext not null,

updated_at datetime,
created_at datetime,
deleted_at datetime,
primary key(id)

)ENGINE=InnoDB DEFAULT CHARSET=utf8;

