# table forum_menu 菜单表
drop table if exists forum_menu;
create table forum_menu(
	menu_id 		integer unsigned not null auto_increment comment "id",
	parent_id  	integer unsigned not null default 0 comment "parent id",
	lang 		varchar(16) not null default 'zh-CN' comment "language",
	name 		varchar(60) not null default '' comment "name",
	sort 		integer unsigned not null default 0 comment "sort",
	template_name 	varchar(80) not null default '' comment "模板文件名",
	controller_name varchar(80) not null default '' comment "控制器文件名",
	model_name 	varchar(80) not null default '' comment "模型文件名",
	lock_yn 	tinyint(1) not null default 0 comment "0=>not lock; 1=>lock",
	

	menu_comment 	varchar(1000) not null default '' comment "备注",
	update_time 	int(11) not null default 0 comment "更新时间",
	insert_time 	int(11) not null default 0 comment "添加时间",

	primary key(menu_id)
)ENGINE=MyISAM default charset=utf8;

insert into forum_menu (menu_id, parent_id, name, insert_time) values (1, 0, '系统设置', unix_timestamp()); 
insert into forum_menu (menu_id, parent_id, name, insert_time) values (2, 1, '菜单管理', unix_timestamp()); 
