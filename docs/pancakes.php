<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Pancakes</title>
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
            <h1>Our pancakes</h1>
            <p>WAP's pancakes are not your typical pancakes, they're moist and tender. And quite tasty.</p>
        </div>
        
        <div class="flexbox">

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/Pancakes.jpg" alt="BBPancakes">
                <h4 class="shop-item-title">WAP's Signature Blueberry Banana Pancakes</h4>
                <p><small>Our Signature Blueberry Banana Pancakes is a healthy and delicious breakfast that will provide your body with essential vitamins and nutrients! So fluffy, nutritious and filling. 
                    Loaded with blueberries and bananas, together with our Signature Maple Syrup drizzle, these healthy pancakes will jumpstart your morning the right way!
                </small>
                </p>
                </div>

                <div class="flexitembottom">
                <p>
                    <i>Calories: 128</i>
                </p>
                <p><b>Price: $15</b></p>
                <a href="nothinghere.php" class="button shop-item-button">Add to order!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/ChocChipPancake.jpg" alt="ChocChipPancakes">
                <h4>WAP's Chocolate Chip Pancakes</h4>
                <p><small>Super fluffy Chocolate Chip Pancakes. Made with buttermilk for the perfect flavor & filled with mini chocolate chips. These are delish!</small>
                </p> 
                </div>
                
                <div class="flexitembottom">
                <p>
                    <i>Calories: 164</i>
                </p>
                <p><b>Price: $15</b></p>
                <a href="nothinghere.php" class="button shop-item-button">Add to order!</a>
                </div>
            </div>

            <div class="menu_flexitem flexboxcolumn flexborder">
                <div class="flexitemtop">
                <img src="images/PlainPancake.jpg" alt="PlainPancakes">
                <h4>Buttermilk Pancakes</h4>
                <p><small>Pancakes are the hero of the breakfast table, and their very taste can even be described as “deeply breakfasty”: eggy, salty, just this side of sweet. 
                    A little indulgent and yet still somehow appropriate first thing in the morning, those fluffy stacks with crisped edges, dripping with our Signature Maple Syrup, are everything you want, exactly when you want them.</small>
                </p>
                </div>


                <div class="flexitembottom">
                <p>
                    <i>Calories: 106</i>
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