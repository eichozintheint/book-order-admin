<?php
include_once './includes/db.php';

class Book{
    private $con,$statement;

    public function getBooks(){
        $this->con=Database::connect();
        $sql='select books.title,categories.name as category,books.price ,books.stock,status.name as status,authors.name as author,publishers.name as publisher
            from books join categories join status join authors join publishers
            on books.category_id=categories.id and books.status_id=status.id and books.author_id=authors.id and books.publisher_id=publishers.id ';
        $this->statement=$this->con->prepare($sql);
        if($this->statement->execute()){
            $results=$this->statement->fetchAll(PDO::FETCH_ASSOC);   
            return $results;    
        }
    }

    public function addBook($title,$category,$price,$stock,$status,$author,$publisher,$description,$edition,$pages,$rating,$published_date,$discount){
        $this->con=Database::connect();
        $sql='INSERT INTO books (title,category_id,price,stock,status_id,author_id,publisher_id,description,edition,pages,rating,publish_date,discount)
             VALUES(:title,:category_id,:price,:stock,:status_id,:author_id,:publisher_id,:description,:edition,:pages,:rating,:published_date,:discount)';
        $this->statement=$this->con->prepare($sql);
        $this->statement->bindParam(':title',$title);
        $this->statement->bindParam(':category_id',$category);
        $this->statement->bindParam(':price',$price);
        $this->statement->bindParam(':stock',$stock);
        $this->statement->bindParam(':title',$title);
        $this->statement->bindParam(':status_id',$status);
        $this->statement->bindParam(':author_id',$author);
        $this->statement->bindParam(':publisher_id',$publisher);
        $this->statement->bindParam(':description',$description);
        $this->statement->bindParam(':edition',$edition);
        $this->statement->bindParam(':pages',$pages);
        $this->statement->bindParam(':rating',$rating);
        $this->statement->bindParam(':published_date',$published_date);
        $this->statement->bindParam(':discount',$discount);
        return $this->statement->execute();
    }
}

?>