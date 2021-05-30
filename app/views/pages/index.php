<?php

    foreach ($data['users'] as $user) {
        echo "User: " . $user->user_name . " " . $user->user_email;
        echo "<br>";
    }

?>

