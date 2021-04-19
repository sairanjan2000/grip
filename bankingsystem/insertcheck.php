<?php

	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `accounts` (`id`, `name`, `email`, `balance`) VALUES ('4', 'This works', 'this@gmail.com', '3300220')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>


