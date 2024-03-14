<?php
    session_start();
    $currentPage = 'products'; 
?>
<!-- Include navbar -->
<?php include 'navbar.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <link href="main.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Our Products</h1>

        <div id="productContainer"class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-6 ">
            
        </div>
    </div>



    <script>
            document.addEventListener("DOMContentLoaded", function () {
                const products = [
                    { 
                      name: "Viotek 4k Curved Monitor", 
                      description: "Viotek ever heard of them? Exactly, can you trust them? Maybe.", 
                      price: "$9999.99" },

                    { name: "Hwagol Smart Watch", 
                      description: "Who needs Apple, Hwagol has you covered in the smart watch department. A generic gem best seller this watch will definetly...maybe work!", 
                      price: "$4000.99" },

                    { name: "Generic 1 - Shoe", description: "This shoe has nothing going for it except that its a shoe", price: "$50025.71" },
                    { name: "Generic Stove", 
                      description: "Experience culinary mastery with the Generic Stove, a state-of-the-art appliance designed to elevate your cooking experience. Featuring advanced heating technology and intuitive controls, this stove ensures precision and efficiency in every dish you prepare. Say goodbye to bland meals and hello to culinary excellence with the Generic Stove!", 
                      price: "$4045.99" },
                    { name: "Generic Parachute", 
                      description: "Embark on daring adventures with the Generic Parachute, your trusty companion for thrilling skydiving escapades. Crafted from high-quality materials and engineered for maximum safety, this parachute offers peace of mind as you soar through the skies. Whether you're a seasoned adrenaline junkie or a novice thrill-seeker, the Generic Parachute is your ticket to exhilarating freefall experiences.", 
                      price: "$20.99" },
                    { name: "Generic strawberries", 
                      description: "Indulge in nature's sweet bounty with Generic Strawberries, luscious red gems bursting with flavor and freshness. Handpicked from sun-kissed fields and carefully selected for optimal ripeness, these strawberries promise a symphony of taste sensations with every juicy bite. Whether enjoyed on their own or incorporated into your favorite recipes, Generic Strawberries are a delightful treat for any occasion.", 
                      price: "$400000.99" },
                    
            ];

            const productContainer = document.getElementById("productContainer");

            products.forEach(product => {
                const productCard = document.createElement("div");
                productCard.classList.add("bg-white", "rounded-lg", "shadow-md", "p-6", "border-4", "border-black", "hover:border-blue-700", "hover:shadow-lg", "hover:cursor-pointer");

                const productName = document.createElement("h2");
                productName.classList.add("text-xl", "font-bold", "mb-2");
                productName.textContent = product.name;

                const productDescription = document.createElement("p");
                productDescription.classList.add("text-gray-700", "mb-2");
                productDescription.textContent = product.description;

                const productPrice = document.createElement("p");
                productPrice.classList.add("text-gray-700", "font-bold");
                productPrice.textContent = product.price;

                productCard.appendChild(productName);
                productCard.appendChild(productDescription);
                productCard.appendChild(productPrice);

                productContainer.appendChild(productCard);
            });
        });
    </script>
</body>
</html>