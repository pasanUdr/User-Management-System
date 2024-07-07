<?php
// check if user clicked the submit button
if ( isset( $_POST["submit"] ) ) {
}
// if user coming from calling the link this will direct to index.php
else {
    header("location:../login.php");
}