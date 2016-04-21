<?php

namespace DeadPoolCave\Domain;

class Editor
{

    /**
     * Editor name.
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
