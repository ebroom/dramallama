<?php // Example 21-2: header.php
session_start();
echo "<!DOCTYPE html>\n<html><head><script src='OSC.js'></script><meta name='apple-mobile-web-app-capable' content='yes' /><meta name='viewport' content='width=980' /><link rel='android-touch-icon' href='crazydramallama.jpg' />";
include 'functions.php';

$userstr = ' (Guest)';

if (isset($_SESSION['user']))
{
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = " ($user)";
}
else $loggedin = FALSE;

echo "<title>Drama Llama</title><link rel='stylesheet' " .
     "href='DL1.css' type='text/css' />" .
     "</head><body><img src='llamabanner.jpg' alt='Drama Llama Banner' width='700' height='120' class='header' />";

if ($loggedin)
{
    echo "<br ><ul class='menu'>" .
         "<li><a href='members.php?view=$user'>Home</a></li>" .
         "<li><a href='members.php'>Members</a></li>" .
         "<li><a href='friends.php'>Friends</a></li>" .
         "<li><a href='messages.php'>Messages</a></li>" .
         "<li><a href='profile.php'>Edit Profile</a></li>" .
         "<li><a href='logout.php'>Log out</a></li></ul><br />";
}
else
{
    echo ("<br /><ul class='menu'>" .
         "<li><a href='index.php'>Home</a></li>" .
         "<li><a href='signup.php'>Sign up</a></li>" .
         "<li><a href='login.php'>Log in</a></li></ul><br />" .
         "<span class='info'>&#8658; You must be logged in to " .
         "view this page.</span><br /><br />");
}
?>
