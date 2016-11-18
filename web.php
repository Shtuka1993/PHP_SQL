<!--FUNCTIONS FOR GETING WEB INFO FROM USER BROUSER AND IP-ADRESS-->

<?php

    function getBrowser(){
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = '-';
        $platform = '-';
        $version = '';
        
        //Спочатку отримаємо інфорсмацію про платформу
        if(preg_match('/linux/i',$u_agent)){
            $platform = 'Linux';
        } elseif (preg_match('/macintsh|macos x/i',$u_agent)){
            $platform = 'Mac';
        } elseif (preg_match('/windows|win32/i',$u_agent)){
            $platform = 'Windows';
        } 
        
        //Тепер отримає інформацію про браузер
        if(preg_match('/MSIE/i',$u_agent)&&!preg_match('/Opera/i',$u_agent)){
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i',$u_agent)){
            $bname = 'Mozilla Firefox';
            $ub = 'Firefox';
        } elseif (preg_match('/Chrome/i',$u_agent)){
            $bname = 'Google Chrome';
            $ub = 'Chrome';
        } elseif (preg_match('/Safari/i',$u_agent)){
            $bname = 'Apple Safari';
            $ub = 'Safari';
        } elseif (preg_match('/Oper/i',$u_agent)){
            $bname = 'Opera';
            $ub = 'Opera';
        } elseif (preg_match('/Netscape/i',$u_agent)){
            $bname = 'Netscape';
            $ub = 'Netscape';
        }
        
        /*
        //Тепер(Нарешті) отримаємо номер версії
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>'.join('|',$Known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
        
        if(!preg_match_all($pattern, $u_agent, $matches)) {
            //Нема ніяких збігів, просто продовжуєм???... //ЧО ЗА ХРЕНЬ НАХУЯ!!!
        }
        
        //Подивимось як багато ми маємо?
        $i = count($matches['browser']);
        
        if($i!=1){
            //
        }
        //ФІГНЯ ЯКАСЬ!?!...
        */
        
        return $platform.' '.$bname. ' ';
                
    }
    
    //Функція для отримання ІР-адресси
    function getIp(){//ПОКИЩО ЦЕ НЕ ПРАЦЮЄ!!!!!//ПРОСТО ТЕСТ
        return $resalt="1.2.3.4.5.6.7";
    }
	
	//echo getBrowser();
	//echo '<br>'.getIp();

?>