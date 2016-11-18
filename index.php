<!--USER-->

<?php
    require_once("database.php");
    require_once("models/tables.php");
	require_once("web.php");
    
    $link = db_connect();
    $rows = rows_all($link);
    
    //Отриаємо подію
    if(isset($_GET['action']))
        $action = $_GET['action'];
    else    $action = "";
    
    //Перевірка події перед перемальовкою, чи був доданний коментар(передача іде по методу POST)
    if($action=="add"){
        if(!empty($_POST)){
			$br = getBrowser();
			$ip = getIp();
            row_new($link,$_POST['name'],$_POST['e_mail'],$_POST['cite'],$_POST['text'],$ip,$br,$_POST['date']);
            header("Location: index.php");
        }
        //Показуємо форму додавання коментарів
        include("views/comment.php");
    }
    else
		include("views/tables.php");
    
?>