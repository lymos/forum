# table forum_mem 会员表
drop table if exists forum_mem;
create table forum_mem(
	mem_id 		integer unsigned not null auto_increment comment "id",
	account 	varchar(60) not null default '' comment "账号",
	nick_name 	varchar(60) not null default '' comment "昵称",
	email 		varchar(80) not null default '' comment "email",
	mobile 		integer unsigned not null default 0 comment "手机",
	token 		varchar(100) not null default '' comment "注册时生成的token",
	token_expire 	int(11) not null default 0 comment "token过期时间",
	age 		int(6) not null default 0 comment "age",
	sex		tinyint(1) not null default 0 comment "0=>女; 1=>男",
	birthday 	int(11) not null default 0 comment "生日",
	lock_yn 	tinyint(1) not null default 0 comment "0=>not lock; 1=>lock",
	mobile_code 	varchar(10) not null default '' comment "手机验证码",
	active_yn 	tinyint(1) not null default 0 comment "0=>未激活; 1=>激活",

	
	update_time 	int(11) not null default 0 comment "更新时间",
	insert_time 	int(11) not null default 0 comment "添加时间",

	primary key(mem_id),
	unique key(account),
	key key_nick_name(nick_name)
)ENGINE=InnoDB default charset=utf8;

