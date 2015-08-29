# table forum_account admin
drop table if exists forum_aoocunt;
create table forum_account(
	id 		integer unsigned not null auto_increment comment "id",
	name 		varchar(60) not null default '' comment "name",
	passsword 	varchar(200) not null default '' comment "password",
	sort 		integer unsigned not null default 0 comment "排序",
	lock_yn 	tinyint(1) not null default 0 comment "0=>not lock; 1=>lock",
	group 		integer unsigned not null default 0 comment "用户组",
	

	update_time 	int(11) not null default 0 comment "update time",
	insert_time  	int(11) not null default 0 comment "insert time",

	primary key(id),
	key key_name(name)
)ENGINE=MyISAM default charset=utf8;


