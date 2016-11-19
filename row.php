<?php
    require_once("database.php");
    require_once("models/tables.php");
    
    $link = db_connect();
    $row = row_get($link,$_GET['id']);
    
    include("views/row.php");
?>