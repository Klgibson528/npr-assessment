<?php 

class Article{
    // Function will be used outside of class to collect all articles
    public function fetch_all() {
        global $pdo; 

        $query = $pdo->prepare('SELECT * FROM articles');
        $query->execute();

        // Returns multiple items in an array 
        return $query->fetchAll();
    }

    // Function will be used outside of class to collect a specific article
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