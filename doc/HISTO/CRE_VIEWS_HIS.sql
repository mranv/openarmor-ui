
create view agent as 
	select * from OpenArmor_base.agent;

create view category as 
	select * from OpenArmor_base.category;

create view location as 
	select * from OpenArmor_base.location;

create view server as 
	select * from OpenArmor_base.server;

create view signature as 
	select * from OpenArmor_base.signature;

create view signature_category_mapping as 
	select * from OpenArmor_base.signature_category_mapping;
