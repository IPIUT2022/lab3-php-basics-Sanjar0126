<html>
    <title>task 1</title>

    <body>
        <?php
        $color = array("white", "green", "red");
        ?>
        <ul>
            <?php
            foreach ($color as $item) {
            ?>

            <li><?php echo $item; ?></li>

            <?php };?>
        </ul>
    </body> 
</html>