<?php
    include('includes/header.php');

    //Menus (Arrays)

    //List of Drinks
    $drinks = [
    ["name" => "Amerikano", "price" => 100],
    ["name" => "Latte", "price" => 120],
    ["name" => "Cappuccino", "price" => 130],
    ["name" => "Matcha", "price" => 150],
];  

    $pastries = [
    ["name" => "Cheese Bread", "price" => 75],
    ["name" => "Garlic Bread Toast", "price" => 80],
    ["name" => "Croissant", "price" => 85],
];
  
    $menu = array_merge($drinks, $pastries);

    $selectedItem = "";
    $quantity = 1;
    $subtotal = 0;
    $totalCost = 0;

// Handle Form
if (isset($_POST['order'])) {
    $selectedItem = $_POST['item'];
    $quantity = $_POST['quantity'];

    // find price
    foreach ($menu as $i) {
        if ($i['name'] === $selectedItem) {
            $price = $i['price'];
        }
    }

    $totalCost = $price * $quantity;
   
}

    //Total items in the menu
    $quantity_drinks=count($drinks);
    $quantity_pastries=count($pastries);
    $total= $quantity_drinks + $quantity_pastries;

?>

<body>

    <main>
         <h1 class="welcome">Welcome to <?= $cafeName ?></h1>
        <p>Here at <?=$cafeName?>, we believe that a good book pairs best with a comforting cup of coffee and a quiet, cozy space. Whether you’re here to study, unwind, or discover your next favorite read, our menu is crafted to enrich your time with us.

        Take your time, settle into the calm, and explore our selection of drinks and treats—each designed to accompany your reading journey.</p>

        <p>We currently have <strong><?= $total ?></strong> menu items available!</p>

        <h2>Drinks Menu</h2>

       <div class="table-1 menu-box">
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>

        <?php foreach ($drinks as $item): ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td>₱<?= $item['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <img src="images/coffee.jpg" alt="coffee">
</div>

<h2>Pastries Menu</h2>
<div class="table-2 menu-box reverse">
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>

        <?php foreach ($pastries as $item): ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td>₱<?= $item['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <img src="images/pastries.jpg" alt="pastries picture">
</div>


 <h2>Place an Order</h2>

    <div class="form-box">
    <form method="POST">
        <label>Select Item:</label><br>
        <select name="item">
            <?php foreach ($menu as $i): ?>
                <option value="<?= $i['name'] ?>" <?= ($selectedItem == $i['name']) ? 'selected' : '' ?>>
                    <?= $i['name'] ?> (₱<?= $i['price'] ?>)
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <label>Quantity:</label><br>
        <input type="number" name="quantity" min="1" value="<?= $quantity ?>">
        <br><br>

        <button name="order">Order Now</button>
    </form>

    <!-- ORDER SUMMARY -->
    <?php if(isset($_POST['order'])): ?>
        <h2>Order Summary</h2>
        <p>Item: <strong><?= $selectedItem ?></strong></p>
        <p>Quantity: <?= $quantity ?></p>
        <p><b>Total: ₱<?= $totalCost ?></b></p>
    <?php endif; ?>

    <button class="reset-button" onclick="window.location.href='Menu.php'">Reset</button>

    </div>
    </main>

   
<?php 
include('includes/footer.php'); 
?>
        
    
</body>


