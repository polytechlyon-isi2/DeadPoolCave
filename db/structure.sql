drop table if exists t_article;


create table t_article (

art_id integer not null primary key auto_increment,

art_title varchar(100) not null,

art_content varchar(2000),

art_author varchar(50) not null,

art_genre varchar(20),
    
art_price integer 

) engine=innodb character set utf8 collate utf8_unicode_ci;