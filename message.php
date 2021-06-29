<?php

include 'env.php';

if (isset($_POST['send'])) {

    $username = $_POST['username'];
    $message = $_POST['message'];

    $query = "INSERT INTO chat (username,message) VALUES ('$username','$message')";
    $execute = $connection->query($query);

    if ($execute) {
        echo "<embed loop='false' src='sounds/beap.mp3' hidden='true' autoplay='true' >";
    }
}

?>