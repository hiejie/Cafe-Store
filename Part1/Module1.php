<?php

//variables
$cafeName="Sho-an";
$tagline = "Sip.Relax.Repeat";

//Menus (Arrays)

//List of Drinks
$drinks=[
    'Amerikano'=> 100,
    'Cappucino'=>140,
    'Latte'=>120,
    'Macchiato'=>100
];

//List of Pastries
$pastries =[
    'Cheese Bread'=>75,
    'Garlic Bread Toast'=>80,
    'Croissant'=>85
];



//Total items in the menu
$quantity_drinks=count($drinks);
$quantity_pastries=count($pastries);
$total= $quantity_drinks + $quantity_pastries;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?= $cafeName?> </title>
   

    <style>

        body{
            font-family: 'Noto Sans JP', 'Arial', sans-serif; 
            background: #130d06; 
            color: #77553c; 
            margin: 0;
            padding: 0 20px;
            line-height: 1.6;
        }

        header{
            background-color: #bfa67a; 
            padding: 20px 10px;
            color: #fff;
            text-align: center;
            font-size: 1.5rem;
            font-weight: 500;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            box-shadow: 0 3px 6px rgba(175, 138, 81, 0.1);
        }

        header p {
            font-size: 1rem;
            margin-top: 8px;
            font-style: italic;
            color: #f4eee6;
        }

        h1{
            color: #fffbf9; 
            margin-bottom: 12px;
            font-size: 2rem;
            margin-top: 20px;
        }

        h2 {
            font-size: 1.5rem;
            margin-top: 20px;
            color: rgb(211, 204, 204);
        }

        /* Section */
        .section {
            border: solid 1px white;
            padding: 20px;
            margin-bottom: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.08);
            margin-top: 40px;
        }


        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #0f0f0f;
            padding: 12px 10px;
            text-align: left;
            border-radius: 10px;
        }

        th {
            background: #725c3c; 
            color: #0c0a07;
            font-weight: 500;
        }

        td {
            background: #fff8f2;
        }

        /* Book list  */
        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            background: #f8f3ef;
            margin: 6px 0;
            padding: 8px 12px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        /* Cozy paragraph  */
        p {
            font-size: 1rem;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <header>
        <h1><?=$cafeName?></h1>
        <p> <?=$tagline?></p>
    </header>

    <h1 class="welcome">Welcome to <?= $cafeName ?></h1>
    <p>Here at <?=$cafeName?>, we believe that a good book pairs best with a comforting cup of coffee and a quiet, cozy space. Whether you’re here to study, unwind, or discover your next favorite read, our menu is crafted to enrich your time with us.

    Take your time, settle into the calm, and explore our selection of drinks and treats—each designed to accompany your reading journey.</p>

    <p>We currently have <strong><?= $total ?></strong> menu items available!</p>

    <!--Display Menus-->
    <div class="section">
        <h2>Drinks</h2>

        <table>
            <tr>
                <th>Drink</th>
                <th>Price (₱)</th>
            </tr>

           <!-- //Display drink and price-->
            <tr>
                <td>Amerikano</td>
                <td><?=$drinks['Amerikano'] ?></td>
            </tr>

            <tr>
                <td>Capuccino</td>
                <td><?=$drinks['Cappucino'] ?></td>
            </tr>

            <tr>
                <td>Latte</td>
                <td><?=$drinks['Latte'] ?></td>
            </tr>

            <tr>
                <td>Macchiato</td>
                <td><?=$drinks['Macchiato'] ?></td>
            </tr>
        </table>
    </div>
    

    <div class="section">
        <h2>Pastries</h2>

        <table>
            <tr>
                <th>Pastry</th>
                <th>Price (₱)</th>
            </tr>

           <!-- //Display drink and price-->
            <tr>
                <td>Cheese Bread</td>
                <td><?=$pastries['Cheese Bread'] ?></td>
            </tr>

            <tr>
                <td>Garlic Bread Toast</td>
                <td><?=$pastries['Garlic Bread Toast'] ?></td>
            </tr>

            <tr>
                <td>Croissant</td>
                <td><?=$pastries['Croissant'] ?></td>
            </tr>
        </table>
    </div>

  


    <div class="section">
        <h2>Books Available</h2>
           <ul>
            <li><?=$books[0]?></li>
            <li><?=$books[1]?></li>
            <li><?=$books[2]?></lgzws2qi>
            <li><?=$books[3]?></li>
           </ul>
    </div>
    
</body>
</html>