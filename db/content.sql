insert into t_genre values
('Super-Hero'),
('Romance'),
('Science-Fiction');

insert into t_editor values
('Marvel'),
('DC'),
('Vertigo');

insert into t_article values
(1, 'THE GOOD, THE BAD & THE UGLY PART 1','Le passé de DeadPool dans le programme arme X reviens le hanter. il est obligé d''appellé Wolverine et Captain America a la rescousse.','Marvel','Super-Hero','Deadpool',10,'http://i.annihil.us/u/prod/marvel/i/mg/3/a0/5212669b4d5d7/detail.jpg');

insert into t_article values
(2, 'Cable and X-Force (2012) #18','Le grand mechant des X-Force STYFE est de retour!Et il reclame sa revanche contre l''homme qui l''a abandonné dans le temps : CABLE.','Marvel','Super-Hero','Cable and X-Force ',10,'http://i.annihil.us/u/prod/marvel/i/mg/3/d0/52c19468d8a45/detail.jpg');

insert into t_article values
(3, 'Ms. Marvel (2014) #19','She''s beat down basic baddies, stopped super-villains and even conquered her evil ex-crush. But now that Kamala Khan has finally found her stride as a hero, the planet''s gotta go and collide with an alternate Earth...Typical. When the world ends, where will Kamala spend her last days..?','Marvel','Super-Hero','Ms. Marvel',10,'http://x.annihil.us/u/prod/marvel/i/mg/8/c0/561bd4221fa7b/detail.jpg');

insert into t_article values
(4, 'GUARDIANS OF INFINITY (2015) #5','Hermetikus’s evil ambitions are tremendous—you could say they’re GALACTIC in scale! Does this villain hold a strange connection to the Guardians 1000? Even though Rocket, Drax and Groot have joined a GUARDIANS SUPERGROUP, they might be in over their heads! Plus! Writer JEFF KING (White Collar) and artist FLAVIANO ARMENTERO show you what happens when Rocket and Kitty act as bodyguards for an interplanetary whistleblower!','Marvel','Science-Fiction','GUARDIANS OF INFINITY',10,'http://x.annihil.us/u/prod/marvel/i/mg/8/70/570c11c0d3bb7/detail.jpg');

insert into t_article values
(5, 'DEADPOOL (2012) #5','Deadpool vs. Reagan…DANS L\'ESPACE!ACEZ VOUS VRAIMENT BESOIN DE PLUS QUE CA?!?Ok, alors…SINGES!','Marvel','Super-Hero','Deadpool',10,'http://x.annihil.us/u/prod/marvel/i/mg/a/03/535165ac58339/detail.jpg');

insert into t_article values
(6, 'Batman - Killing Joke','Le Joker s’est à nouveau échappé de l’asile d’Arkham. Il a cette fois pour objectif de prouver la capacité de n’importe quel être humain de sombrer dans la folie après un traumatisme. Pour sa démonstration, il capture le commissaire GORDON et le soumet aux pires tortures que l’on puisse imaginer, à commencer par s’attaquer à sa chère fille, Barbara Gordon.','DC','Super-Hero','Batman',13,'http://comics-vf.the-covers.com/annee-2014/mois-3-mars/m/dc-deluxe-batman-killing-joke.jpg');

insert into t_article values
(7, 'Captain America - Civil war prélude','Retrouvez les adaptations des cartons du box-office Iron Man 3 et Captain America : Winter Soldier pour préparer l\'arrivée de Captain America : Civil War dans les salles.','Marvel','Super-Hero','Captain America',6,'http://comics-vf.the-covers.com/annee-2016/mois-4-avril/m/marvel-saga-hors-serie-v1-8.jpg');

insert into t_article values
(8, 'Watchmen - Les gardiens','L\'histoire des Watchmen se déroule en 1985, dans une uchronie où des super-héros ayant cessé leur activité de justiciers semblent disparaître un à un, alors que la Troisième Guerre mondiale menace d\'éclater à tout moment avec le bloc de l\'Est. ','Vertigo','Super-Hero','Watchmen',19,'http://comics-vf.the-covers.com/delcourt/contrebande/m/watchmen.jpg');

insert into t_article values
(9, 'Young Romance #11','Young Romance est un romance comics américain créé par Jack Kirby et Joe Simon et publié d\'abord par Prize Publications puis par DC Comics.','DC','Romance','Young Romance',15,'https://d1466nnw0ex81e.cloudfront.net/n_iv/600/832819.jpg');

