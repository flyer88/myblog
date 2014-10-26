create table article(
id int not null auto_increment,
title varchar(225) not null,
content longtext not null,
primary key (id)	
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into article values ('','hello','hello world');

create table user(
id int not null auto_increment,
mail varchar(225) not null,
password varchar(225) not null,
primary key (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into user values('','253311459@qq.com','flyer123');