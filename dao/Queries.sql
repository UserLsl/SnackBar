create database snackbar;
use snackbar;

create table user(
    id int primary key auto_increment,
    nome varchar(50) not null,
    email varchar(50) not null,
    senha varchar(32) not null
);

insert user values (0, "Lucas", "lucassartorelli10@outlook.com", "123");
