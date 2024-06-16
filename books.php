<?php
include_once 'layout/header.php';
include_once 'controller/BookController.php';

$book_controller=new BookController();
$books=$book_controller->getBooks();
// var_dump($books);
?>

<main>
    <div class="container-fluid px-4">
        <h1>Book Lists</h1>
        <div class="my-4">
            <a href="bookCreate.php" class="btn btn-secondary">Create New Book</a>
        </div>
        <table class="table table-striped" id="myTable">
            <thead>
                <th>No</th>
                <th>Title</th>
                <th>Category</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Author</th>
                <th>Publisher</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                    $i=0;
                    foreach($books as $book){
                        echo "<tr>";
                        echo "<td>".(++$i)."</td>";
                        echo "<td>".$book['title']."</td>";
                        echo "<td>".$book['category']."</td>";
                        echo "<td>".$book['price']."</td>";
                        echo "<td>".$book['stock']."</td>";
                        echo "<td>".$book['status']."</td>";
                        echo "<td>".$book['author']."</td>";
                        echo "<td>".$book['publisher']."</td>";
                        echo "<td>";

                        echo "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</main>

<?php
include_once 'layout/footer.php';
?>