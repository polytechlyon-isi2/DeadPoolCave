drop table if exists t_genre;
drop table if exists t_article;
drop table if exists t_comment;
drop table if exists t_author;
drop table if exists t_user;


create table t_genre (
    art_genre varchar(50) primary key
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_article (
    art_id integer not null primary key auto_increment,
    art_ref varchar(100),
    art_title varchar(100) not null,
    art_content varchar(2000),
    art_editor varchar(20),
    art_genre varchar(20),
    art_series varchar(50),
    art_price integer ,
    
    constraint fk_art_gen foreign key(art_genre) references t_genre(art_genre)
);
create table t_user (

    usr_id integer not null primary key auto_increment,

    usr_name varchar(50) not null,

    usr_password varchar(88) not null,

    usr_salt varchar(23) not null,

    usr_role varchar(50) not null 

) engine=innodb character set utf8 collate utf8_unicode_ci;


create table t_comment (

    com_id integer not null primary key auto_increment,

    com_content varchar(500) not null,

    art_id integer not null,

    usr_id integer not null,

    constraint fk_com_art foreign key(art_id) references t_article(art_id),

    constraint fk_com_usr foreign key(usr_id) references t_user(usr_id)

) engine=innodb character set utf8 collate utf8_unicode_ci;


create table t_author (
    aut_id integer not null primary key auto_increment,
    aut_name varchar(50) not null,
    aut_firstname varchar(50)
) engine=innodb character set utf8 collate utf8_unicode_ci;




