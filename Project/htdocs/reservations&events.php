<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reservations & Events</title>
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
            <h1>Reservations</h1>

            <div class="flexbox flexborder">

                <div class="reb_fleximage">
                    <img src="images/Reservations.jpg" alt="Image about reservations" class="fleximgfill">
                </div>

                <div class="flexboxcolumn reb_flexitems">
                    <div class="flexitembottom">
                        We look forward to welcoming you to our restaurants. Check for availablity and book now to prevent any disappointments!
                    </div>

                    <div class="flexitembottom">
                        <a href="reservations.php" class="button">Make a reservation!</a>
                    </div>
                </div>

            </div>
        </div>
        
        <div>
            <h1>Event Bookings</h1>

            <div class="flexbox flexborder">

                <div class="reb_fleximage">
                    <img src="images/Events.jpg" alt="Image about event bookings" class="fleximgfill">
                </div>

                <div class="flexboxcolumn reb_flexitems">
                    <div class="flexitembottom">
                        Whether it’s a corporate function, upscale event, family gathering or an intimate wedding, Waffles & Pancakes provides delicious meals that fit your vision and your budget. 
                        Our dedicated and experienced team will cheerfully give your event the care and attention it deserves. Spaces are limited - drop your details and reserve your date and time today!
                    </div>
                    
                    <div class="flexitembottom">
                        <a href="eventbookings.php" class="button">Make a booking!</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
        
    <?php
        include_once 'footer.html';
    ?>
    
    </body>
</html>