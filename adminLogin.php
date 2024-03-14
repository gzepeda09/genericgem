<?php     
    session_start();
    include 'navbar.php';
 


 ?>

 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Admin Login</title>
     <link rel="stylesheet" href="">
 </head>
 <body>
<section class="bg-gray-50 dark:bg-gray-900">
 <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
     <div class="w-full bg-white rounded-lg shadow-xl border-2 border-gray-800 md:mt-0 sm:max-w-md xl:p-0">
         <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
             <h1 class="text-xl font-bold text-center text-gray-900 md:text-2xl">
                 Admin Login
             </h1>
             <form class="space-y-4 md:space-y-6" action="adminLoginBackend.php" method="post">
                 <div>
                     <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                     <input type="text" name="email" id="email" class="bg-gray-50 border border-gray-800 text-gray-900 sm:text-sm rounded-lg focus:ring-red-600 focus:border-red-600 block w-full p-2.5" placeholder="name@company.com" required="">
                 </div>
                 <div>
                     <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                     <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-800 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                 </div>

                 </div>
                 <div class="flex justify-center">
                 <button type="submit" name="submit" class="w-1/2 text-white mb-5 bg-gray-800 hover:bg-black focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Sign in</button>
                 </div>
             </form>


             <?php 
                 //error messages displayed to user
                 if (isset($_GET["error"])) {
                     if ($_GET["error"] == "badPass") {
                         echo "<p class='text-red-800 text-center font-bold text-xl mb-5'> Wrong Password! </p>";
                     } elseif ($_GET["error"] == "badUsername") {
                         echo "<p class='text-red-800 text-center font-bold text-xl mb-5'>Username incorrect</p>";
                     } elseif ($_GET["error"] == "badBoth") {
                         echo "<p class='text-red-800 text-center font-bold text-xl mb-5'>Username & Password Incorrect!</p>";
                     } elseif ($_GET["error"] == "timeout") {
                         echo "<p class='text-red-800 text-center font-bold text-xl mb-5'>Timed-Out, Please login again!</p>";
                     } 
                 }
             ?>
         </div>
     </div>
 </div>

</section>
 </body>
 </html>