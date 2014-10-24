create table article(
id int not null auto_increment,
title varchar(225) not null,
content longtext not null,
primary key (id)	
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into article values ('','hello','hello world');