
drop table if exists t_article;
drop table if exists t_comment;
drop table if exists t_author;


create table t_article (
art_id integer not null primary key auto_increment,
art_ref varchar(100),
art_title varchar(100) not null,
art_content varchar(2000),
art_editor varchar(20),
art_genre varchar(20),
art_series varchar(50),
art_price integer 
);


create table t_comment (
    com_id integer not null primary key auto_increment,
    com_author varchar(100) not null,
    com_content varchar(500) not null,
    art_id integer not null,
    constraint fk_com_art foreign key(art_id) references t_article(art_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;


create table t_author (
    aut_id integer not null primary key auto_increment,
    aut_name varchar(50) not null,
    aut_firstname varchar(50)
) engine=innodb character set utf8 collate utf8_unicode_ci;
