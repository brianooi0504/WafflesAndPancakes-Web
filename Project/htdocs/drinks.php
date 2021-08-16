<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Drinks</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="shortcut icon" href="images/logosmall.png" type="image/png">
</head>

<body>

    <?php
        include_once 'header.php';
    ?>
        
    <main>
        <div style="margin: 1em;">
            <h1>Our drinks</h1>
            <p>What better way to top off your meal than a hot one - or a cold one -</br> You decide! </p>
        </div>
        
        <div class="flexbox">

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/Americano.jpg" alt="Americano">
                <h4>WAP's Americano</h4>
                <p><small>Our popular drink made by pouring hot water over an espresso shot.
                </small>
                </p>
                </div>

                <div class="flexitembottom">
                <p>
                    <i>Calories: 95</i>
                </p>
                <p><b>Price:<br>Hot/Cold - $8</b></p>
                <a href="nothinghere.php" class="button shop-item-button">Add to order!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/CaramelLatte.jpg" alt="CaramelLatte">
                <h4>WAP's Caramel Latte</h4>
                <p><small>Made by mixing espresso with caramel syrup and pouring steamed milk on top.</small>
                </p> 
                </div>
                
                <div class="flexitembottom">
                <p>
                    <i>Calories: 155</i>
                </p>
                <p><b>Price:<br>Hot/Cold - $10</b></p>
                <a href="nothinghere.php" class="button shop-item-button">Add to order!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/Chocolate.jpg" alt="Chocolate">
                <h4>WAP's Dark Chocolate Drink</h4>
                <p><small>Made with molten chocolate sauce (52% cacao) and steamed milk</small>
                </p>
                </div>


                <div class="flexitembottom">
                <p>
                    <i>Calories: 145</i>
                </p>
                <p><b>Price:<br>Hot/Cold - $12</b></p>
                <a href="nothinghere.php" class="button shop-item-button">Add to order!</a>
                </div>
            </div>

        </div>

        <div>
            <a href="menu.php" class="button">Back to menu</a>
        </div>
    </main>
        
    <?php
        include_once 'footer.html';
    ?>
    
    </body>
</html>