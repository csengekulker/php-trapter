create database trapter
character set utf8
collate utf8_hungarian_ci;

grant all privileges on trapter.*
to root@localhost identified by '';

use trapter;

create table calc (
    id int not null primary key auto_increment,
    a_side int,
    b_side int,
    c_side int,
    d_side int,
    area double
);