# table forum_category 种类表
drop table if exists forum_category(
	id 		integer unsigned not null auto_increment comment "id",
	parent_id 	integer unsigned not null default 0 comment "parent id",
	name 		varchar(60) not null default '' comment "name",
	sort 		integer unsigned not null default 0 comment "排序",
	section_id 	integer unsigned not null default 0 comment "板块id",
	
	
	update_time 	int(11) not null default 0 comment "update time",
	insert_time 	int(11) not null default 0 comment "insert time",

	primary key(id)
)ENGINE=MyISAM default charset=utf8;


