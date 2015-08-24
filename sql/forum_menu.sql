# table forum_menu 菜单表
drop table if exists forum_menu;
create table forum_menu(
	id 		integer unsigned not null auto_increment comment "id",
	parent_id  	integer unsigned not null default 0 comment "parent id",
	name 		varchar(60) not null default '' comment "name",
	sort 		integer unsigned not null default 0 comment "sort",
	template_name 	varchar(80) not null default '' comment "模板文件名",
	controller_name varchar(80) not null default '' comment "控制器文件名",
	model_name 	varchar(80) not null default '' comment "模型文件名",
	lock_yn 	tinyint(1) not null default 0 comment "0=>not lock; 1=>lock",
	

	update_time 	int(11) not null default 0 comment "更新时间",
	insert_time 	int(11) not null default 0 comment "添加时间",

	primary key(id)
)ENGINE=MyISAM auto_increment=0 default charset=utf8;


