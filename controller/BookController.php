<?php
include_once './model/Book.php';

class BookController{
    private $book;

    public function __construct(){
        $this->book=new Book();
    }

    public function getBooks(){
        return $this->book->getBooks();
    }

    public function addBook($title,$category,$price,$stock,$status,$author,$publisher,$description,$edition,$pages,$rating,$published_date,$discount){
        return $this->book->addBook($title,$category,$price,$stock,$status,$author,$publisher,$description,$edition,$pages,$rating,$published_date,$discount);
    }


}
?>