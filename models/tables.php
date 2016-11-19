<!--GENERATE ARRAY OF TABLES FROM DATA BASE-->
<?php

//Вибирає всі рядки в таблиці users БД bd і аганяє їх в массив $rows
    function rows_all($link){
    // Формуємо запит
        $query = "SELECT * FROM users ORDER BY date DESC";
        $result = mysqli_query($link, $query);
        
        if(!$result)
            die(mysqli_error($link));
        
    // Витягуєм данні
        $n = mysqli_num_rows($result);
        $rows = array();
        
        for ($i = 0; $i < $n; $i++)
        {
            $row = mysqli_fetch_assoc($result);
            $rows[] = $row;
        }
        
        return $rows;
    }
    
//Вибирає один єдиний запис в  таблиці user БД bd по id і повертає його як ассоціативний массив з ключами - назви полів таблиці
    function row_get($link, $id){
        $query = sprintf("SELECT * FROM users WHERE id=%d", (int)$id);
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        $row = mysqli_fetch_assoc($result);
        
        return $row;
    }
    
//РЕадізація добавленя данних в БД без AJAX. Тобто сторінка буде перегружатися після добавки
    function row_new($link, $name, $e_mail, $cite="-", $text, $ip, $br, $date){
        // Підготовка
        $name = trim($name);
        $e_mail = trim($e_mail);
        $cite = trim($cite);
        $text = trim($text);
        $ip = trim($ip);
        $br = trim($br);
		$date = trim($date);
        		
            
        // Провірка
        if ($name == '' || $e_mail == '' || $text == '')
            return false;//Зуинить виконання функції якщо хоч один з введених параметрів 0
        
        // Запрос
        $template_add = "INSERT INTO users (name, e_mail, cite, text, ip, brauser, date) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s')";
        
		//Провірка як виглядає дата $date
		//echo('<script type="javascript">alert('.$date.');</script>');//DON'T WEORK=-(
		
        $query = sprintf($template_add, 
                         mysqli_real_escape_string($link, $name),
                         mysqli_real_escape_string($link, $e_mail),
                         mysqli_real_escape_string($link, $cite),
                         mysqli_real_escape_string($link, $text),
                         mysqli_real_escape_string($link, $ip),
                         mysqli_real_escape_string($link, $br),
                         mysqli_real_escape_string($link, $date));
        
        //echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    }
    
//Реалізація редагування коментарів....    
    function row_edit($link, $id, $name, $date, $text){
        // Підготовка
        $name = trim($name);
        $text = trim($text);
        $date = trim($date);
        $id = (int)$id;
            
        // Провірка
        if ($name == '')
            return false;
        
        // Запит
        $template_update = "UPDATE users SET name='%s', text='%s', date='%s' WHERE id='%d'";
            
        $query = sprintf($template_update, 
                         mysqli_real_escape_string($link, $name),
                         mysqli_real_escape_string($link, $text),
                         mysqli_real_escape_string($link, $date),
                         $id);
        
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
	
	
	
//Видаляє комент
    function row_delete($link, $id){
        $id = (int)$id;
        // Провірка
        if ($id == 0)
            return false;
        
        // Запит
        $query = sprintf("DELETE FROM users WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }
    
//Генеруємо обмеженнний вступ до комментаря на 500 символів
    function row_intro($text, $len = 500)
    {
        return mb_substr($text, 0, $len);        
    }

?>