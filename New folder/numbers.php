<?php
// 1. Initialize an indexed array with 10 different numbers
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// 2. Perform sequential operations using the array elements
$sum        = $numbers[0];
$difference = $numbers[0];
$product    = $numbers[0];
$quotient   = $numbers[0];

// Loop through the array starting from the second element to perform the operations
$arrLength = count($numbers);
for ($i = 1; $i < $arrLength; $i++) {
    $sum        += $numbers[$i];
    $difference -= $numbers[$i];
    $product    *= $numbers[$i];
    
    // Prevent division by zero just in case
    if ($numbers[$i] != 0) {
        $quotient /= $numbers[$i];
    }
}

$formattedQuotient = strtoupper(strval($quotient));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA3 - Technical Activity 2</title>
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
        }
        .label-col {
            width: 40%;
            text-align: center;
        }
        .value-col {
            width: 60%;
            text-align: center;
        }
    </style>
</head>
<body>

    <table>
        <thead>
            <tr class="header-row">
                <th colspan="2">Array list: 1, 2, 3, 4, 5, 6, 7, 8, 10</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="label-col">Addition</td>
                <td class="value-col"><?php echo $sum; ?></td>
            </tr>
            <tr>
                <td class="label-col">Subtraction</td>
                <td class="value-col"><?php echo $difference; ?></td>
            </tr>
            <tr>
                <td class="label-col">Multiplication</td>
                <td class="value-col"><?php echo $product; ?></td>
            </tr>
            <tr>
                <td class="label-col">Division</td>
                <td class="value-col"><?php echo $formattedQuotient; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>