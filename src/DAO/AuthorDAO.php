<?php

namespace DeadPoolCave\DAO;

use DeadPoolCave\Domain\Author;

class AuthorDAO extends DAO
{

    /**
     * Return a list of all author.
     *
     * @return array A list of all editors.
     */
    public function findAll() {
        $sql = "select * from t_author order by aut_name asc";
        $result = $this->getDb()->fetchAll($sql);
        // Convert query result to an array of domain objects
        $authors = array();
        foreach ($result as $row) {
            $authorName = $row['aut_name'];
            $authors[$authorName] = $this->buildDomainObject($row);
        }
        return $authors;
    }

    /**
     * Return a list of all author.
     *
     * @return array A list of all editors.
     */
    public function findByArticle($article) {
        $sql = "select * from t_author where aut_id IN (select aut_id from t_article_author where art_id = ?)";
        $result = $this->getDb()->fetchAll($sql, array($article));
        // Convert query result to an array of domain objects
        $authors = array();
        foreach ($result as $row) {
            $authorName = $row['aut_name'];
            $authors[$authorName] = $this->buildDomainObject($row);
        }
        return $authors;
    }

     /**
     * Creates a Genre object based on a DB row.
     *
     * @param array $row The DB row containing Genre data.
     * @return \DeadPoolCave\Domain\Editor
     */
    protected function buildDomainObject($row) {
        $author = new Author();
        $author->setId($row['aut_id']);
        $author->setName($row['aut_name']);
        $author->setFirstName($row['aut_firstname']);
        return $author;
    }

}
