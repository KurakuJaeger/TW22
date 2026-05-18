<?php
/**
 * Calculates the sum, difference, product, and quotient of three given parameters.
 *
 * @param title float/int $param1 First parameter
 * @param title float/int $param2 Second parameter
 * @param title float/int $param3 Third parameter
 * @return array Associative array containing the arithmetic results
 */
function calculate_values($param1, $param2, $param3) {
    $addition       = $param1 + $param2 + $param3;
    $subtraction    = $param1 - $param2 - $param3;
    $multiplication = $param1 * $param2 * $param3;
    
    // Safety check to handle division by zero
    if ($param2 != 0 && $param3 != 0) {
        $division = $param1 / $param2 / $param3;
    } else {
        $division = "Undefined (Division by zero)";
    }

    return [
        "addition"       => $addition,
        "subtraction"    => $subtraction,
        "multiplication" => $multiplication,
        "division"       => $division
    ];
}

// Define the input values from the sample output
$p1 = 15;
$p2 = 10;
$p3 = 5;

// Execute the user-defined function with the parameters
$results = calculate_values($p1, $p2, $p3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA3 - Technical Activity 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #ffffff;
        }
        table {
            width: 600px;
            border-collapse: collapse;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid #7f7f7f;
        }
        th, td {
            padding: 8px;
            text-align: center;
            font-size: 14px;
        }
        .header-row {
            background-color: #ffffff;
            font-weight: normal;
        }
        .label-col {
            width: 40%;
        }
        .value-col {
            width: 60%;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr class="header-row">
                <th colspan="2">My Parameter values: <?php echo "$p1, $p2, $p3"; ?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="label-col">Addition</td>
                <td class="value-col"><?php echo $results['addition']; ?></td>
            </tr>
            <tr>
                <td class="label-col">Subtraction</td>
                <td class="value-col"><?php echo $results['subtraction']; ?></td>
            </tr>
            <tr>
                <td class="label-col">Multiplication</td>
                <td class="value-col"><?php echo $results['multiplication']; ?></td>
            </tr>
            <tr>
                <td class="label-col">Division</td>
                <td class="value-col"><?php echo $results['division']; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>