# table forum_account admin
drop table if exists forum_account;
create table forum_account(
	account_id 		integer unsigned not null auto_increment comment "id",
	username 		varchar(60) not null default '' comment "username",
	password 	varchar(200) not null default '' comment "password",
	sort 		integer unsigned not null default 0 comment "排序",
	lock_yn 	tinyint(1) not null default 0 comment "0=>not lock; 1=>lock",
	group_id 	integer unsigned not null default 0 comment "用户组",
	

	update_time 	int(11) not null default 0 comment "update time",
	insert_time  	int(11) not null default 0 comment "insert time",

	primary key(account_id),
	key key_name(username)
)ENGINE=MyISAM default charset=utf8;

insert into forum_account (username, password) values ('admin', md5('admin'));

