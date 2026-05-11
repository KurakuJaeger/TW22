<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkerboard</title>
</head>
<body>
     <!-- Table with alternative color like checkerboard -->
    <table border="1" style="margin: 0.5em auto auto auto; ">
        <?php
            for($row = 0; $row <= 10; $row++):
                echo "<tr style='text-align: center'>";
                for($col = 0; $col <= 10; $col++):
                    if(($row + $col) % 2 == 0):
                        echo "<td style='background-color: black; color: white; padding: 1em'>" . ($row * $col) . "</td>";
                    else:
                        echo "<td style='padding: 1em'>" . ($row * $col) . "</td>";
                    endif;
                endfor;
                echo "</tr>";
            endfor;
        ?>
</body>
</html>