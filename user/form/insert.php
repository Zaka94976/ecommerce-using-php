<?php
$Coa = mysqli_connect('localhost', 'root', '', 'ecommerce');
if (isset($_POST['submit'])) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Number = $_POST['number'];
    $password = $_POST['password'];

    // Query to check if email already exists
    $Dum_Email = mysqli_query($Coa, "SELECT * FROM `tbuser` WHERE Email='$Email'");
    // Query to check if username already exists
    $dum_Username = mysqli_query($Coa, "SELECT * FROM `tbuser` WHERE UserName='$Name'");

    // Check if email already exists
    if (mysqli_num_rows($Dum_Email) > 0) {
        echo "
          <script>
            alert('This email is already registered.');
            window.location.href='Registration.php';
          </script>
        ";
        exit; // Stop further execution
    }

    // Check if username already exists
    if (mysqli_num_rows($dum_Username) > 0) {
        echo "
          <script>
            alert('This username is already taken.');
            window.location.href='Registration.php';
          </script>
        ";
        exit; // Stop further execution
    }

    // Insert new user data if email and username are unique
    $insert_query = "INSERT INTO `tbuser`(`UserName`, `Email`, `Number`, `Password`) VALUES ('$Name', '$Email', '$Number', '$password')";
    if (mysqli_query($Coa, $insert_query)) {
        echo "
          <script>
            alert('Registration successful.');
            window.location.href='Login.php';
          </script>
        ";
    } else {
        echo "
          <script>
            alert('Error registering user. Please try again.');
            window.location.href='Registration.php';
          </script>
        ";
    }
}
?>
