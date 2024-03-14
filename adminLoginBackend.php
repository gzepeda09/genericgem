
// session_start();

// // Hardcoded username and password
// $correctUsername = 'admin';
// $correctPassword = 'admin';

// // Check if form is submitted
// if (isset($_POST["submit"])) {
//     // Get username and password from the form
//     $username = $_POST['email'];
//     $password = $_POST['password'];

//     // Check if username and password match the hardcoded values
//     if ($username === $correctUsername && $password === $correctPassword) {
//         // Redirect to a success page
//         $_SESSION['user'] = $username;
//         header("Location: users.php");
//         exit();
//     } elseif ($username === $correctUsername && $password != $correctPassword) {
//         // Redirect back to the login page with an error message
//         header("Location: adminLogin.php?error=badPass");
//         exit();
//     } elseif ($username != $correctUsername && $password === $correctPassword) {
//         header("Location: adminLogin.php?error=badUsername");
//         exit();
//     } else {
//         header("Location: adminLogin.php?error=badBoth");
//         exit();
//     }
// } else {
//     // Redirect back to the login page if form is not submitted
//     header("Location: adminLogin.php");
//     exit();
// }


<?php
session_start();

// Hardcoded username and password
$correctUsername = 'admin';
$correctPassword = 'admin';

// Check if form is submitted
if (isset($_POST["submit"])) {
    // Get username and password from the form
    $username = $_POST['email'];
    $password = $_POST['password'];

    // Check if username and password match the hardcoded values
    if ($username === $correctUsername && $password === $correctPassword) {
        // Set session variable for logged-in user
        $_SESSION['user'] = $username;
        // Set last activity timestamp
        $_SESSION['last_activity'] = time();
        header("Location: users.php");
        exit();
    } elseif ($username === $correctUsername && $password != $correctPassword) {
        // Redirect back to the login page with an error message
        header("Location: adminLogin.php?error=badPass");
        exit();
    } elseif ($username != $correctUsername && $password === $correctPassword) {
        header("Location: adminLogin.php?error=badUsername");
        exit();
    } else {
        header("Location: adminLogin.php?error=badBoth");
        exit();
    }
} else {
    // Redirect back to the login page if form is not submitted
    header("Location: adminLogin.php");
    exit();
}
?>
