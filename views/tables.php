<!--GANERATE LOOK OF TABLES FOR USER-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>User knyga skarg</title>
        <link rel="stylesheet" href="style.css"/>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="index.php">Книга скарг</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="admin">Панель модератора</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header (navbar) -->
            <?php foreach($rows as $row): ?>
            <div class="article">
                <h3><a href="views/row.php?id=<?=$row['id']?>"><?=$row['name']?></a></h3>
                <em>Опубликованно: <?=$row['date']?></em>
                <p><?=row_intro($row['text'])?></p>
            </div>
            <?php endforeach ?>
            </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php?action=add">Створити коментар</a></li>
                    </ul>
            </div>
            <footer>
                <p>
                    Книга скарг<br/>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</html>