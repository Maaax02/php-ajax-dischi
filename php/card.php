<?php 

    include __DIR__ . '/db/db.php';

?>

<!DOCTYPE html>
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