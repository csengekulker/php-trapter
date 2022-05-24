create database trapter2
character set utf8
collate utf8_hungarian_ci;

grant all privileges on trapter2.*
to trapter2@localhost identified by '1234';

use trapter2;

create table calc (
    id int not null primary key auto_increment,
    a_side int,
    b_side int,
    c_side int,
    d_side int,
    area double
);