<?php
session_start();
require_once 'class.user.php';

session_destroy();
        unset($_SESSION['user_session']);
        return true;
?>