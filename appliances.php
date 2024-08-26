<?php
$appliances = [
    [
        'number' => 1,
        'image' => 'ref.jpeg',
        'brand' => 'Brand A',
        'price' => '$100',
        'action' => 'Buy Now'
    ],
    [
        'number' => 2,
        'image' => 'jems.jpg',
        'brand' => 'Brand B',
        'price' => '$200',
        'action' => 'Buy Now'
    ],
    [
        'number' => 3,
        'image' => 'refrigirator.png',
        'brand' => 'Brand C',
        'price' => '$300',
        'action' => 'Buy Now'
    ],
    [
        'number' => 4,
        'image' => 'refrigirator.jpeg',
        'brand' => 'Brand C',
        'price' => '$300',
        'action' => 'Buy Now'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appliances</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            
        }

        table {
            width: 100%;
            border-collapse: separate;
            margin: 20px 0;
        }

        thead {
            background-color: #007bff;
            color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-size: 16px;
        }

        td {
            font-size: 14px;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        .data {
            margin: auto;
            width: 100%;
            overflow-x: auto;
        }

        .data th {
            font-weight: bold;
            text-align: left;
        }

        .data td {
            vertical-align: middle;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="">
            <table class="data">
                <thead>
                    <tr>
                      <th>Number</th>
                      <th>Image</th>
                      <th>Brand</th>
                      <th>Price</th>
                      <th>Action</th>
                      <th>Add</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($appliances as $appliance): ?>
                    <tr>
                        <td><?= $appliance["number"]; ?></td>
                        <td><img src="<?= $appliance["image"]?>" alt=""></td>
                        <td><?= $appliance["brand"]; ?></td>
                        <td><?= $appliance["price"]; ?></td>
                        <td><button><?= $appliance["action"]; ?></button></td>
                        <td><button>Add to Cart</button></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </form>
    </div>
</body>
</html>
