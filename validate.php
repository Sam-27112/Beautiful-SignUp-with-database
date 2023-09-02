<?php
include_once('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Password is correct, redirect to admin page
            session_start();
            $_SESSION['username'] = $username;
            header("location: adminpage.php");
        } else {
            // Password is incorrect
            echo "<script language='javascript'>";
            echo "alert('Wrong username or password')";
            echo "</script>";
        }
    } else {
        // User not found
        echo "<script language='javascript'>";
        echo "alert('User not found')";
        echo "</script>";
    }
}
?>
