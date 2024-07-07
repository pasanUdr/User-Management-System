<?php
include_once 'header.php'
?>

<div class="form">
    <h1>Log In</h1>
    <form action="includes/login.inc.php" method="post">

        <input type="text" id="fname" name="uid" placeholder="Email / Username">

        <input type="password" id="lname" name="pwd" placeholder="Password">

        <button name="submit" type="submit">Log-In</button>

        <p>Don't have an acoount? <a href="signup.php">Register.</a> </p>
    </form>

</div>

<?php
include_once 'footer.php'
?>