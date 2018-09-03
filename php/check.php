<?php

if ($_POST) {
    $servername = "localhost";
    $username = "gastroli_main";
    $password = "capmai";
    $dbname = "gastroli_campaign";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    if (trim($_POST['email']) == 'levabd@gmail.com') {
        echo "Success.";
    } else {
        $sql = "INSERT INTO users (email) VALUES ('".trim($_POST['email'])."')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Success.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    $conn->close();
}

?>