<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>



<!-- Navbar -->
<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="#" class="text-white font-bold">Generic Gem</a>
        <ul class="flex space-x-4">
            <li><a href="index.php"> <button class="<?php if($currentPage == 'home') echo 'bg-white text-dark rounded-full w-24'; else echo 'text-white' ?>">Home</button></a></li>
            <li><a href="about.php"> <button class=" <?php if($currentPage == 'about') echo 'bg-white text-dark rounded-full w-24'; else echo 'text-white' ?>">About</button></a></li>
            <li><a href="products.php"> <button class=" <?php if($currentPage == 'products') echo 'bg-white text-dark rounded-full w-24'; else echo 'text-white' ?>">Products</button> </a></li>
            <li><a href="index.php#contact"> <button class="<?php if($currentPage == 'contact') echo 'bg-white text-dark rounded-full w-24'; else echo 'text-white  ' ?>">Contact</button></a></li>
            <li><a href="users.php"> <button class="<?php if($currentPage == 'users') echo 'bg-white text-dark rounded-full w-24'; else echo 'text-white  ' ?>">Users</button></a></li>
        </ul>
    </div>
</nav>
<body>
    
</body>
</html>




