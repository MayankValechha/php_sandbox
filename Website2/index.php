<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Info</title>
</head>
<body>
    <h1>Server and File Info</h1>
    
    <?php if($server) : ?>
        <ul>
            <?php foreach($server as $key => $value): ?>
                <li>
                    <strong><?php echo $key;?> :</strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>

    <h1>Client Info</h1>
    <?php if($server) :?>
        <ul>
            <?php foreach($client as $key => $value): ?>
                <li>
                    <strong><?php echo $key; ?> :</strong>
                    <?php echo $value; ?>
                </li>
            <?php endforeach ?>
        </ul>
    <?php endif ?>
</body>
</html>