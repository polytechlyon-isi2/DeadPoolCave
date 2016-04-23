<?php

namespace DeadPoolCave\Domain;

class Editor
{

    /**
     * Author id.
     *
     * @var integer
     */
    private $id;

    /**
     * author name.
     *
     * @var string
     */
    private $name;

    /**
     * author first name.
     *
     * @var string
     */
    private $firstName;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }
}
