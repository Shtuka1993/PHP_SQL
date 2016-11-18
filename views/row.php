<!--GANERATE LOOK OF ROW FOR USER-->

<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset='utf-8'>
        <title> Книга скарг</title>
        <link rel="stylesheet" href="style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <!-- Page div -->
        <div class="container">
            <!-- Header -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a id="blog" class="navbar-brand" href="../index.php"> Книга скарг</a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="../admin">Панель модератора</a></li>
                    </ul>
                </div>
            </nav> 
            <!-- END Header -->
            <!-- Content -->
            <div class="article">
				<h3><?=$row['name']?></h3>
				<address><?=$row['e_mail']?></address>
				<a href="<?$row['cite']?>"><b><?$row['cite']?><b></a>
                <em>Опублікованно: <?=$row['date']?></em>
                <p><?=$row['text']?></p>
            </div>
            <!-- END Content -->
            <!-- Footer -->
            <footer>
                <p>
                    Книга скарг<br>Copyright &copy; 2016
                </p>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page div -->
    </body>
</hmtl>