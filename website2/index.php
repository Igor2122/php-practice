<?php include('server-info.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" type="text/css" />
</head>
<body>
    <div class="container">
        <h1>Sever  and file info </h1>
        <?php if($server): ?>
            <ul class="list-group">
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key; ?>: </strong>
                        <?php echo $value ?>
                    </li>
                <?php endforeach ?>
            </ul>
            <ul class="list-group">
                <li>
                    <!--<?php if($client): ?>-->
                        <?php foreach($client as $key => $value) : ?>
                            <li class="list-group-item">
                                <strong><?php echo $key; ?></strong>
                                <?php echo $value ?>
                            </li>
                        <?php endforeach ?>
                    <!--<?php endif ?>-->
                </li>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>