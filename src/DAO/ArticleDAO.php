<?php

namespace DeadPoolCave\DAO;

use DeadPoolCave\Domain\Article;

class ArticleDAO extends DAO
{
    /**
     * Return a list of all articles, sorted by date (most recent first).
     *
     * @return array A list of all articles.
     */
    public function findAll() {
        $sql = "select * from t_article order by art_id desc";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $articles = array();
        foreach ($result as $row) {
            $articleId = $row['art_id'];
            $articles[$articleId] = $this->buildDomainObject($row);
        }
        return $articles;
    }

    /**
     * Creates an Article object based on a DB row.
     *
     * @param array $row The DB row containing Article data.
     * @return \DeadPoolCave\Domain\Article
     */
    protected function buildDomainObject($row) {
        $article = new Article();
        $article->setId($row['art_id']);
        $article->setTitle($row['art_title']);
        $article->setContent($row['art_content']);
        $article->setPrice($row['art_price']);
        $article->setImg($row['art_img']);
        $article->setSerie($row['art_series']);
        $article->setGenre($row['art_genre']);
        return $article;
    }

    /**
     * Returns an article matching the supplied id.
     *
     * @param integer $id
     *
     * @return \DeadPoolCave\Domain\Article|throws an exception if no matching article is found
     */
    public function find($id) {
        $sql = "select * from t_article where art_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row)
            return $this->buildDomainObject($row);
        else
            throw new \Exception("No article matching id " . $id);
    }


    /**
     * Returns a list of all articles in the cart.
     *
     * @param integer $usrId
     *
     */
    public function findByCart($usrId){
        $sql = "select * from t_article inner join t_commande on t_commande.commande_artId = t_article.art_id where t_commande.commande_userId = ?";
            $result = $this->getDb()->fetchAll($sql, array($usrId));
        $articles = array();
        foreach ($result as $row) {
            $articleId = $row['art_id'];
            $articles[$articleId] = $this->buildDomainObject($row);
        }
        return $articles;
    }


    /**
     * Add an article in the cart.
     *
     * @param integer $usrId
     * @param integer $artId
     *
     */
    public function addToCart($artId, $usrId){
      $sql = "select * from t_commande where commande_userId=? and commande_artId=?";
      $row = $this->getDb()->fetchAssoc($sql, array($usrId,$artId));

      if (!$row){
        $articleData = array(
            'commande_userId' => $usrId,
            'commande_artId' => $artId,
            );
        $this->getDb()->insert('t_commande',$articleData);
      }
    }

    /**
     * Returns an list of article matching the supplied genre.
     *
     * @param String $genre
     *
     * @return \DeadPoolCave\Domain\Genre|throws an exception if no matching genre is found
     */
    public function findByGenre($genre) {
        $sql = "select * from t_article where art_genre = ? order by art_id desc";
        $result = $this->getDb()->fetchAll($sql, array($genre));
        $articles = array();
        foreach ($result as $row) {
            $articleId = $row['art_id'];
            $articles[$articleId] = $this->buildDomainObject($row);
        }
        return $articles;
    }

    /**
     * Returns an list of article matching the supplied name.
     *
     * @param String $begin
     * @param String $end
     *
     */
    public function findByName($begin,$end) {
        $sql = "select * from t_article where art_ref > ? AND art_ref < ?";
        $result = $this->getDb()->fetchAll($sql, array($begin,$end));
        $articles = array();
        foreach ($result as $row) {
            $articleId = $row['art_id'];
            $articles[$articleId] = $this->buildDomainObject($row);
        }
        return $articles;
    }

    /**
     * Returns an list of article matching the supplied author.
     *
     * @param String $begin
     * @param String $end
     *
     */
    public function findByAuthor($begin,$end) {
        $sql = "select * from t_article where art_id IN
        (select art_id from t_article_author where aut_id IN
        (select aut_id from t_author where aut_name > ? AND aut_name < ?))";
        $result = $this->getDb()->fetchAll($sql, array($begin,$end));
        $articles = array();
        foreach ($result as $row) {
            $articleId = $row['art_id'];
            $articles[$articleId] = $this->buildDomainObject($row);
        }
        return $articles;
    }

    /**
     * Returns an list of article matching the supplied editor.
     *
     * @param String $editor
     *
     */
    public function findByEditor($editor) {
        $sql = "select * from t_article where art_editor = ?";
        $result = $this->getDb()->fetchAll($sql, array($editor));
        $articles = array();
        foreach ($result as $row) {
            $articleId = $row['art_id'];
            $articles[$articleId] = $this->buildDomainObject($row);
        }
        return $articles;
    }


    /**
     * Saves an article into the database.
     *
     * @param \DeadPoolCave\Domain\Article $article The article to save
     */
    public function save(Article $article) {
        $articleData = array(
            'art_title' => $article->getTitle(),
            'art_content' => $article->getContent(),
            );

        if ($article->getId()) {
            // The article has already been saved : update it
            $this->getDb()->update('t_article', $articleData, array('art_id' => $article->getId()));
        } else {
            // The article has never been saved : insert it
            $this->getDb()->insert('t_article', $articleData);
            // Get the id of the newly created article and set it on the entity.
            $id = $this->getDb()->lastInsertId();
            $article->setId($id);
        }
    }

    /**
     * Removes an article from the database.
     *
     * @param integer $id The article id.
     */
    public function delete($id) {
        // Delete the article
        $this->getDb()->delete('t_article', array('art_id' => $id));
    }

}
