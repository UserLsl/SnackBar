<?php

class PedidoModel {

    public static function consultarTodos() {
        include_once 'dao/PedidoDAO.php';
        $dao = new PedidoDAO();

        $sql = $dao->selecionarTodos();

        if ($sql->rowCount() > 0) {
            return $sql->fetchall();
        } else {
            return 'Nenhum registro encontrado!';
        }
    }

    public static function consultarG1() {
        include_once 'dao/PedidoDAO.php';
        $dao = new PedidoDAO();

        $sql = $dao->selecionarG1();

        if ($sql->rowCount() > 0) {
            return $sql->fetchall();
        } else {
            return 'Nenhum registro encontrado!';
        }
    }

    public static function consultarG2() {
        include_once 'dao/PedidoDAO.php';
        $dao = new PedidoDAO();

        $sql = $dao->selecionarG2();

        if ($sql->rowCount() > 0) {
            return $sql->fetchall();
        } else {
            return 'Nenhum registro encontrado!';
        }
    }

    public static function consultarG3() {
        include_once 'dao/PedidoDAO.php';
        $dao = new PedidoDAO();

        $sql = $dao->selecionarG3();

        if ($sql->rowCount() > 0) {
            return $sql->fetchall();
        } else {
            return 'Nenhum registro encontrado!';
        }
    }
}