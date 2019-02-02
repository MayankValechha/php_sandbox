<?php 

    require ('config/db.php');
    //Checking for submit
    if(isset($_POST['submit'])){

        //Grabbing form data.
        $title = $_POST['title'];
        $body = $_POST['body'];
        $author = $_POST['author'];

        //Creating a Query to insert data
        $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$body', '$author')";

        if(mysqli_query($conn, $query)){
            header('Location: http://localhost/php_sandbox/website8');
        } else {
            echo 'Connection Error' .mysqli_error($conn);
        }
    }

?>

<?php include 'inc/header.php'; ?>

<div class="container my-3">
    <h1 class="display-4">Add Post</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"></textarea>
        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-default">
    </form>
</div>

<?php include 'inc/footer.php'; ?>