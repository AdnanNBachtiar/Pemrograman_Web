-- create database abd table
create database crud_db;

use crud_db;

create table users (
    id int(11) not null auto_increment,
    nama varchar(100),
    email varchar(100),
    mobile varchar(15),
    primary key (id);
);