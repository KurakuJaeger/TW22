<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Predefined String Functions Matrix</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #fafafa;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }
        th, td {
            border: 2px solid #444444;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .title-header {
            background-color: #ffffff;
            font-size: 1.4rem;
            padding: 15px;
        }
    </style>
</head>
<body>

<?php
// 1. Instantiating an array populated with 20 distinct names
$namesArray = [
    "chrisa", "alexander", "eloisa", "clark wayne", "oroberyl", 
    "rossi", "tangtang", "chen qianyu", "seele", "pela", 
    "sparkle", "thaddeus", "elena", "kai", "lyra", 
    "marcelo", "juan luna", "brent", "rhea", "solomon"
];
?>

<table>
    <thead>
        <tr>
            <th colspan="6" class="title-header">List of Names</th>
        </tr>
        <tr>
            <th>Name</th>
            <th>Number of characters</th>
            <th>Uppercase first character</th>
            <th>Replace vowels with @</th>
            <th>Check position of character "a"</th>
            <th>Reverse name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($namesArray as $name): ?>
            <tr>
                <td><?php echo htmlspecialchars($name); ?></td>
                
                <td><?php echo strlen($name); ?></td>
                
                <td><?php echo ucfirst($name); ?></td>
                
                <td>
                    <?php 
                        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
                        echo str_replace($vowels, '@', $name); 
                    ?>
                </td>
                
                <td>
                    <?php 
                        $pos = strpos($name, 'a');
                        echo ($pos === false) ? "Not Found" : $pos;
                    ?>
                </td>
                
                <td><?php echo strrev($name); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>