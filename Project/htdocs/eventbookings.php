<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book an event</title>
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
            <h1>Host your event with us!</h1>
        </div>

        <div class="flexbox formflexborder">
            <form action="db/bookingform.php" method="POST">
                <div class="item">
                    <div class="label"><label for="name">First Name:</label></div>
                    <div class="input"><input type="text" id="name" name="firstname" placeholder="John" required></div>
                </div>
            
                <div class="item">
                    <div class="label"><label for="surname">Surname:</label></div>
                    <div class="input"><input type="text" id="surname" name="surname" placeholder="Appleseed" required></div>
                </div>

                <div class="item">
                    <div class="label"><label for="mail">E-mail:</label></div>
                    <div class="input"><input type="email" id="mail" name="email" placeholder="john@appleseed.com" 
                        oninvalid="alert('Your email must be in the correct format!');" required></div>
                </div>
            
                <div class="item">
                    <div class="label"><label for="phone">Phone number:</label></div>
                    <div class="input"><input type="tel" id="phone" name="phone" placeholder="012-3456789" pattern="[0-9]{3}-[0-9]{7,8}" required></div>
                </div>
            
                <div class="item">
                    <div class="label"><label for="guests">Number of guests:</label></div>
                    <div class="input"><input type="number" id=guests name="guests" placeholder="25" min="1"
                        oninvalid="alert('The number of guests must be more than 0!');" required></div>
                </div>

                <div class="item">
                    <div class="label"><label for="date">Date:</label></div>
                    <div class="input"><input type="date" id="date" name="date" placeholder="MM/DD/YYYY" required></textarea></div>
                </div>

                <div class="item">
                    <div class="label"><label for="time">Time:</label></div>
                    <div class="input"><input type="time" id="time" name="time" placeholder="HH:MM AM/PM" required></textarea></div>
                </div>

                <div class="item">
                    <div class="label"><label for="reqs">Extra details and special requests:</label></div>
                    <div class="input"><textarea id="reqs" name="reqs" placeholder="Enter name of event, your details and special requests" required></textarea></div>
                </div>
            
                <div class=item>
                    <div class="label"></div>
                    <button type="submit" class="button" name="submit">Confirm details</button>
                </div>
                </form>
        </div>

    </main>
    
    <?php
        include_once 'footer.html';
    ?>
    
    </body>
    
</html>