<?php

class Author {
    private string $_lastname;
    private string $_firstname;
    private array $_books;

    public function __construct(string $lastname, string $firstname) {
        $this->_lastname = $lastname;
        $this->_firstname = $firstname;
        
        $this->_books = []; 
    }

    public function addBook(Book $book) {
        $this->_books[] = $book; // Recursion 
    }

    public function afficherBibliographie() {
        $result = "";
        foreach ($this->_books as $book) {
            $result .= $book;
        }
        return $result;
    }

    public function __toString():string {
        return "<h3>Livres de ".$this->getNomComplet()."</h3>" ;
    }

    public function getNomComplet() {
        return $this->_lastname." ".$this->_firstname;
    }

    public function getLastname() {
        return $this->_lastname;
    }

    public function getFirstName() {
        return $this->_firstname;
    }

    public function getBooks() {
        return $this->_books;
    }

    public function setLastname($lastname) {
        $this->_lastname = $lastname;
    }

    public function setFirstname($firstname) {
        $this->_firstname = $firstname;
    }
}