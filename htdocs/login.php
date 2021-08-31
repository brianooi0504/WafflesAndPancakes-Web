<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
            <h1>Login</h1>
            <h3>Enter your login details here!</h3>
        </div>

        <div class="flexbox formflexborder">
            <form action="db/loginform.php" method="POST">
                <div class="item">
                    <div class="label"><label for="mail">E-mail:</label></div>
                    <div class="input"><input type="email" id="mail" name="email" placeholder="john@appleseed.com" 
                        oninvalid="alert('Email must be entered!');" required></div>
                </div>
            
                <div class="item">
                    <div class="label"><label for="password">Password:</label></div>
                    <div class="input"><input type="password" id="password" name="password"  placeholder="Enter password here" oninvalid="alert('Password field empty!');" required></div> 
                </div>
            
                <div class=item>
                    <div class="label"></div>
                    <button type="submit" class="button" name="submit">Login</button>
                </div>
                </form>
        </div>
        
        <div>
            <?php
                if (isset($_GET["error"])){
                    if($_GET["error"] == "wrongLogin"){
                        echo "<p style='color:red;'>Incorrect email or password!</p>";
                        echo "<script> alert('Incorrect email or password!'); </script>";
                    }
                    else if($_GET["error"] == "none"){
                        echo "<p style='color:red;'>You have successfully logged in!</p>";
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