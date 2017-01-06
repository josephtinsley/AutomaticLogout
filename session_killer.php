<?php
/**
 * Document   : Auto Logout Script
 * Author     : josephtinsley
 * Description: Force a logout automatically after a certain amount of time using HTML/JQuery/PHP. 
 * http://twitter.com/josephtinsley 
*/

session_start();
session_destroy();

header("Location:./signedout.html");
exit();