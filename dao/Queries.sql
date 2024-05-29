create database Snackbar;
use Snackbar;

create table Users(
    userId int primary key auto_increment,
    userName varchar(50) not null,
    userEmail varchar(50) not null,
    userPassword varchar(32) not null
);

insert Users values (null, "Aluno", "adm@aluno.com", "123");
insert Users values (null, "Professor", "adm@prof.com", "123");

create table Categories(
    categoryId int primary key auto_increment,
    categoryName varchar(50) not null
);

insert Categories (categoryName) values ("Lanches");
insert Categories (categoryName) values ("Porçoes");
insert Categories (categoryName) values ("Bebidas");
insert Categories (categoryName) values ("Sobremesas");

create table Products(
    productId int primary key auto_increment,
    categoryId int,
    productName varchar(50) not null,
    productDesc varchar(300) not null,
    productValue decimal(10, 2) not null,
    productStatus char(1) not null,
    productImage varchar(50) not null,
    FOREIGN KEY (categoryId) REFERENCES Categories(categoryId)
);

insert Products values (null, 1, "Blend Bacon Crispy", "Pão, molho especial, hamburguer 180g, queijo prato, tomate, alface, cream cheese, cebola e bacon.", 36.24, "A", "../../img/1.png");
insert Products values (null, 1, "Picanha Salada", "Pão, molho especial, hamburguer 150g, queijo prato, tomate e alface", 29.99, "A", "../../img/2.png");
insert Products values (null, 2, "Batata Frita", "Deliciosa e crocantes.", 24.99, "A", "../../img/4.png");
insert Products values (null, 2, "Frango", "Suculentos e picantes", 23.00, "A", "../../img/5.png");