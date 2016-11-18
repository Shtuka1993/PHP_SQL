<!--MODULE CONECT TO DATABASE-->

<?php

    //Define variables for using database
    define('MYSQL_SERVER', 'localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB', 'bd');
    
    //Function for connecting to DB 
    function db_connect(){
        $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)//conect to DB using const var 
            or die("Error: ".mysqli_error($link));//If some error, something wrong => SHOw that error
        if(!mysqli_set_charset($link, "utf8")){//Testing of charset
            printf("Error: ".mysqli_error($link));}//If some error show IT
    
    return $link;//RETURN OF LINK TO DB
}

?>