<!--GANERATE LOOK FOR TABLES FOR ADMIN-->

<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Книга скарг</title>
        <link rel="stylesheet" href="../style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!-- Header (navbar) -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php">Книга скарг</a>
            </nav> 
            <!-- END Header (navbar) -->
            <table id="admin_table" class="table">
                <tr>
                    <th>Дата</th>
                    <th>Ім'я</th>
					<th>Коментар</th>
					<th>ІР</th>
					<th>БРАУЗЕР</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?=$row['date']?></td>
                        <td><?=row_intro($row['name'], 80)?></td>
                        <td><?=row_intro($row['text'], 500)?></td>
                        <td><?=row_intro($row['ip'], 80)?></td>
                        <td><?=row_intro($row['brauser'], 80)?></td>
						<td>
                            <a href="index.php?action=edit&id=<?=$row['id']?>">Редагувати</a>
                        </td>
                        <td>
                            <a href="index.php?action=delete&id=<?=$row['id']?>">Видалить</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
            <footer>
                <p>
                    Блог<br>Copyright &copy; 2016
                </p>
            </footer>
        </div>
    </body>
</hmtl>
