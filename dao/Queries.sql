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
insert Products values (null, 4, "Frango", "Suculentos e picantes", 23.00, "A", "../../img/5.png");

CREATE TABLE Orders (
    orderId INT AUTO_INCREMENT PRIMARY KEY,
    orderClient varchar(50),
    orderDate DATETIME NOT NULL,
    orderStatus CHAR(20)
);

CREATE TABLE OrdersItems (
    itemId INT AUTO_INCREMENT PRIMARY KEY,
    orderId INT,
    productId INT,
    itemQuant INT NOT NULL,
    itemValue DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (orderId) REFERENCES Orders(orderId),
    FOREIGN KEY (productId) REFERENCES Products(productId)
);

insert Orders values (null, "João", Now(), "Aberto");
insert OrdersItems values (null, 1, 1, 1, 23.00);
insert OrdersItems values (null, 1, 2, 1, 20.00);

insert Orders values (null, "Maria", Now(), "Aberto");
insert OrdersItems values (null, 2, 1, 1, 23.00);

insert Orders values (null, "José", Now(), "Aberto");
insert OrdersItems values (null, 3, 1, 1, 30.00);
insert OrdersItems values (null, 3, 2, 1, 20.00);
insert OrdersItems values (null, 3, 4, 2, 10.00);

insert Orders values (null, "Lucas", '2024-05-28', "Fechado");
insert OrdersItems values (null, 4, 1, 1, 23.00);
insert OrdersItems values (null, 4, 2, 1, 20.00);

insert Orders values (null, "Carlos", '2024-05-27', "Fechado");
insert OrdersItems values (null, 5, 2, 2, 23.00);

insert Orders values (null, "Bianca", '2024-05-26', "Fechado");
insert OrdersItems values (null, 6, 1, 3, 23.00);

-- tabela
select Orders.orderId, orderClient, orderDate, SUM(OrdersItems.itemValue) as orderTotal, orderStatus from Orders inner join OrdersItems on OrdersItems.orderId = Orders.orderId where orderStatus = 'Aberto' group by orderId, orderClient, orderDate, orderStatus order by orderStatus, orderDate desc;

-- grafico 1
select DATE_FORMAT(orderDate,'%d/%m') as 'date', SUM(OrdersItems.itemValue) as 'value' from Orders inner join OrdersItems on OrdersItems.orderId = Orders.orderId group by orderDate limit 5;

-- grafico 2
select DATE_FORMAT(orderDate,'%d/%m') as 'date', COUNT(orderId) as 'quant' from Orders group by orderDate limit 5;

-- grafico 3
select COUNT(Categories.categoryId) as 'quant', Categories.categoryName from Products inner join Categories on Categories.categoryId = Products.categoryId group by Categories.categoryId, Categories.categoryName;