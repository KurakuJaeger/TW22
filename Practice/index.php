<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lists = ["apple", "banana", "orange"];
    foreach ($lists as $list):
    ?>
    <ul>
        <li><?php echo $list; ?></li>
    </ul>
    <?php endforeach; ?>

    # If condition structure example
    <?php
    $number = 10;
    $message ="";
    if ($number > 5):
        $message ="The number is greater than 5.";
        else:
        $message ="The number is not greater than 5.";
    endif;
    ?>
    <p><?php echo $message ?></p>
    
    # While loop structure example without foreach to avoid infinite loop
    <?php
    $counter = 0;
    while ($counter < 3):
        echo "<p>Counter: $counter</p>";
        $counter++;
    endwhile;
    ?>

    # Case structure example
    <?php
    $day = "Monday";
    switch ($day):
        case "Monday":
            echo "<p>It's Monday!</p>";
            break;
        case "Tuesday":
            echo "<p>It's Tuesday!</p>";
            break;
        default:
            echo "<p>It's another day!</p>";
    endswitch;
    ?> 

</body>
</html>