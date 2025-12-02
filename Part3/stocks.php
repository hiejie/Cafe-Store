<?php
declare(strict_types=1);
include ("includes/header.php");


// MULTIDIMENSIONAL ARRAY
$products = [
    "Amerikano" => ["price" => 100, "stock" => 8],
    "Latte" => ["price" => 120, "stock" => 15],
    "Cappuccino" => ["price" => 130, "stock" => 4],
    "Matcha" => ["price" => 150, "stock" => 20],
    "Croissant" => ["price" => 85, "stock" => 12],
    "Cheese Bread" => ["price" => 75, "stock" => 5],
    "Garlic Bread Toast"=> ["price" => 80, "stock" => 1],
    "Banana Bread"=> ["price" => 80, "stock" => 5],
    "Breadstick"=> ["price" => 50, "stock" => 10]
];

// GLOBAL TAX RATE
$tax_rate = 12;

//get_reorder_message() function
function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

//get_total_value() function
function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

// get_tax_due() function
function get_tax_due(float $price, int $qty, int $tax = 0): float {
    return ($price * $qty) * ($tax / 100);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cafe Stock Monitor</title>
    <style>
        h1 {
            text-align: center;
            font-weight: normal;
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background: white;
          
        }
        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }
        th {
            background: #d3b368ff;
        }
        tr:nth-child(even) {
            background: #fafafa;
        }
    </style>
</head>


<h1 class="stock">Café Stock Monitoring</h1>

<table>
    <tr>
        <th>Product Name</th>
        <th>Price (₱)</th>
        <th>Available Stock</th>
        <th>Reorder?</th>
        <th>Total Value of Stock (₱)</th>
        <th>Tax Due (₱)</th>
    </tr>

    <?php
    foreach ($products as $product_name => $data):
        $price = $data['price'];
        $stock = $data['stock'];
    ?>

        <tr>
            <td><?= $product_name ?></td>

            <td><?= number_format($price, 2) ?></td>
            <td><?= $stock ?></td>
         
            <td><?= get_reorder_message($stock) ?></td>

            <td><?= number_format(get_total_value($price, $stock), 2) ?></td>
          
            <td><?= number_format(get_tax_due($price, $stock, $tax_rate), 2) ?></td>
        </tr>

    <?php endforeach; ?>

</table>


<?php 
include('includes/footer.php'); 
?>

</html>
