<?php 
    // Connecting to Database and Article class
    include_once('includes/connection.php');
    include_once('includes/article_class.php');

    $article = new Article;
    $articles = $article->fetch_all();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/style.css">
    <title>Article CMS</title>
</head>
<body>
    <div class="container">
    <ol>
    <?php foreach ($articles as $article) { ?>
        <li>
            <a href="article.php?id=<?php echo $article['id']; ?>">
            <?php echo $article['article_title']; ?>
            </a>
             - <small>posted <?php echo date('D jS M Y', $article['article_timestamp']); ?></small>
        </li>
    
    <?php } ?>
    </ol>
    </div>
</body>
</html>