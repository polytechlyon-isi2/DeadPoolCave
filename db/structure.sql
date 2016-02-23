drop table if exists t_article;


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

drop table if exists t_author;


create table t_author (

    aut_id integer not null primary key auto_increment,
    
    aut_name varchar(50) not null,
    
    aut_firstname varchar(50)
    
    
)) engine=innodb character set utf8 collate utf8_unicode_ci;