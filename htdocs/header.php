<?php
    session_start();
?>

<header>
    <div class="headercontainer">
        <div class="logo">
            <a href="index.php"><img src="images/MainLogo.png" alt="WAP Logo"></a>
        </div>

        <?php
            if (isset($_SESSION["email"])){
                echo '<div class="account">';
                echo '<a href="db/logout.php" class="button">Logout</a>';
                echo "</div>";
                echo '<div class="account">';
                echo "<a href='nothinghere.php' class='button'>My orders</a>";
                echo "</div>";
            }
            else{
                echo '<div class="account">';
                echo '<a href="login&signup.php" class="button">Login or SignUp!</a>';
                echo "</div>";
            }

        ?>

    </div>

    <nav>
        <ul class="ul_nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="reservations&events.php">Reservations & Events</a></li>
            <li><a href="nothinghere.php">Delivery</a></li>
            <li><a href="nothinghere.php">Promotions</a></li>
        </ul>
    </nav>
</header>