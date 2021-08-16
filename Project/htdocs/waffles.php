<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Waffles</title>
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
            <h1>Our waffles</h1>
            <p>It took us six years to come up with our signature waffles we considered worthy. We're sure you're going to love these.
                You only get one in an order, but it'll be very satisfying.</p>
        </div>
        
        <div class="flexbox">

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/Waffles.jpg" alt="BelgianWaffles">
                <h4>WAP's Signature Belgian Waffles</h4>
                <p><small>Our signature Belgian waffle recipe makes perfect waffles that are crisp on the outside, fluffy and tender on the inside and indulgent all over.
                 Topped with fresh berries whipped cream and our Signature Maple Syrup.
                </small>
                </p>
                </div>

                <div class="flexitembottom">
                <p>
                    <i>Calories: 265</i>
                </p>
                <p><b>Price: $15</b></p>
                <a href="nothinghere.php" class="button shop-item-button">Add to order!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/BaconWaffles.jpg" alt="BaconWaffles">
                <h4>Belgian Waffles with Bacon and Parmesan</h4>
                <p><small>A treat any time you have them, homemade waffles become an extravagant brunch when they are topped with thick-cut bacon and Parmesan. 
                    A drizzle of our Signature Maple Syrup to finish gives the dish a complex combo of sweet and salty flavors.</small>
                </p> 
                </div>
                
                <div class="flexitembottom">
                <p>
                    <i>Calories: 495</i>
                </p>
                <p><b>Price: $30</b></p>
                <a href="nothinghere.php" class="button shop-item-button">Add to order!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/PlainWaffles.jpg" alt="PlainSimple">
                <h4>Plain & Simple</h4>
                <p><small>These classic waffles are perfectly crisp on the outside, fluffy on the inside and are to die for!
                    Served with butter and our Signature Maple Syrup.</small>
                </p>
                </div>


                <div class="flexitembottom">
                <p>
                    <i>Calories: 155</i>
                </p>
                <p><b>Price: $8</b></p>
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