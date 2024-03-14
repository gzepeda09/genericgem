<?php

    session_start();


    // Array of usernames
$usernames = array(
    "georgeisgeneric",
    "johndoe123",
    "coolguy85",
    "janedoe456",
    "nerdgirl22",
    "codingmaster",
    "webdevpro",
    "techlover007",
    "gamer123"
);

// Export data to a text file
if(isset($_POST['export'])){
    $file = 'usernames.txt';
    file_put_contents($file, implode("\n", $usernames));
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    readfile($file);
    exit;
}

    $currentPage = 'users'; 
    include 'navbar.php';


    // Function to check if the user is logged in and check session timeout
function checkLoginStatus() {
    if (isset($_SESSION['user'])) {
        // Check if last activity timestamp is set
        if (isset($_SESSION['last_activity'])) {
            // Calculate time difference between current time and last activity time
            $timeout_duration = 300; 
            $current_time = time();
            $last_activity_time = $_SESSION['last_activity'];
            $time_difference = $current_time - $last_activity_time;
            
            // If time difference exceeds timeout duration, destroy session and log user out
            if ($time_difference > $timeout_duration) {
                session_unset();
                session_destroy();
                header("Location: adminLogin.php?error=timeout");
                exit();
            }
        }
    } 
}

// Check login status and session timeout
checkLoginStatus();
   



    // Check if the user is not logged in
    if (!isset($_SESSION['user'])) {
        // Output JavaScript to display the alert before redirect
        echo '<script>alert("You do not have access to this page. Please log in as an administrator.");</script>';
        // Redirect to admin login page after a brief delay
        echo '<script>setTimeout(function(){ window.location.href = "adminLogin.php"; }, 1000);</script>';
        // Exit to prevent further execution
        exit();
    }







?>


<!-- Your HTML content goes here -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users</title>
    <link rel="stylesheet" href="">
</head>
<body>
  


     <div class="container mx-auto p-8">
        
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">List of current users</th>
                </tr>
            </thead>
            <tbody class="flex flex-col items-center">
                <?php foreach($usernames as $username): ?>
                <tr>
                    <td class="border border-gray-300 px-4 py-2 mb-10"><?php echo $username; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post" action="">
            <button type="submit" name="export" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Export to TXT</button>
        </form>
    </div>
</body>
</html>