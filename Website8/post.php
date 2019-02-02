<?php
    //Requiring Database Connection
    require ('config/db.php');
   
    if(isset($_POST['delete'])){

        //Grabbing form data.
        $delete_id = $_POST['delete_id'];

        //Creating a Query to insert data
        $query = "  DELETE FROM posts 
                    WHERE id = {$delete_id} ";
        
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
    $query = 'SELECT * FROM posts WHERE id ='.$id;

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
        <a href="http://localhost/php_sandbox/website8/" class="btn btn-default">Back</a>
        <blockquote>
            <h3><b><?php echo $post['title']; ?></b></h3>
            <p><?php echo $post['body']; ?></p>
            <p>This post was created by <strong><?php echo $post['author']; ?></strong> and created at <strong><?php echo $post['created_at']; ?></strong></p>
        </blockquote>
        <hr>
        <form class="pull-right" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <input type="hidden" name="delete_id" value="<?php echo $post['id'];?>">
            <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>

        <a href="http://localhost/php_sandbox/website8/editpost.php?id=<?php echo $post['id'];?>" class="btn btn-default">Edit</a>
    </div>

    <?php include 'inc/footer.php'; ?>