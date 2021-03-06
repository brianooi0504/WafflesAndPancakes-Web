<!DOCTYPE html>
<html lang="en">
<head>
    <title>Waffles And Pancakes</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="shortcut icon" href="images/logosmall.png" type="image/png">
</head>

<body>

    <?php
        include 'header.php';
    ?>
    
    <main>
        <div class="home_slideshow">
            <div class="slideshow_slide">
                <img src="images/slideshow4.png" id="lastclone" alt="exquisite experience">
                <img src="images/slideshow1.png" alt="free deliveries">
                <img src="images/slideshow2.png" alt="host event">
                <img src="images/slideshow3.png" alt="enjoy our food">
                <img src="images/slideshow4.png" alt="exquisite experience">
                <img src="images/slideshow1.png" id="firstclone" alt="free deliveries">
            </div>
        </div>

        <button id="prevbutton" class="button">Prev</button>
        <button id="nextbutton" class="button">Next</button>

        <script src="js/slideshow.js"></script>
        
        <div class="flexbox flexborder">
            <div class="home_flexitem">
                <img src="images/Gathering.jpg" alt="Image about gathering" class="fleximgfill">
            </div>

            <div class="flexboxcolumn home_flexitem">
                <div class="flexitemtop">
                    <h3>Private reservations are available!</h3>
                    <h5>We are hosting birthday parties, meetings, large gatherings daily. Want to book a private event at our restaurant?</h5>
                </div>
                <div class="flexitembottom">
                    <a href="reservations&events.php" class="button">Book Here!</a>
                </div>
            </div>
        </div>

        <div class="flexbox flexborder">
            <div class="flexboxcolumn home_flexitem">
                <div class="flexitemtop">
                    <h3>Our journey</h3>
                    <h5>Want to learn more about us?</h5>
                </div>

                <div class="flexitembottom">
                    <a href="whoweare.php" class="button">Learn More!</a>
                </div>
            </div>
            
            <div class="home_flexitem">
                <img src="images/Ambience.jpg" alt="Image about ambience" class="fleximgfill">
            </div>
        </div>
    
        </div>
    </main>
    
    <?php
        include_once 'footer.html';
    ?>
    
    </body>
    
</html>