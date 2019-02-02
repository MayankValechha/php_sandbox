<?php 
    
    require ('config/db.php');

    //Checking for submit
    if(isset($_POST['submit'])){

        //Grabbing form data.
        $update_id = $_POST['update_id'];
        $title = $_POST['title'];
        $body = $_POST['body'];
        $author = $_POST['author'];

        //Creating a Query to insert data
        $query = "  UPDATE posts SET 
                    title='$title',
                    author='$author',
                    body='$body'
                    WHERE id = {$update_id} ";
        
        //die($query);
        //die() is a useful function to check for erros! :D

        if(mysqli_query($conn, $query)){
            header('Location: http://localhost/php_sandbox/website8');
        } else {
            echo 'Error Mayank : '. mysqli_error($conn);
        }
    }

    //Get post id
    $id = $_GET['id'];
    //Create a Query
    $query = "SELECT * FROM posts WHERE id =".$id;

    // Get Result
    $result = mysqli_query($conn, $query);

    //Fetch Posts
    $post = mysqli_fetch_assoc($result);

    //Free Result
    mysqli_free_result($result);

    //Close the connection
    mysqli_close($conn);

?>

<?php include 'inc/header.php'; ?>

<div class="container my-3">
    <h1 class="display-4">Edit Post</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo $post['title'];?>">
        </div>

        <div class="form-group">
            <label>Author</label>
            <input type="text" name="author" class="form-control" value="<?php echo $post['author'];?>">
        </div>

        <div class="form-group">
            <label>Body</label>
            <textarea name="body" class="form-control"><?php echo $post['body'];?></textarea>
        </div>
        <input type="hidden" name="update_id" value="<?php echo $post['id'];?>">
        <input type="submit" name="submit" value="Submit" class="btn btn-default">
    </form>
</div>

<?php include 'inc/footer.php'; ?>