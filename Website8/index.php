<?php

    //Requiring Database Connection
    require ('config/db.php');

    //Create a Query
    $query = 'SELECT * FROM posts';

    // Get Result
    $result = mysqli_query($conn, $query);

    //Fetch Posts
    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //Free Result
    mysqli_free_result($result);

    //Close the connection
    mysqli_close($conn);

?>
    <?php include 'inc/header.php'; ?>

    <div class="container my-3">
        <h1 class="display-4">Posts from Database</h1>
        <?php foreach($posts as $post):?>
            <div class="well">
                <h3><?php echo $post['title']; ?></h3>
                <p><?php echo $post['body']; ?></p>
                <p>This post was created by <strong><?php echo $post['author']; ?></strong> and created at <strong><?php echo $post['created_at']; ?></strong></p>
                <a class="btn btn-default" href="post.php?id=<?php echo $post['id'];?>">Read More</a>
            </div>
        <?php endforeach;?>
    </div>

    <?php include 'inc/footer.php'; ?>