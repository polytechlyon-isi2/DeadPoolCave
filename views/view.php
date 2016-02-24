<!doctype html>

<html>

<head>
    <meta charset="utf-8" />
    <link href="cave.css" rel="stylesheet" />
    <title>Deadpool Cave - Home</title>
</head>

<body>
    <header>
        <h1>Deadpool Cave</h1>
    </header>
    
    
<?php
    foreach ($articles as $article): ?>

    <article>

        <h2><?php echo $article['art_title'] ?></h2>

        <p><?php echo $article['art_content'] ?></p>

    </article>

    <?php endforeach ?>

    <footer class="footer">
    </footer>

</body>

</html>