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
    * Article price.
    *
    * @var string
    */
    private $price;

    /**
     * Article title.
     *
     * @var string
     */
    private $title;

    /**
     * Article serie.
     *
     * @var string
     */
    private $serie;

    /**
     * Article genre.
     *
     * @var string
     */
    private $genre;

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

    /**
    * Article picture
    *
    * @var string
    */
    private $img;


    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
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

    public function getSerie(){
        return $this->serie;
    }

    public function setSerie($serie){
        $this->serie = $serie;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }
}
