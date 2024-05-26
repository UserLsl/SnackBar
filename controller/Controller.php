<?php

abstract class Controller {
    protected static function isProtected() {

        if (!isset($_SESSION['id'])) {
            header("Location: /snackbar/index");
        }
    }
}