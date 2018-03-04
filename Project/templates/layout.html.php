<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/jokes.css">
        <title><?= $title ?></title>
    </head>
    <body>
        <header>
            <h1>Internet Joke Database</h1>
        </header>
        <nav>
        	<ul>
        		<li><a href="index.php">Home</a></li>
                <li><a href="jokes.php">Jokes List</a></li>
                <li><a href="editjoke.php">Add new joke</a></li>
        	</ul>
        </nav>
        <main>
            <?= $output ?>
		</main>
        <footer>
            &copy; IJDB 2017
        </footer>
    </body>
</html>