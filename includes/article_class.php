<?php 

class Article{
    public function fetch_all() {
        global $pdo; 

        $query = $pdo->prepare('SELECT * FROM articles');
        $query->execute();

        // Returns multiple items in an array 
        return $query->fetchAll();
    }

    public function fetch_data($article_id) {
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM articles WHERE id=?');
        $query->bindValue(1, $article_id);
        $query->execute();

        // Returns a single item in an array
        return $query->fetch();

    }
}

?>