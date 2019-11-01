<?php 
    include_once('includes/connection.php');
    include_once('includes/article_class.php');

    // Instatiate the class
    $article = new Article;

        // Checkng if any query parameters were passed and set variables
        if(!empty($_GET)){
            if(isset($_GET['id'])){
            $id = $_GET['id'];
            $data = $article->fetch_data($id);
            }
        } else {
            header('Location: index.php');
            exit();
        }
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
        <a href="index.php">Go Home</a>
        <h4><?php echo $data['article_title'];?> </h4>
        - <small>posted <?php echo date('D jS M Y', $data['article_timestamp']); ?></small>
        <p class="article-contents"><?php echo $data['article_content']; ?></p>
        <a href="index.php">&larr; Back</a>
    </div>
</body>
</html>