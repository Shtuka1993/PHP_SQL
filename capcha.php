<!--GANERATOR OF CAPTCHA FROM DATABASE-->

<?php

//CAPCHA's information

    /*
    $id=1;
    echo "<img src='capcha/1.gif'/>";
    $key='v4xbg';

    $id=2;
    echo "<img src='capcha/2.gif'/>";
    $key='w68p';

    $id=3;
    echo "<img src='capcha/3.jpeg'/>";
    $key='qgphjd';

    $id=4;
    echo "<img src='capcha/4.png'/>";
    $key='viearer';

    $id=5;
    echo "<img src='capcha/5.jpeg'/>";
    $key='smwm';

    */

//Simple captcha generator//Without data base...
    function simpleCapcha(){
        
        $num = rand(1,5);
        $src = "";
        $key = "";
        
        
        switch($num){
            
            case 1:
                $src="capcha/1.gif";
                $key='v4xbg';
                break;
                
            case 2:
                $src="capcha/2.gif";
                $key='w68p';
                break;
            
            case 3:
                $src="capcha/3.jpeg";
                $key='qgphjd';
                break;
            
            case 4:
                $src="capcha/4.png";
                $key='viearer';
                break;
            
            case 5:
                $src="capcha/5.jpeg";
                $key='smwm';
                break;
        
        }
        echo $src." <=> $key"."<br />";
        echo 'CAPCHA : <img src="'.$src.'"/>';
        
    }
    //THIS IS TEST
    simpleCapcha();
    
    function ($link){
        $num = rand(1,5);
        mysqli_query();
    }

?>