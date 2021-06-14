<?php
    $username = $_$POST['email'];
    $password = $_$POST['password'];

    //Database connection 

    $con = new mysqli("localhost","root","","school record");
    if ($con->connection_error) {
        die("Failed to connect : ".$con->connect_error ) 

        } else {
            $stmt = $con->prepare("select * from student where username = ? ");
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt_result = $stmt->get_result();
            if($stmt_result->num_rows > 0) {
                $data = $stmt_result->fetch_assoc();
                if ($data['password']===)
                echo "<h2>Login Succesfully</h2>";
            } else {
                echo "<h2>Invalid username or password</h2>";
            }

        }
        
    
?>