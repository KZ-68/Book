<?php

class Book {
    private string $_title;
    private int $_publishedYear;
    private int $_pages;
    private float $_price;
    private Author $_author;

    public function __construct(string $title, int $publishedYear, int $pages, float $price, Author $author) {
        $this->_title = $title;
        $this->_publishedYear = $publishedYear;
        $this->_pages = $pages;
        $this->_price = $price;

        $this->_author = $author;
        $this->_author->addBook($this); // Recursion
    }

    public function __toString():string {
        return "".$this->_title." (".$this->_publishedYear.")  : ".$this->_pages." pages / ".$this->_price." € <br/>";
    }

    public function getTitle() {
        return $this->_title;
    }

    public function getPublishedYear() {
        return $this->_publishedYear;
    }

    public function getPages() {
        return $this->_pages;
    }

    public function getPrice() {
        return $this->_price;
    }

    public function getAuthor() {
        return $this->_author;
    }

    public function setTitle($title) {
        $this->_title = $title;
    }

    public function setPublishedyear($publishedYear) {
        $this->_publishedYear = $publishedYear;
    }

    public function setPages($pages) {
        $this->_pages = $pages;
    }

    public function setPrice($price) {
        $this->_price = $price;
    }

    public function setAuthor($author) {
        $this->_author = $author;
    }

}