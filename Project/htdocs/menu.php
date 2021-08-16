<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="shortcut icon" href="images/logosmall.png" type="image/png">
</head>

<body>

    <?php
        include_once 'header.php';
    ?>
        
    <main>
        <div>
            <h1>Our menu</h1>
        </div>
        
        <div class="flexbox">

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/Waffles.jpg" alt="Waffles">
                <h4>Waffles</h4>
                <p><small>It took us six years to come up with our signature waffles we considered worthy. We're sure you're going to love these.
                    You only get one in an order, but it'll be very satisfying.
                </small></p>
                </div>

                <div class="flexitembottom">
                <a href="waffles.php" class="button">See more!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/Pancakes.jpg" alt="Pancakes">
                <h4>Pancakes</h4>
                <p><small>WAP's pancakes are not your typical pancakes, they're moist and tender. And quite tasty.</small></p>
                </div>
                
                <div class="flexitembottom">
                <a href="pancakes.php" class="button">See more!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/Drinks.jpg" alt="Drinks">
                <h4>Drinks</h4>
                <p><small>What better way to top off your meal than a hot one <br>- or a cold one -</br> You decide! </small></p>
                </div>

                <div class="flexitembottom">
                <a href="drinks.php" class="button">See more!</a>
                </div>
            </div>

        </div>
    </main>
        
    <?php
        include_once 'footer.html';
    ?>
    
    </body>
</html>