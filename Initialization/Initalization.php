<?php
session_start();
$_SESSION["gameKey"] = "1";
include_once './ConnectDB.php';

//Generate Solution
include './CreateSolution.php';
include './CreatePlayerHand.php';


?>




