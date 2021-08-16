<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login or Sign Up</title>
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

            <div class="flexbox flexborder">
                <div class="flexboxcolumn reb_flexitems">
                    <div class="flexitemtop" style="margin-bottom: 3%;">
                        Already have an account? Login now!
                    </div>

                    <div class="flexitembottom">
                        <a href="login.php" class="button">Login!</a>
                    </div>
                </div>

            </div>
        </div>
        
        <div>
            <h1>Create an account</h1>

            <div class="flexbox flexborder">
                <div class="flexboxcolumn reb_flexitems">
                    <div class="flexitemtop" style="margin-bottom: 3%;">
                        Don't have an account? Sign up now!
                    </div>
                    
                    <div class="flexitembottom">
                        <a href="signup.php" class="button">Sign up!</a>
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