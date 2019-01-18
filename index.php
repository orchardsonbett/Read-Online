<?php
include_once 'header.php';
?>
    <section class="main-container">
        <div class="main-wrapper">
            <h2>Home</h2>
            <?php
            if (isset($_SESSION['u_id'])) {
                echo "You are logged in";
            }

            ?>
            <h3>Welcome to the Online Library.The place for all book lovers.</h3>
            
    <section class="title">
        <h1>About Website</h1>
        <div id="text">
            <p>This is a website that holds various african written stories both long and short which will include a variety of different stories by different writers.Please leave a comment incase you want a particular book to be added of if you have anything you want to be added or changed in the website.<br>
            <button type="submit" name="submit"><a href="comments.php">Comment</a></button></p>
            <img src="img/front.jpg">
        </div>
    </section>
        </div>
    </section>

<?php
include_once 'footer.php';
?>


