use movietime;

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
(1, "Marvel's Thor: Ragnarok","PG13: Some Violence","Chris Hemsworth, Tom Hiddleston, Cate Blanchett, Idris Elba, Jeff Goldblum, Tessa Thompson, Karl Urban, Mark Ruffalo, Anthony Hopkins
","Taika Waititi",130,"In Marvel Studios' 'Thor: Ragnarok', Thor is imprisoned on the other side of the universe without his mighty hammer and finds himself in a race against time to get back to Asgard to stop Ragnarok- the destruction of his homeworld and the end of Asgardian civilization- the hands of an all-powerful new threat, the ruthless Hela. But first he must survive a deadly gladiatorial contest that pits him against his former ally and fellow Avenger- the Incredible Hulk!", "Movie Posters/thor.jpg"),
(2, "Kingsman: The Golden Circle", "NC16", "Channing Tatum, Colin Firth, Halle Berry, Julianne Moore, Jeff Bridges, Taron Egerton, Elton John, Mark Strong", "Matthew Vaughn", 142, "When their headquarters are destroyed and the world is held hostage, the Kingsman's journey leads them to the discovery of an allied spy organization in the US. These two elite secret organizations must band together to defeat a common enemy.", "Movie Posters/kingsman.jpg"),
(3, "Geostorm", "PG13: Some Intense Sequences", "Gerard Butler, Jim Sturgess, Abbie Cornish, Daniel Wu, Ed Harris, Andy Garcia", "Dean Devlin", 109, "After an unprecedented series of natural disasters threatened the planet, the world’s leaders came together to create an intricate network of satellites to control the global climate and keep everyone safe. But now, something has gone wrong—the system built to protect the Earth is attacking it, and it’s a race against the clock to uncover the real threat before a worldwide geostorm wipes out everything... and everyone along with it.", "Movie Posters/geostorm.jpg"),
(4, "Goodbye Christopher Robin", "PG", "Domhnall Gleeson, Margot Robbie, Kelly Macdonald, Will Tilston", "Simon Curtis", 107, "GOODBYE CHRISTOPHER ROBIN gives a rare glimpse into the relationship between beloved children's author A. A. Milne (Domhnall Gleeson) and his son Christopher Robin (Will Tilston), whose toys inspired the magical world of Winnie-the-Pooh. Along with his mother Daphne (Margot Robbie), and his nanny Olive (Kelly Macdonald), Christopher Robin and his family are swept up in the international success of the books; the enchanting tales bringing hope and comfort to England after the First World War. But with the eyes of the world on Christopher Robin, what will the cost be to the family?", "Movie Posters/goodbye.jpg"),
(5, "The Lego Ninjago Movie", "PG", "Dave Franco, Justin Theroux, Fred Armisen, Abbi Jacobson, Olivia Munn", "Charlie Bean", 101, "In this big-screen Ninjago adventure, the battle for Ninjago City calls to action young Master Builder Lloyd, aka the Green Ninja, along with his friends, who are all secret ninja warriors. Led by Master Wu, as wise-cracking as he is wise, they must defeat evil warlord Garmadon, The Worst Guy Ever, who also happens to be Lloyd’s dad. Pitting mech against mech and father against son, the epic showdown will test this fierce but undisciplined team of modern-day ninjas who must learn to check their egos and pull together to unleash their inner power of Spinjitzu.", "Movie Posters/lego.jpg"),
(6, "It", "NC16", "Jaeden Lieberher, Wyatt Oleff, Jeremy Ray Taylor, Sophia Lillis, Finn Wolfhard, Jack Dylan Grazer, Chosen Jacobs, Nicholas Hamilton, Bill Skarsgård", "Andrés Muschietti", 135, "New Line Cinema’s horror thriller “It,” directed by Andrés Muschietti, is based on the hugely popular Stephen King novel of the same name, which has been terrifying readers for decades. When children begin to disappear in the town of Derry, Maine, a group of young kids are faced with their biggest fears when they square off against an evil clown named Pennywise, whose history of murder and violence dates back for centuries.","Movie Posters/it.jpg");

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
(40, 5, "2017-11-18", "20:10"),
(41, 6, "2017-11-15", "10:20"),
(42, 6, "2017-11-15", "20:10"),
(43, 6, "2017-11-16", "10:20"),
(44, 6, "2017-11-16", "20:10"),
(45, 6, "2017-11-17", "10:20"),
(46, 6, "2017-11-17", "20:10"),
(47, 6, "2017-11-18", "10:20"),
(48, 6, "2017-11-18", "20:10");

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
(40, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

insert into price values
(1, "normal", "12"),
(2, "member", "10");