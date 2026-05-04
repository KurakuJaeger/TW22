<?php
$combinations = [];

// Outer loop for the first digit (0-9)
for ($i = 0; $i <= 9; $i++) {
    // Inner loop for the second digit (0-9)
    for ($j = 0; $j <= 9; $j++) {
        // Concatenate the two digits and add to the array
        $combinations[] = $i . $j;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Digit Combinations</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            padding: 40px;
            max-width: 800px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
            font-size: 2rem;
        }

        .combinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(60px, 1fr));
            gap: 12px;
            justify-items: center;
        }

        .combination-item {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 1.2rem;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .combination-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.6);
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 1.5rem;
                margin-bottom: 20px;
            }

            .combinations-grid {
                grid-template-columns: repeat(auto-fit, minmax(50px, 1fr));
                gap: 10px;
            }

            .combination-item {
                width: 50px;
                height: 50px;
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Two-Digit Combinations (00-99)</h1>
        <div class="combinations-grid">
            <?php
            // Loop through combinations and display each one
            foreach ($combinations as $combination) {
                echo "<div class='combination-item'>$combination</div>";
            }
            ?>
        </div>
    </div>
</body>

</html>