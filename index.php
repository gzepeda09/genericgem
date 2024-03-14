<?php
    session_start();
   
    $currentPage = 'home'; 
?>
<!-- Include navbar -->
<?php include 'navbar.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generic Underwear Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
        /* Additional styles for the slider */
        .slider {
            overflow: hidden;
        }

        .slider-container {
            display: flex;
            transition: transform 0.5s ease;
        }

        .slider-item {
            flex: 0 0 100%; /* Force each item to take up full width */
        }
    </style>
</head>
<body class="bg-gray-100">



<!-- Hero Section -->
<section class="h-screen bg-gray-300 py-20 flex justify-center items-center border-b-4 border-gray-800">
    <div class="container mx-auto">
        <h1 class="text-4xl font-bold mb-4 text-center">Welcome to Generic Gem</h1>
        <p class="text-xl text-gray-700 text-center">Where Generic is a Gem!</p>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-16 border-b-4 border-gray-800">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8">About Us</h2>
        <p class="text-lg text-gray-700">Generic according to Google: 
            <a class="italic">"a consumer product having no brand name or registered trademark"</a> 
            , Here at Generic Gem we put value in brands with <a class="font-bold">"no name"...
            </a>

            <a href="about.php"><button class="text-sm w-48 text-dark border border-gray-800 rounded-full  italic hover:text-white hover:bg-gray-800 mt-5"> Click to learn more >> </button></a>

        </p>
    </div>
</section>

<!-- Products Section -->
<section id="products" class="py-16 bg-gray-100 border-b-4 border-gray-800">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8">Our Products</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Product Card Example -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-2">Viotek 4k Curved Monitor</h3>
                <p class="text-gray-700">Viotek ever heard of them? Exactly, can you trust them? Maybe.</p>
                <p class="text-gray-600 mt-2">$9999.99</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-2">Hwagol Smart Watch</h3>
                <p class="text-gray-700">Who needs Apple, Hwagol has you covered in the smart watch department. A generic gem best seller this watch will definetly...maybe work!</p>
                <p class="text-gray-600 mt-2">$4000.99</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h3 class="text-xl font-bold mb-2">Generic 1 - Shoe</h3>
                <p class="text-gray-700">This shoe has nothing going for it except that its a shoe. <a class="text-xs italic">* Issue with broken ankles has been fixed </a> *</p>
                <p class="text-gray-600 mt-2">$50025.71</p>
            </div>
        </div>

         <a href="products.php"><button class="text-sm w-48 text-dark border border-gray-800 rounded-full  italic hover:text-white hover:bg-gray-800 mt-5"> see more >> </button></a>
    </div>
</section>


<!-- News Section -->
<section class="bg-gray-100 py-10 border-b-4 border-gray-800">
    <div class="container mx-auto">
        <h2 class="text-3xl font-bold mb-6">Latest News</h2>

        <!-- Slider -->
        <div class="slider relative">
            <div class="slider-container">
                <!-- News Items -->
                <div class="slider-item bg-white rounded-lg shadow-md p-6 mr-4">
                    <h3 class="text-xl font-bold mb-2">Breaking News: Generic Gem Unveils Mystery Candy Collection!</h3>
                    <p>Get ready to satisfy your sweet tooth with the latest announcement from Generic Gem—the unveiling of their highly anticipated Mystery Candy Collection! Dive into a world of tantalizing flavors and enigmatic treats, where each bite promises a surprise like no other. Whether you're craving a burst of fruity goodness or a hint of decadent chocolate, Generic Gem has something for everyone. Join the excitement and indulge in the delicious mysteries of the Mystery Candy Collection, available now on Generic Gem's website!</p>
                </div>
                <div class="slider-item bg-white rounded-lg shadow-md p-6 mr-4">
                    <h3 class="text-xl font-bold mb-2">Step into the Unknown: Generic Gem Unveils New Line of Mystery Shoes!</h3>
                    <p>Prepare to walk on the wild side with Generic Gem's latest footwear revelation—the Mystery Shoe Collection! With each pair shrouded in secrecy, these enigmatic shoes promise an unparalleled journey of discovery with every step. From sleek sneakers to stylish boots, each shoe in the collection boasts a unique design that defies convention and invites exploration. Embrace the thrill of the unknown and elevate your footwear game with the Mystery Shoe Collection, available exclusively at Generic Gem. Don't miss your chance to step into a world of mystery and style—order your pair today!</p>
                </div>
                <div class="slider-item bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-bold mb-2">URGENT: Recall Notice Issued for Generic Gem's Mystery Shoes</h3>
                    <p>Attention, valued customers: Generic Gem regrets to announce a recall on its recent Mystery Shoe Collection due to unforeseen quality concerns. While we strive to deliver unparalleled products, we have identified a potential issue that may compromise the safety and performance of these shoes. As your well-being is our top priority, we urge all customers who have purchased shoes from the Mystery Shoe Collection to immediately cease use and return them to Generic Gem for a full refund or exchange. We sincerely apologize for any inconvenience this may cause and remain committed to upholding the highest standards of quality and customer satisfaction. Thank you for your understanding and cooperation in this matter.</p>
                </div>
            </div>
            <!-- Forward Button -->
            <button class="mt-10 transform -translate-y-1/2 px-4 py-2  rounded-md focus:outline-none text-sm w-24 lg:w-48 text-dark border border-gray-800 rounded-full  italic hover:text-white hover:bg-gray-800 " onclick="nextSlide()">Next</button>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-8">Contact Us</h2>
        <p class="text-lg text-gray-700">Have any questions or concerns? Reach out to us!</p>
        
        <?php
            // Read contact information from the text file
            $contactInfo = file_get_contents('contact_info.txt');

            // Display the contact information
            echo "<p class='text-lg text-gray-700'>$contactInfo</p>";
        ?>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-white text-center py-4">
    <div class="container mx-auto">
        <p>&copy; 2024 Generic Underwear Store. All rights reserved.</p>
    </div>
</footer>



<script>
    // JavaScript for slider functionality
    const sliderContainer = document.querySelector('.slider-container');
    const sliderItems = document.querySelectorAll('.slider-item');
    const totalItems = sliderItems.length;
    let currentIndex = 0;

    function moveSlider() {
        const slideWidth = sliderItems[0].offsetWidth;
        currentIndex = (currentIndex + 1) % totalItems;
        const translateXValue = -currentIndex * slideWidth;
        sliderContainer.style.transform = `translateX(${translateXValue}px)`;
    }

    function nextSlide() {
        moveSlider();
    }

    setInterval(moveSlider, 20000); // Auto slide every 3 seconds
</script>


</body>



</html>
