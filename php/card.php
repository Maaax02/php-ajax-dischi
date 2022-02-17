<?php 

    include __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($api as $key) {
        
    ?>
    <div class="background">
        <div class="image">
            <img class="images" src="<?php echo $key['poster'] ; ?>" alt="">
        </div>
        <h2><?php echo $key['title'] ?></h2>
        <span><?php echo $key['author'] ?></span>
        <h6><?php echo $key['year'] ?></h6>
    </div>
    <?php }?>
</body>

</html>