<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us</title>
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
            <h1>Contact Us!</h1>
            <h3>Facing any issues or problems? Drop us the details down here!</h3>
        </div>
        
        <div class="flexbox formflexborder">
            <form action="db/contactform.php" method="POST">
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
                    <div class="input"><input type="tel" id="phone" name="phone" placeholder="012-3456789" pattern="[0-9]{3}-[0-9]{7,8}" 
                        oninvalid="alert('Phone number must be in the format 012-3456789!');" required></div>
                </div>
            
                <div class="item">
                    <div class="label"><label for="message">Message:</label></div>
                    <div class="input"><textarea id="message" name="message" placeholder="Enter your message" required></textarea></div>
                </div>
            
                <div class=item>
                    <div class="label"></div>
                    <button type="submit" class="button" name="submit">Submit</button>
                </div>
            </form>
            
        </div>
    
        
    </main>
    
    <?php
        include_once 'footer.html';
    ?>
    
    </body>
    
</html>