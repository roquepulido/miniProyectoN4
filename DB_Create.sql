DROP DATABASE Proyecto;
CREATE DATABASE Proyecto;
use Proyecto;

create table Users (
	ID  INT NOT NULL AUTO_INCREMENT,
	email VARCHAR(50),
	pass VARCHAR(50),
	name VARCHAR(50),
	bio TEXT,
	phone VARCHAR(50),
	user_ima VARCHAR(250),
	PRIMARY KEY (ID)

);
insert into Users (email, pass, name, bio, phone, user_ima) values ('hstanion0@cbsnews.com', 'TXm8N4', 'Stanton Chuney', 'curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at', '357-666-9084', 'https://robohash.org/similiqueprovidentreprehenderit.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('mmaxwale1@imgur.com', 'ezUv5zYV4Xlb', 'Anneliese Twidale', 'adipiscing molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget', '332-512-6417', 'https://robohash.org/rerumofficiapariatur.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('mkelleher2@privacy.gov.au', 'vQnz7F', 'Mack Turfs', 'massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu orci mauris lacinia sapien', '300-389-5924', 'https://robohash.org/quieosrem.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('ljewks3@clickbank.net', '02UMq1udVG', 'Sarine O'' Concannon', 'sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta', '942-418-3413', 'https://robohash.org/isteautnulla.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('mpeele4@cnbc.com', 'ZkG1Pe', 'Kaylyn Steiner', 'leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla', '780-285-7318', 'https://robohash.org/veliustoautem.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('fogglebie5@cloudflare.com', 'st7qgQhoib', 'Tiena Pitherick', 'felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in', '804-194-2905', 'https://robohash.org/ducimusfugiatvel.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('ndruel6@marriott.com', 'frlI00TQdDnZ', 'Verla Molder', 'ac nibh fusce lacus purus aliquet at feugiat non pretium quis lectus suspendisse potenti', '895-188-1639', 'https://robohash.org/eligendivoluptatemasperiores.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('gmolden7@nytimes.com', 'jc2OWrEPQXGc', 'Dillie Manvell', 'nam dui proin leo odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor', '679-776-9164', 'https://robohash.org/voluptatesidveniam.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('hcaruth8@sohu.com', 'e97GHz', 'Shandeigh Spittall', 'habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem', '576-206-8716', 'https://robohash.org/molestiaepariatursint.png?size=100x100&set=set1');
insert into Users (email, pass, name, bio, phone, user_ima) values ('gthow9@yellowpages.com', 'zcdRcdzK', 'Siana Itchingham', 'ridiculus mus vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes nascetur', '559-528-7922', 'https://robohash.org/quoerroret.png?size=100x100&set=set1');

