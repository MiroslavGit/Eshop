CREATE database gymm_shop;

create table employees (
	id INT (11) NOT NULL auto_increment,
	first_name VARCHAR(50),
	last_name VARCHAR(50),
	age INT(11),
	gender VARCHAR(50),
	height_cm INT (11),
	weight_kg INT (11),
	income_€ INT (11),
	year_of_entry DATE,
	kids VARCHAR(50),
	location VARCHAR(50),
    primary key(id)
);

insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (1, 'Olenka', 'Jirieck', 22, 'Female', 186, 124, 2151, '2019-5-26', false, 'Weru');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (2, 'Ericha', 'Pracy', 44, 'Male', 186, 72, 1852, '2019-3-8', false, 'Dasha');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (3, 'Hughie', 'Cottle', 37, 'Genderfluid', 171, 107, 1860, '2021-1-16', true, 'Pogonsili');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (4, 'Virgilio', 'Lucian', 31, 'Female', 174, 112, 2444, '2019-2-11', true, 'Montpellier');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (5, 'Serene', 'Bloodworthe', 43, 'Male', 171, 93, 2447, '2020-1-11', true, 'Caparrapí');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (6, 'Loralee', 'McCreery', 21, 'Female', 184, 79, 1836, '2019-5-13', true, 'Chengdong');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (7, 'Amble', 'Housegoe', 32, 'Male', 210, 112, 1585, '2018-12-10', false, 'Krasnyy Oktyabr’');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (8, 'Garek', 'Skuse', 26, 'Male', 178, 109, 2468, '2021-5-31', false, 'Kičevo');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (9, 'Cass', 'O''Scollain', 31, 'Male', 179, 128, 1446, '2019-11-8', false, 'Zongga');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (10, 'Terese', 'Rookesby', 23, 'Female', 163, 119, 2138, '2018-11-13', true, 'Fort Lauderdale');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (11, 'Amargo', 'De Metz', 47, 'Female', 188, 132, 1475, '2021-12-20', true, 'Al Khushnīyah');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (12, 'Mackenzie', 'Gennings', 27, 'Female', 209, 117, 1446, '2020-6-26', true, 'Xing’an');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (13, 'Deb', 'Cyples', 34, 'Female', 170, 118, 2062, '2019-1-23', false, 'Da Nang');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (14, 'Baudoin', 'Cheyne', 28, 'Female', 178, 122, 1434, '2020-8-3', true, 'Cândido Mota');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (15, 'Cathie', 'Lipprose', 55, 'Agender', 188, 64, 1760, '2020-11-26', false, 'Liliongan');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (16, 'Arluene', 'Ridesdale', 41, 'Male', 164, 125, 2289, '2019-10-13', false, 'Hexi');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (17, 'Constantine', 'Giffaut', 53, 'Male', 205, 60, 2381, '2019-5-6', true, 'Garcia Hernandez');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (18, 'Buddy', 'Bean', 45, 'Male', 207, 110, 2395, '2021-11-8', false, 'Hongguang');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (19, 'Regina', 'Ferfulle', 41, 'Female', 198, 138, 1671, '2019-8-3', false, 'Hadyach');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (20, 'Trenna', 'Thwaite', 26, 'Female', 177, 91, 1889, '2020-8-6', true, 'Arauco');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (21, 'Bryce', 'Muino', 40, 'Female', 177, 78, 1801, '2020-1-3', false, 'Caijiapu');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (22, 'Bryant', 'Santorini', 55, 'Male', 198, 82, 1751, '2021-12-5', true, 'Il’inskiy');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (23, 'Auria', 'Papa', 26, 'Female', 172, 119, 1761, '2020-2-3', false, 'Vitória do Mearim');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (24, 'Salomi', 'McKane', 36, 'Male', 193, 137, 2013, '2021-7-27', false, 'Bernay');
insert into employees (id, first_name, last_name, age, gender, height_cm, weight_kg, income_€, year_of_entry, kids, location) values (25, 'Celestina', 'Rash', 51, 'Female', 184, 119, 2238, '2021-4-26', true, 'Nový Malín');

create table password (
	id INT (11) NOT NULL auto_increment,
	password VARCHAR(50),
	 primary key(id)
);

insert into password (id, password)  values (1, 'protein');

create table orders (
	id INT (11) NOT NULL auto_increment,
	first_name varchar(32) NOT NULL,
	last_name varchar(32) NOT NULL,
	email varchar(64) NOT NULL,
	address varchar(128) NOT NULL,
	country varchar(32) NOT NULL,
	state varchar(32) NOT NULL,
	postal_code varchar(32) NOT NULL,
	price_€ double (5,2),
	date TIMESTAMP,
	primary key(id)
);

create table coupons (
	id INT (11) NOT NULL auto_increment,
	coupnon_name varchar(32) NOT NULL,
	primary key(id)
);

insert into coupons (id, coupnon_name)  values (1, 'MIRO20');
insert into coupons (id, coupnon_name)  values (2, 'CODE20');