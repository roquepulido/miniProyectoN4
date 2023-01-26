#CREATE DATABASE Proyecto;
use Proyecto;

create table usuarios (
	ID int NOT NULL auto_increment,
	name VARCHAR(255),
	bio TEXT,
	email VARCHAR(255),
	phone VARCHAR(20),
	pass VARCHAR(255),
	user_ima VARCHAR(255),
	PRIMARY KEY (ID)
);
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Zacharie Tacey', 'pede ac diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna ac consequat metus', 'ztacey0@taobao.com', '999-409-3660', 'vSCxfVlrd', 'https://robohash.org/reprehenderitsitquae.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Sterne Micka', 'luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur', 'smicka1@friendfeed.com', '559-541-1159', 'lDuoEwF', 'https://robohash.org/cumquequosaliquam.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Derrek Rudkin', 'sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer non', 'drudkin2@cnet.com', '890-305-0612', 'Kt2TRb1m3R5', 'https://robohash.org/magnilaboriosammodi.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Sybil MacMenamie', 'etiam pretium iaculis justo in hac habitasse platea dictumst etiam', 'smacmenamie3@indiegogo.com', '239-155-6838', 'VW62UYbI', 'https://robohash.org/consequaturmolestiaeminus.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Bryant Summerrell', 'sem sed sagittis nam congue risus semper porta volutpat quam pede lobortis ligula sit amet eleifend', 'bsummerrell4@independent.co.uk', '761-649-7528', 'ZH1VoaZS', 'https://robohash.org/evenietofficiisin.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Pete Farney', 'vitae consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna', 'pfarney5@netscape.com', '799-105-6233', 'xV32f9WT1s', 'https://robohash.org/autteneturnecessitatibus.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Aldis Cartmael', 'id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque viverra pede', 'acartmael6@amazonaws.com', '327-174-2641', 'OWLALQ', 'https://robohash.org/mollitiamolestiaeest.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Marnia Messier', 'sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu', 'mmessier7@github.com', '560-792-8732', 'KgKn569Z8oYC', 'https://robohash.org/etcumquesaepe.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Cecelia Attoe', 'amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam', 'cattoe8@yellowbook.com', '490-804-1674', 'B7WEIBfZcGht', 'https://robohash.org/nobiserrorqui.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Cora Cuerdall', 'cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices enim lorem', 'ccuerdall9@npr.org', '203-188-0885', '44ioxERN4E4E', 'https://robohash.org/optioconsequaturtemporibus.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Garth Adrain', 'libero convallis eget eleifend luctus ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum', 'gadraina@pinterest.com', '899-241-0246', '2g5S3mFnUp', 'https://robohash.org/velquaecumque.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Lorette Griston', 'congue diam id ornare imperdiet sapien urna pretium nisl ut volutpat', 'lgristonb@bluehost.com', '687-149-3626', 'CPY449', 'https://robohash.org/dictarepellendusnesciunt.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Warden Linger', 'commodo placerat praesent blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede', 'wlingerc@ameblo.jp', '553-381-5550', 'y1Bredb', 'https://robohash.org/nemoeostempore.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Cordelia Middiff', 'non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus', 'cmiddiffd@noaa.gov', '310-305-6138', 'kxRO1mmm8', 'https://robohash.org/nihillaboresed.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Tobe Thom', 'eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum', 'tthome@apple.com', '233-840-8263', 'hZ8wGwvYuT', 'https://robohash.org/occaecatinihildolor.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Johan Fosserd', 'ligula in lacus curabitur at ipsum ac tellus semper interdum', 'jfosserdf@nih.gov', '661-204-9749', 'x0eevPxG0UYA', 'https://robohash.org/voluptatemenimquis.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Celestia Gebhard', 'nulla pede ullamcorper augue a suscipit nulla elit ac nulla sed', 'cgebhardg@java.com', '254-268-8593', 'PtkJxm2TPqI', 'https://robohash.org/voluptatibusullamqui.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Hermina Eglaise', 'ut dolor morbi vel lectus in quam fringilla rhoncus mauris enim leo rhoncus sed vestibulum sit amet', 'heglaiseh@drupal.org', '676-841-2832', 'Wcfh9F4ar', 'https://robohash.org/adipisciquiaid.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Garfield Meatcher', 'vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing elit proin interdum mauris non ligula', 'gmeatcheri@tripod.com', '286-953-2869', '5AVPBvPT7t0', 'https://robohash.org/quidemmagniipsam.png?size=50x50&set=set1');
insert into usuarios (name, bio, email, phone, pass, user_ima) values ('Aubert Kemster', 'vivamus vestibulum sagittis sapien cum sociis natoque penatibus et magnis dis parturient montes', 'akemsterj@nifty.com', '909-230-8860', 'h6NVJA1MUzX', 'https://robohash.org/veritatissolutalaborum.png?size=50x50&set=set1');
