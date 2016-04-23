<?php

namespace DeadPoolCave\Domain;

class Article 
{
    /**
     * Article id.
     *
     * @var integer
     */
    private $id;
    
    /**
    * Article reference.
    *
    * @var string
    */    
    private $ref;

    /**
     * Article title.
     *
     * @var string
     */    
    private $title;

    /**
     * Article content.
     *
     * @var string
     */
    private $content;
    
    /**
    * Article editor
    *
    * @var string
    */
    private $editor;
    
    private $img;
     

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getContent() {
        return $this->content;
    }

    public function setContent($content) {
        $this->content = $content;
    }
    
    public function getImg(){
        return $this->img;
    }
    
    public function setImg($img){
        $this->img = $img;
    }
}