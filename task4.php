<html>
    <title>task 4</title>

    <body>
        <?php
        $input = array(1, 2, 3, 4, 5, 6, 7);
        echo "Input array: [ ";
        foreach ($input as $i) 
        {echo $i." ";}
        ?>
        ]
        <br>

        <?php
        $position = 4;
        $insert = "sanjar";

        array_splice($input, $position, 0, $insert );  // 3-position
        echo "Output array: [ ";
        foreach ($input as $i) 
        {echo $i." ";}
        ?>
        ]
        <br>
    </body> 
</html>