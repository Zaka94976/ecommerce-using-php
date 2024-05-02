<?php
session_start(); // Start session to store user login status

$Coa = mysqli_connect('localhost', 'root', '', 'ecommerce');

if (isset($_POST['submit'])) {
    $Name = $_POST['name'];

    // Query to fetch user data based on username
    $query = "SELECT * FROM `tbuser` WHERE UserName='$Name'";
    $result = mysqli_query($Coa, $query);

    if (mysqli_num_rows($result) == 1) {
        // User found, set session variables and redirect to dashboard
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['UserID'];
        $_SESSION['username'] = $row['UserName'];
        header("Location: Login.php");
        exit;
    } else {
        // Display error message if username is incorrect
        $error = "Invalid username!";
    }
}
?>
