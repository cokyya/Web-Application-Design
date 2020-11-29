use cine;

create table members (
	username varchar(20),
	password varchar(40),
	email varchar(40),
	name varchar(20),
	primary key (username)
);

create table movieinfo
(
 movieid int unsigned not null auto_increment primary key,
 moviename varchar(256) not null,
 PG char(50) not null,
 cast varchar(1024) not null,
 director varchar(256) not null,
 runtime int unsigned not null,
 synopsis text not null,
 poster varchar(256)
);


create table sliderpic
(
 sliderid int unsigned not null auto_increment primary key,
 sliderpath varchar(256),
 caption text not null
);

create table showtime
(
 timeslotid int unsigned not null auto_increment primary key,
 movieid int unsigned not null,
 showdate varchar(50) not null,
 timeslot varchar(50) not null
);


create table orders
( 
	totalid int unsigned not null auto_increment primary key,
	orderid varchar(10) not null,
	custname char(50) not null,
	custemail varchar(50) not null,
	movieorder varchar(256) not null,
	dateorder varchar(256) not null,
	timeorder varchar(256) not null,
	seatno varchar(256) not null
);

create table seat
(
 id int unsigned not null auto_increment primary key,
 timeslotid int unsigned not null,
 A1 char(50) null,
 A2 char(50) null,
 A3 char(50) null,
 A4 char(50) null,
 A5 char(50) null,
 A6 char(50) null,
 A7 char(50) null,
 A8 char(50) null,
 A9 char(50) null,
 A10 char(50) null,
 A11 char(50) null,
 A12 char(50) null,
 B1 char(50) null,
 B2 char(50) null,
 B3 char(50) null,
 B4 char(50) null,
 B5 char(50) null,
 B6 char(50) null,
 B7 char(50) null,
 B8 char(50) null,
 B9 char(50) null,
 B10 char(50) null,
 B11 char(50) null,
 B12 char(50) null,
 C1 char(50) null,
 C2 char(50) null,
 C3 char(50) null,
 C4 char(50) null,
 C5 char(50) null,
 C6 char(50) null,
 C7 char(50) null,
 C8 char(50) null,
 C9 char(50) null,
 C10 char(50) null,
 C11 char(50) null,
 C12 char(50) null

);

create table price
(
 id int unsigned not null auto_increment primary key,
 customertype char(50) not null,
 price int unsigned not null
);

insert into movieinfo values
(1, 
"Hunter Killer", 
"NC16", 
"Gerard Butler, Gary Oldman, Common, Linda Cardellini, Toby Stephens", "Donovan Marsh", 
121, 
"Deep under the Arctic Ocean, American submarine Captain Joe Glass (Gerard Butler, Olympus Has Fallen, 300) is on the hunt for a U.S. sub in distress when he discovers a secret Russian coup is in the offing, threatening to dismantle the world order. With crew and country on the line, Captain Glass must now assemble an elite group of Navy SEALs to rescue the kidnapped Russian president and sneak through enemy waters to stop WWIII.", 
"Movie Posters/HunterKiller.jpg"),


(2, 
"Goosebumps 2: Haunted Halloween",
 "PG", 
 "Madison Iseman, Jeremy Ray Taylor, Caleel Harris", 
 "Ari Sandel", 
 90, 
 "Halloween comes to life in a brand-new comedy adventure based on R.L. Stine’s 400-million-selling series of books.", 
 "Movie Posters/Goosebumps.jpg"),

(3, "Exes Baggage", 
"NC16", 
"Angelica Panganiban, Carlo Aquino, Dionne Monsanto", 
"Ruben Fleischer",
104, 
"After a chance encounter, PIA (Angelica Panganiban) and NIX (Carlo Aquino) instantly hit it off. Natural conversations eventually develop into deep attraction. Despite their wounds from previous relationships, both decide to take a chance on each other.", "Movie Posters/ExesBaggage.jpg"),
(4, "Venom", "PG13", "Tom Hardy, Michelle Williams, Riz Ahmed, Scott Haze, Reid Scott", "Ruben Fleischer", 112, "One of Marvel’s most enigmatic, complex and badass characters comes to the big screen, starring Academy Award nominated actor Tom Hardy as the lethal protector Venom.", "Movie Posters/Venom.jpg"),
(5, "First Man", "PG13", "Ryan Gosling, Claire Foy, Jason Clarke, Kyle Chandler, Patrick Fugit, Ciaran Hinds, Pablo Schreiber", "Damien Chazelle", 141, "On the heels of their six-time Academy Award®-winning smash, La La Land, Oscar®-winning director Damien Chazelle and star Ryan Gosling reteam for Universal Pictures’ First Man, the riveting story of NASA’s mission to land a man on the moon, focusing on Neil Armstrong and the years 1961-1969. A visceral, first-person account, based on the book by James R. Hansen, the movie will explore the sacrifices and the cost—on Armstrong and on the nation—of one of the most dangerous missions in history.", "Movie Posters/FirstMan.jpg");



insert into showtime values
(1, 1, "2017-11-15", "10:20"),
(2, 1, "2017-11-15", "20:10"),
(3, 1, "2017-11-16", "10:20"),
(4, 1, "2017-11-16", "20:10"),
(5, 1, "2017-11-17", "10:20"),
(6, 1, "2017-11-17", "20:10"),
(7, 1, "2017-11-18", "10:20"),
(8, 1, "2017-11-18", "20:10"),
(9, 2, "2017-11-15", "10:20"),
(10, 2, "2017-11-15", "20:10"),
(11, 2, "2017-11-16", "10:20"),
(12, 2, "2017-11-16", "20:10"),
(13, 2, "2017-11-17", "10:20"),
(14, 2, "2017-11-17", "20:10"),
(15, 2, "2017-11-18", "10:20"),
(16, 2, "2017-11-18", "20:10"),
(17, 3, "2017-11-15", "10:20"),
(18, 3, "2017-11-15", "20:10"),
(19, 3, "2017-11-16", "10:20"),
(20, 3, "2017-11-16", "20:10"),
(21, 3, "2017-11-17", "10:20"),
(22, 3, "2017-11-17", "20:10"),
(23, 3, "2017-11-18", "10:20"),
(24, 3, "2017-11-18", "20:10"),
(25, 4, "2017-11-15", "10:20"),
(26, 4, "2017-11-15", "20:10"),
(27, 4, "2017-11-16", "10:20"),
(28, 4, "2017-11-16", "20:10"),
(29, 4, "2017-11-17", "10:20"),
(30, 4, "2017-11-17", "20:10"),
(31, 4, "2017-11-18", "10:20"),
(32, 4, "2017-11-18", "20:10"),
(33, 5, "2017-11-15", "10:20"),
(34, 5, "2017-11-15", "20:10"),
(35, 5, "2017-11-16", "10:20"),
(36, 5, "2017-11-16", "20:10"),
(37, 5, "2017-11-17", "10:20"),
(38, 5, "2017-11-17", "20:10"),
(39, 5, "2017-11-18", "10:20"),
(40, 5, "2017-11-18", "20:10");


insert into seat values
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

insert into price values
(1, "normal", "12"),
(2, "member", "10");


insert into sliderpic values
(1, 
"Slider/img1.jpg",
"caption 1"),

(2, 
"Slider/img2.jpg",
"caption 2"),

(3, 
"Slider/img3.jpg",
"caption 3");
