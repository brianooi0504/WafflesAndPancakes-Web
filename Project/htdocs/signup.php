<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
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
            <h1>Create an account</h1>
            <h3>Create a free account to manage your orders and reservations!</h3>
        </div>

        <div class="flexbox formflexborder">
            <form action="db/signupform.php" method="POST">
                <div class="item">
                    <div class="label"><label for="name">First Name:</label></div>
                    <div class="input"><input type="text" id="name" name="firstname" placeholder="John" required></div>
                </div>
            
                <div class="item">
                    <div class="label"><label for="surname">Surname:</label></div>
                    <div class="input"><input type="text" id="surname" name="surname" placeholder="Appleseed" required></div>
                </div>

                <div class="item">
                    <div class="label"><label for="phone">Phone number:</label></div>
                    <div class="input"><input type="tel" id="phone" name="phone" placeholder="012-3456789" pattern="[0-9]{3}-[0-9]{7,8}" 
                        oninvalid="alert('Phone number must be in the format 012-3456789!');" required></div>
                </div>
                
                <div class="item">
                    <div class="label"><label for="mail">E-mail:</label></div>
                    <div class="input"><input type="email" id="mail" name="email" placeholder="john@appleseed.com" 
                        oninvalid="alert('Your email must be in the correct format!');" required></div>
                </div>
            
                <div class="item">
                    <div class="label"><label for="password">Password:</label></div>
                    <div class="input"><input type="password" id="password" name="password" placeholder="Enter password here" oninvalid="alert('Password field empty!');" required></div> 
                </div>

                <div class="item">
                    <div class="label"><label for="passwordrpt">Retype password:</label></div>
                    <div class="input"><input type="password" id="passwordrpt" name="passwordrpt" placeholder="Retype password here" oninvalid="alert('Password field empty!');" required></div> 
                </div>
            
                <div class=item>
                    <div class="label"></div>
                    <button type="submit" class="button" name="submit">Register</button>
                </div>
                </form>

        </div>

        <div>
            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "passwordsdontmatch"){
                        echo "<p style='color:red;'>Passwords don't match!</p>";
                        echo "<script> alert('Passwords do not match!'); </script>";
                    }
                    else if($_GET["error"] == "stmtfailed"){
                        echo "<p style='color:red;'>Something went wrong, try again!</p>";
                        echo "<script> alert('Something went wrong, try again!'); </script>";
                    }
                    else if($_GET["error"] == "emailtaken"){
                        echo "<p style='color:red;'>Email is already used!</p>";
                        echo "<script> alert('Email is already in use!'); </script>";
                    }
                    else if($_GET["error"] == "none"){
                        echo "<p style='color:blue;'>You have successfully signed up!</p>";
                    }
                }
            ?>
        </div>
    </main>
    
    <?php
        include_once 'footer.html';
    ?>
    
    </body>
    
</html>