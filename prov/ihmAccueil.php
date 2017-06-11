<?php

session_start();

if (empty($_SESSION['idStagiaire'])) {
    header('Location: index.php');
    exit;
}

