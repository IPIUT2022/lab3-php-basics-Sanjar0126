<html>
    <title>task 3</title>

    <body>
        <?php
        $file = fopen("./task3.txt","r");

        while (feof($file) == false) {
            $line = fgets ($file);
            $data = explode(" ", $line); //split line by space to get key/value
        ?>

        Key: "<?php echo $data[0];?>" Value: "<?php echo $data[1];?>"
        <br>

        <?php
        }
        ?>
    </body> 
</html>