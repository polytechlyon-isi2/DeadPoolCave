insert into t_article values
(1, 'Deadpool (2012-2015) No. 15','THE GOOD, THE BAD & THE UGLY PART 1','Deadpool''s past in the Weapon X program comes back to haunt him. What else to do but call in help from Wolverine & Captain America?','Marvel','Super-Hero','Deadpool (2012-2015)',10);

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