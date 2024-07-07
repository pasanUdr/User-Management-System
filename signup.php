<?php
include_once 'header.php'
?>

<div class="form">
    <h1>Log In</h1>
    <form action="includes/login.inc.php" method="post">


        <input type="text" id="fname" name="firstname" placeholder="Name">
        <input type="text" id="fname" name="firstname" placeholder="Email">
        <input type="text" id="fname" name="firstname" placeholder="Username">
        <input type="text" id="lname" name="lastname" placeholder="Password">
        <input type="text" id="lname" name="lastname" placeholder="Repeat Password">

        <button name="submit" type="submit">Log-In</button>
    </form>

    <p>Already have an acoount? <a href="login.php">Log-In.</a> </p>

</div>

<?php
include_once 'footer.php'
?>