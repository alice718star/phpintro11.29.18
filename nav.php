<!--this represents a partial, the other pages uses this and populates the NAV on each of the other pages. PHP is not only with in body , it can be before body etc-->

<header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="logout.php">Logout</a></li>
            <?php
                if(isset($_SESSION['fn'])){
                    echo '<li>hi, '.$_SESSION['fn'].'</li>';
                };
            ?>
        </ul>
    </nav>
    
</header>

<!--. here is what is doing the concantenate. Isset checks if a variable has a value-->