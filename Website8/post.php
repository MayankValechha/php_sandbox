<?php

    //Requiring Database Connection
    require ('config/db.php');

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
        <a href="<?php echo ROOT_URL?>" class="btn btn-default">Back</a>
        <blockquote>
            <h3><b><?php echo $post['title']; ?></b></h3>
            <p><?php echo $post['body']; ?></p>
            <p>This post was created by <strong><?php echo $post['author']; ?></strong> and created at <strong><?php echo $post['created_at']; ?></strong></p>
        </blockquote>
    </div>

    <?php include 'inc/footer.php'; ?>