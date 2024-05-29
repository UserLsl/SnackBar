<?php

class PedidoDAO {
    private $db;

    public function __construct() {
        include_once 'dao/Database.php';
        $pdo = new MySQL();
        $this->db = $pdo;
    }

    public function selecionarTodos() {
        $sql = $this->db->query("select Orders.orderId, orderClient, orderDate, SUM(OrdersItems.itemValue) as orderTotal, orderStatus from Orders inner join OrdersItems on OrdersItems.orderId = Orders.orderId where orderStatus = 'Aberto' group by orderId, orderClient, orderDate, orderStatus order by orderStatus, orderDate desc;");
        return $sql;
    }

    public function selecionarG1() {
        $sql = $this->db->query("select DATE_FORMAT(orderDate,'%d/%m') as 'date', SUM(OrdersItems.itemValue) as 'value' from Orders inner join OrdersItems on OrdersItems.orderId = Orders.orderId group by orderDate limit 5;");
        return $sql;
    }

    public function selecionarG2() {
        $sql = $this->db->query("select DATE_FORMAT(orderDate,'%d/%m') as 'date', COUNT(orderId) as 'quant' from Orders group by orderDate limit 5;");
        return $sql;
    }

    public function selecionarG3() {
        $sql = $this->db->query("select COUNT(Categories.categoryId) as 'quant', Categories.categoryName from Products inner join Categories on Categories.categoryId = Products.categoryId group by Categories.categoryId, Categories.categoryName;");
        return $sql;
    }

}