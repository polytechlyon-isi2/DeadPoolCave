create database if not exists deadpoolcave character set utf8 collate utf8_unicode_ci;

use deadpoolcave;


grant all privileges on deadpoolcave.* to 'cave_admin'@'localhost' identified by 'secret';