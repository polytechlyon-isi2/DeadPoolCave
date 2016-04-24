insert into t_genre values
('Super-Hero'),
('Romance'),
('Science-Fiction');

insert into t_editor values
('Marvel'),
('DC'),
('Vertigo');

insert into t_article values
(1, 'THE GOOD, THE BAD & THE UGLY PART 1','Le passé de DeadPool dans le programme arme X reviens le hanter. il est obligé d''appellé Wolverine et Captain America a la rescousse.','Marvel','Super-Hero','Deadpool (2012-2015)',10,'http://i.annihil.us/u/prod/marvel/i/mg/3/a0/5212669b4d5d7/detail.jpg');

insert into t_article values
(2, 'Cable and X-Force (2012) #18','Le grand mechant des X-Force STYFE est de retour!Et il reclame sa revanche contre l''homme qui l''a abandonné dans le temps : CABLE.','Marvel','Super-Hero','Cable and X-Force (2012) ',10,'http://i.annihil.us/u/prod/marvel/i/mg/3/d0/52c19468d8a45/detail.jpg');

insert into t_article values
(3, 'Ms. Marvel (2014) #19','She''s beat down basic baddies, stopped super-villains and even conquered her evil ex-crush. But now that Kamala Khan has finally found her stride as a hero, the planet''s gotta go and collide with an alternate Earth...Typical. When the world ends, where will Kamala spend her last days..?','Marvel','Super-Hero','Ms. Marvel (2014)',10,'http://x.annihil.us/u/prod/marvel/i/mg/8/c0/561bd4221fa7b/detail.jpg');

/*author*/
INSERT INTO `t_author` (`aut_id`, `aut_name`, `aut_firstname`) VALUES (NULL, 'Willow Wilson', 'Gwendolyn');
INSERT INTO `t_author` (`aut_id`, `aut_name`, `aut_firstname`) VALUES (NULL, 'Duggan', 'Gerry');
INSERT INTO `t_author` (`aut_id`, `aut_name`, `aut_firstname`) VALUES (NULL, 'Shalvey', 'Declan');
INSERT INTO `t_author` (`aut_id`, `aut_name`, `aut_firstname`) VALUES (NULL, 'Dennis', 'Hopeless');

INSERT INTO `t_article_author` (`art_id`, `aut_id`) VALUES ('3', '1');
INSERT INTO `t_article_author` (`art_id`, `aut_id`) VALUES ('1', '2');
INSERT INTO `t_article_author` (`art_id`, `aut_id`) VALUES ('1', '3');
INSERT INTO `t_article_author` (`art_id`, `aut_id`) VALUES ('2', '4');

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
