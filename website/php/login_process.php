<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "flood_monitoring");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM user_table WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {

    $user = mysqli_fetch_assoc($result);

    if ($user['account_status'] != 'Enable') {

        header("Location: ../login.php?error=Your account has been disabled");
        exit();

    } elseif ($password != $user['password']) {

        header("Location: ../login.php?error=Incorrect password");
        exit();

    } else {

        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['fullname'] = $user['Fullname'];
        $_SESSION['role'] = $user['role'];

        header("Location: ../index.php");
        exit();
    }

} else {

    header("Location: ../login.php?error=Email does not exist");
    exit();
}
?>