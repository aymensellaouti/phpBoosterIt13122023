<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    <ol class="list-group">
        <?php for( $i = 1; $i <= 10; $i++): 
            ($i%2) ? $class = 'primary': $class = 'secondary';    
        ?>
            <li class="list-group-item list-group-item-<?=$class?>">
                <?=$i?>
            </li>
       <?php endfor ?>
    </ol>
    
</body>
</html>