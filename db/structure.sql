drop table if exists t_genre;
drop table if exists t_editor;
drop table if exists t_article;
drop table if exists t_comment;
drop table if exists t_author;
drop table if exists t_user;
drop table if exists t_article_author;


create table t_genre (
    art_genre varchar(50) primary key
) engine=innodb character set utf8 collate utf8_unicode_ci;


create table t_editor (
    editor_name varchar(20) not null primary key
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_article (
    art_id integer not null primary key auto_increment,
    art_title varchar(100) not null,
    art_content varchar(2000),
    art_editor varchar(20),
    art_genre varchar(20),
    art_series varchar(50),
    art_price integer ,
    art_img varchar(150),

    constraint fk_art_gen foreign key(art_genre) references t_genre(art_genre),
    constraint fk_art_editor foreign key(art_editor) references t_editor(editor_name)
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

create table t_article_author (
  art_id integer,
  aut_id integer,

  constraint fk_aut_art foreign key(art_id) references t_article(art_id),
  constraint fk_art_aut foreign key(aut_id) references t_author(aut_id),

  primary key (art_id,aut_id)
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table t_commande (
    commande_userId integer not null,
    commande_artId integer not null,
    commande_etat boolean,
    constraint fk_commande_usr foreign key(commande_userId) references t_user(usr_id),
    constraint fk_commande_art foreign key(commande_artId) references t_article(art_id),

    primary key (commande_userId,commande_artId)
) engine=innodb character set utf8 collate utf8_unicode_ci;
