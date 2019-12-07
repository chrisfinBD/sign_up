<?php
#The username value must be longer than 2 characters. 
if(strlen($_POST["username"]) < 2) {
    echo "Username " . $_POST['username'] . " is too short. Your username must be at least 2 characters long.";
}
#The email value must contain the "@" symbol in it. 
$found = strpos($_POST["emailAddr"], "@");
if($found === false) {
    echo "Invalid email address entered " . $_POST["emailAddr"] . " must contain a '@' symbol.";
}
#The age value must be greater than 18
if($_POST["age"] < 18) {
    echo "Age is too low. You must be at least 18 to sign up.";
}

#The password and password_confirmation values must be identical.
if($_POST["password"] != $_POST["passwordConfirmation"]) {
    echo "Confirm password does not match Password, please review and try again.";
}
?>