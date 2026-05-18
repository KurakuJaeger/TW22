<?php
// 1. Define a multidimensional array containing 10 different people records
$people = [
    [
        "name" => "Andrew De Jesus",
        "image" => "images/account.png",
        "age" => 21,
        "birthday" => "April 19, 2005",
        "contact_number" => "09123456789"
    ],
    [
        "name" => "Clark Bagtas",
        "image" => "images/account.png",
        "age" => 20,
        "birthday" => "October 15, 2005",
        "contact_number" => "09837623211"
    ],
    [
        "name" => "Trina Marielle Villoria",
        "image" => "images/account.png",
        "age" => 20,
        "birthday" => "November 9, 2005",
        "contact_number" => "09234567890"
    ],
    [
        "name" => "Jovs Francis Caburao",
        "image" => "images/account.png",
        "age" => 22,
        "birthday" => "May 14, 2004",
        "contact_number" => "09345678901"
    ],
    [
        "name" => "James Ivan Frondarina",
        "image" => "images/account.png",
        "age" => 21,
        "birthday" => "July 6, 2004",
        "contact_number" => "09456789012"
    ],
    [
        "name" => "Mark Benedick Castro",
        "image" => "images/account.png",
        "age" => 20,
        "birthday" => "October 15, 2005",
        "contact_number" => "09567890123"
    ],
    [
        "name" => "Kurt Hienrich Tarcena",
        "image" => "images/account.png",
        "age" => 21,
        "birthday" => "May 9, 2005",
        "contact_number" => "09678901234"
    ],
    [
        "name" => "Darryl Dela Cruz",
        "image" => "images/account.png",
        "age" => 26,
        "birthday" => "January 07, 2001",
        "contact_number" => "09789012345"
    ],
    [
        "name" => "Jen Raina Teodoro",
        "image" => "images/account.png",
        "age" => 20,
        "birthday" => "September 23, 2006",
        "contact_number" => "09890123456"
    ],
    [
        "name" => "Maryclaire Jashley P. Dela Cruz",
        "image" => "images/account.png",
        "age" => 20,
        "birthday" => "February 27, 2006",
        "contact_number" => "09901234567"
    ]
];


usort($people, function ($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Records Table FIFA2000</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 40px;
            color: #333;
        }
        h2 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
        }
        th {
            background-color: #34495e;
            color: #ffffff;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
        }
        tr {
            border-bottom: 1px solid #dddddd;
        }
        tr:nth-of-type(even) {
            background-color: #f8f9fa;
        }
        tr:last-of-type {
            border-bottom: 2px solid #34495e;
        }
        tr:hover {
            background-color: #f1f3f5;
        }
        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #bdc3c7;
        }
    </style>
</head>
<body>

    <h2>Sorted Directory List (Alphabetical Order)</h2>

    <table>
        <thead>
            <tr>
                <th>no.</th>
                <th>name</th>
                <th>Image</th>
                <th>age</th>
                <th>birthday</th>
                <th>contact number</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // 2. Display the records in an HTML table sorted alphabetically by name
            $counter = 1;
            foreach ($people as $person): 
            ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <strong><td><?php echo htmlspecialchars($person['name']); ?></td></strong>
                    <td><img class="avatar" src="<?php echo htmlspecialchars($person['image']); ?>" alt="Profile"></td>
                    <td><?php echo htmlspecialchars($person['age']); ?></td>
                    <td><?php echo htmlspecialchars($person['birthday']); ?></td>
                    <td><?php echo htmlspecialchars($person['contact_number']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>