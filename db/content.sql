insert into t_genre values
('Super-Hero'),
('Romance'),
('Science-Fiction');

insert into t_editor values
('Marvel'),
('DC'),
('Vertigo');

insert into t_article values
(1, 'Deadpool (2012-2015) No. 15','THE GOOD, THE BAD & THE UGLY PART 1','Deadpool''s past in the Weapon X program comes back to haunt him. What else to do but call in help from Wolverine & Captain America?','Marvel','Super-Hero','Deadpool (2012-2015)',10);

insert into t_article values
(2, 'Cable and X-Force (2012) #18','Cable and X-Force (2012) #18','Classic X-Force villain STRYFE has returned! And he''s eager to exact his revenge on the man who left him broken and adrift in the timestream: CABLE. As Stryfe''s plan comes to bear, Hope is brought face-to-face with Bishop, the man who crusaded across centuries in a mission to exterminate her. But this time around, she''s ready to retaliate…and they''ll hold nothing back as they race to destroy one another. Don''t miss this no-holds-barred, knockdown, drag-out X-FORCE event! Because when the dust settles, only ONE X-Force team will be left standing… ','Marvel','Super-Hero','Cable and X-Force (2012) ',10);

insert into t_article values
(3, 'Ms. Marvel (2014) #19','Ms. Marvel (2014) #19','She''s beat down basic baddies, stopped super-villains and even conquered her evil ex-crush. But now that Kamala Khan has finally found her stride as a hero, the planet''s gotta go and collide with an alternate Earth...Typical. When the world ends, where will Kamala spend her last days..?','Marvel','Super-Hero','Ms. Marvel (2014)',10);


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
