<?php
$conversions = [
    "METRIC CONVERSIONS" => [
        ["centimetre", "millimetres", 10, "cm", "mm"],
        ["decimetre", "centimetres", 10, "dm", "cm"],
        ["metre", "centimetres", 100, "m", "cm"],
        ["kilometre", "metres", 1000, "km", "m"],
    ],
    "IMPERIAL CONVERSIONS" => [
        ["foot", "inches", 12, "ft", "in"],
        ["yard", "feet", 3, "yd", "ft"],
        ["chain", "yards", 22, "ch", "yd"],
        ["furlong", "chains", 10, "fur", "ch"],
        ["mile", "furlongs", 8, "mi", "fur"],
    ],
    "METRIC -> IMPERIAL" => [
        ["millimetre", "inches", 0.03937, "mm", "in"],
        ["centimetre", "inches", 0.39370, "cm", "in"],
        ["metre", "inches", 39.37008, "m", "in"],
        ["metre", "feet", 3.28084, "m", "ft"],
        ["metre", "yards", 1.09361, "m", "yd"],
        ["kilometre", "yards", 1093.61, "km", "yd"],
        ["kilometre", "miles", 0.62137, "km", "mi"],
    ],
    "IMPERIAL -> METRIC" => [
        ["inch", "centimetres", 2.54, "in", "cm"],
        ["foot", "centimetres", 30.48, "ft", "cm"],
        ["yard", "centimetres", 91.44, "yd", "cm"],
        ["yard", "metres", 0.9144, "yd", "m"],
        ["mile", "metres", 1609.344, "mi", "m"],
        ["mile", "kilometres", 1.609344, "mi", "km"],
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body { font-family: sans-serif; padding: 20px; color: #333; }
        .conversion-table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-bottom: 30px;
            border: 1px solid #ccc;
        }
        .header-row {
            background-color: #ffff00; 
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            border: 1px solid #333;
        }
        td {
            padding: 8px 12px;
            border: 1px solid #ccc;
        }
        .eq-cell { width: 10px; text-align: center; color: #666; }
        .val-cell { font-weight: 500; }
        tr:hover { background-color: #f9f9f9; }
    </style>
</head>
<body>

    <?php foreach ($conversions as $sectionTitle => $rows): ?>
    <table class="conversion-table">
        <thead>
            <tr>
                <th colspan="6" class="header-row"><?php echo $sectionTitle; ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $data): 
                $baseInput = 1;
                $calculatedValue = round($baseInput * $data[2], 5); 
            ?>
            <tr>
                <!-- Full Name Conversion -->
                <td><?php echo "$baseInput {$data[0]}"; ?></td>
                <td class="eq-cell">=</td>
                <td class="val-cell"><?php echo "$calculatedValue {$data[1]}"; ?></td>
                
                <!-- Abbreviated Conversion -->
                <td><?php echo "$baseInput {$data[3]}"; ?></td>
                <td class="eq-cell">=</td>
                <td class="val-cell"><?php echo "$calculatedValue {$data[4]}"; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php endforeach; ?>

</body>
</html>