insert into t_article values
(10, 'Spawn #1','Devenu gênant pour ses supérieurs, le lieutenant-colonel Al Simmons a été éliminé. Échoué en enfer, il pactise avec le diable dans l\'espoir de retrouver Wanda, son épouse. Il revient alors sur Terre sous la forme d\'un Hellspawn, une créature infernale dotée d\'un pouvoir immense. Il doit désormais prouver à son nouveau maître qu\'il est capable de commander les armées infernales.','Vertigo','Science-Fiction','Science-Fiction',11,'http://comics-vf.the-covers.com/bethy/m/spawn-1-questions.jpg');

insert into t_article values
(11, 'Daredevil n°1 : L\'homme sans peur','Après la mort présumée de sa mère survenue alors qu\'il avait six ans, Matt est élevé par son père. Celui-ci avait promis à sa femme mourante de prendre soin de leur fils. Se prenant pour un raté, il oblige Matt à ne pas suivre son exemple et le pousse à faire des études pour devenir avocat ou médecin. Souffre-douleur des enfants de la ville, Matt est considéré comme un loser par les caïds de la ville.','Marvel','Super-Hero','Daredevil',10,'http://comics-vf.the-covers.com/bethy/m/daredevil-l-homme-sans-peur.jpg');

insert into t_article values
(12, 'Spiderman n°1 : Tourments','Peter Parker est le fils unique de Richard et Mary Parker. Ses parents sont tués en travaillant sous couverture pour le gouvernement2. Peter Parker, orphelin à l\'âge de six ans, est alors confié à son oncle et à sa tante, Benjamin et May Parker.','Marvel','Super-Hero','Spiderman',17,'http://comics-vf.the-covers.com/bethy/m/spiderman-1-tourments.jpg');

/*author*/
insert into t_author values (1,'Jeff','King');
insert into t_author values (2,'Dan', 'Abnett');
insert into t_author values (3,'Brian', 'Posehn' );
insert into t_author values (4,'Gerry', 'Duggan');
insert into t_author values (5,'Dennis', 'Hopeless');
insert into t_author values (6,'G. Willow', 'Wilson');
insert into t_author values (7,'Alan', 'Moore');
insert into t_author values (8,'Brian', 'Bolland');
insert into t_author values (9,'Will', 'Pilgrim');
insert into t_author values (10,'Szymon', 'Kudranski');
insert into t_author values (11,'Lee', 'Ferguson');
insert into t_author values (12,'Joe', 'Simon');
insert into t_author values (13,'Jack', 'Kirby');
insert into t_author values (14,'Todd', 'McFarlane');
insert into t_author values (15,'Stan', 'Lee');
insert into t_author values (16,'Steve', 'Ditko');


insert into t_article_author values (4,2);
insert into t_article_author values (4,1);
insert into t_article_author values (5,3);
insert into t_article_author values (5,4);
insert into t_article_author values (1,3);
insert into t_article_author values (1,4);
insert into t_article_author values (2,5);
insert into t_article_author values (3,6);
insert into t_article_author values (6,7);
insert into t_article_author values (6,8);
insert into t_article_author values (7,9);
insert into t_article_author values (7,10);
insert into t_article_author values (7,11);
insert into t_article_author values (8,7);
insert into t_article_author values (9,12);
insert into t_article_author values (9,13);
insert into t_article_author values (10,14);
insert into t_article_author values (11,13);
insert into t_article_author values (11,16);
insert into t_article_author values (12,15);
insert into t_article_author values (12,16);

/* raw password is 'john' */
insert into t_user values
(1, 'JohnDoe', 'L2nNR5hIcinaJkKR+j4baYaZjcHS0c3WX2gjYF6Tmgl1Bs+C9Qbr+69X8eQwXDvw0vp73PrcSeT0bGEW5+T2hA==', 'YcM=A$nsYzkyeDVjEUa7W9K', 'ROLE_USER');
/* raw password is 'jane' */
insert into t_user values
(2, 'JaneDoe', 'EfakNLxyhHy2hVJlxDmVNl1pmgjUZl99gtQ+V3mxSeD8IjeZJ8abnFIpw9QNahwAlEaXBiQUBLXKWRzOmSr8HQ==', 'dhMTBkzwDKxnD;4KNs,4ENy', 'ROLE_USER');

/* raw password is '@dm1n' */
insert into t_user values
(3, 'admin', 'gqeuP4YJ8hU3ZqGwGikB6+rcZBqefVy+7hTLQkOD+jwVkp4fkS7/gr1rAQfn9VUKWc7bvOD7OsXrQQN5KGHbfg==', 'EDDsl&fBCJB|a5XUtAlnQN8', 'ROLE_ADMIN');

insert into t_comment values
(1, 'Great! Keep up the good work.', 1, 1);
