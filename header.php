<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Library Website</title>
    <link rel="stylesheet" type="text/css" href="stylesheet/main.css">

</head>
<body>

    <header>
        <nav>
            <div class="main-wrapper">

                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="books.php">Books</a></li>
                    <li><a href="comments.php">Contact Us</a></li>
                </ul>
                <div class="nav-login">
                    <?php
                        if (isset($_SESSION['u_id'])) {
                            echo '<form action="includes/logout.inc.php" method="POST">
                            <button type="submit" name="submit">Logout</button>
                            </form>';
                        } else {
                            echo '<form action="includes/login.inc.php" method="POST">
                            <input type="text" name="uid" placeholder="Username/e-mail">
                            <input type="password" name="pwd" placeholder="password">
                            <button type="submit" name="submit">Login</button>
                            </form>
                            <a href="signup.php">Sign up</a>';
                        }
                    ?>
                    
                    
                </div>
                
            </div>
        </nav>
    </header>