<!--USER FORM TO ADD COMMENT-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>New comment</title>
        <link rel="stylesheet" href="../style.css"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php">Книга скарг</a>
                    </div>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <div id="addart">
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                    <label>
                        Ім\'я
                        <input type="text" name="name" value="<?=$row['name']?>" class="form-item" autofocus required/>
                    </label>
					<label>
                        Емейл
                        <input type="text" name="e_mail" value="<?=$row['e_mail']?>" class="form-item" autofocus required/>
                    </label>
					<label>
                        Сайт
                        <input type="text" name="cite" value="<?=$row['cite']?>" class="form-item" autofocus/>
                    </label>
                    <label>
                        Дата
                        <input type="date" name="date" value="<?=$row['date']?>" class="form-item" required>
                    </label>
                    <div class="container-fluid">
                        <ul class="nav navbar-nav navbar-right">
                            <!--ВСТАВКА ДЛЯ КАПЦІ CAPCHA-->
                        </ul>
                    </div>
                    <label>
                        Коментар
                        <textarea class="form-item" name="text" required><?=$row['text']?></textarea>
                    </label>
                    <input type="submit" value="Сохранить" class="btn"/>
                </form>
            </div>
            <footer>
                <p>
                    Книга скарг<br/>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</html>