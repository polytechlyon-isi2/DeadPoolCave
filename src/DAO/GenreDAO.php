<?php

namespace DeadPoolCave\DAO;

use DeadPoolCave\Domain\Genre;

class GenreDAO extends DAO
{

    /**
     * Return a list of all genres.
     *
     * @return array A list of all genres.
     */
    public function findAll() {
        $sql = "select * from t_genre order by art_genre";
        $result = $this->getDb()->fetchAll($sql);

        // Convert query result to an array of domain objects
        $genres = array();
        foreach ($result as $row) {
            $genresName = $row['art_genre'];
            $genres[$genresName] = $this->buildDomainObject($row);
        }
        return $genres;
    }

     /**
     * Creates a Genre object based on a DB row.
     *
     * @param array $row The DB row containing Genre data.
     * @return \DeadPoolCave\Domain\Genre
     */
    protected function buildDomainObject($row) {
        $genre = new Genre();
        $genre->setName($row['art_genre']);
        return $genre;
    }

}
