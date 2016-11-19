<!--ADMIN-->

<?php

    require_once("../database.php");
    require_once("../models/tables.php");
        
    $link = db_connect();
    
    $article['title']='';
    $article['date']='';
    $article['content']='';
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";
    
   if($action == 'edit'){
        if(!isset($_GET['id']))
            header('Location: index.php');
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0) {
            row_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        
        $row = row_get($link, $id);
        include("../views/row_admin.php");  
    }else if($action == 'delete'){
        $id = $_GET['id'];
        $row = row_delete($link, $id);
        header('Location: index.php');
    }
    else{
        $rows = rows_all($link);
        include("../views/tables_admin.php");        
    }

?>