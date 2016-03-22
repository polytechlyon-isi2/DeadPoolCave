<?php

namespace DeadPoolCave\Domain;

class Genre
{

    /**
     * Genre name.
     *
     * @var string
     */
    private $name;


    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}
