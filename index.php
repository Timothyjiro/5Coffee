<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- SPLASH -->
        <div>
            <div class="intro">
                <div class="intro-text">
                    <h1 class="hide">
                        <span class="text"><img src="assets/img/logo_putih.png" width="250px" alt=""></span>
                    </h1>
                </div>
            </div>
            <div class="slider"></div>
        </div>

        <!-- NAVBAR -->
        <nav class="sticky top-0 bg-white/75 backdrop-blur-lg grid grid-cols-2 py-2 px-14 z-50">
            <div class="ml-10">
                <a href=""><img src="assets/img/logofix.png" id="logo" width="70px" /></a>
            </div>
            <div class="flex justify-end gap-8 m-6 mx-7">
                <a href="#bagian0" class="hover:text-green-800 transition duration-300 ease-in">ACHIEVEMENT</a>
                <a href="#bagian1" class="hover:text-green-800 transition duration-300 ease-in">PROMOTION</a>
                <a href="#bagian2" class="hover:text-green-800 transition duration-300 ease-in">MENU</a>
                <a href="" class="hover:text-green-800 transition duration-300 ease-in">OURSTORY</a>
                <a href="" class="hover:text-green-800 transition duration-300 ease-in">FEEDBACK</a>
                <!-- <a href="" class="flex mt-0.5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                    </svg>
                </a> -->
            </div>
        </nav>
  
  <!-- BACKGROUND -->
        <div class="absolute z-0 h-1/2">
            <img src="assets/img/background2.png" alt="">
        </div>
  
  <!-- CAROUSEL -->
        <div class="my-10 mr-0">
            <div class="kotak js-flickity" data-flickity-options='{ "wrapAround": true }'>
                <div class="kotak-kotak">
                    <img src="assets/img/banner2.jpg" alt="" class="" id="image">
                </div>
                <div class="kotak-kotak">
                    <img src="assets/img/banner3.jpg" alt="">
                </div>
                <div class="kotak-kotak">
                    <img src="assets/img/banner1.jpg" alt="">
                </div>
            </div>
        </div>
    
    <!-- ACHIEVEMENT -->
        <div class="mt-44">
            <section id="bagian0" class="sectionSize bg-black text-white text-center">
                <div class="flex w-full flex-col md:flex-row gap-3 pb-10">
                    <div class="flex-1 flex flex-col mx-6 relative rounded-2xl px-8">
                        <img src="assets/img/putih_2.png" width="300px" alt="">
                        <div>
                            <h1 class="font-bold">HALAL CERTIFICATION</h1>
                            <br>
                            <p>5% coffee strengten its commitment to
                                serve the best quality product and become the first Kopi Susu
                                Kekinian to obtain Halal Certification from Majelis Ulama Indonesia</p>
                        </div>
                    </div>

                    <div class="flex-1 flex flex-col mx-6 relative rounded-2xl px-8">
                        <div class="mx-auto py-8">
                            <img src="assets/img/putih_3.png" width="140px" class="" alt="">
                        </div>
                        <div class="">
                            <h1 class="font-bold">COFFEE JOURNEY</h1>
                            <br>
                            <p>Since 2017, it always has been and will always be about quality.
                                We work relentlessly to guarantee we deliver on our promise. From harvest, tasting,
                                roasting and working together with the producers in Indonesia to produce the best crop to our customers.
                                Our passion for coffee is rivaled only by our love of sharing it.</p>
                        </div>
                    </div>

                    <div class="flex-1 flex flex-col mx-6 relative rounded-2xl px-8 ">
                        <img src="assets/img/putih_1.png" width="300px" alt="">
                        <div>
                            <h1 class="font-bold">WORLD BEST BRAND WINNER</h1>
                            <br>
                            <p>5% has been appointed as the only Brand of The Year winner
                                in the Café Chain category from Indonesia by The World Branding Awards.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- NEWS -->
        <section id="bagian2" class="sectionSize">
            <br>
            <div class="mt-18">
                <h2 class="font-bold text-3xl bg-100%">New Menu</h2>
            </div>
            <div class="flex w-full flex-col md:flex-row">
                <div class="flex-1 flex flex-col mx-6 shadow-2xl relative rounded-2xl py-5 px-8 mb-8 md:top-8">
                    <h3 class="font-normal text-2xl mb-4">
                        Iced Latte
                    </h3>
                    <div class="mx-auto">
                        <img src="assets/img/mockup7.png" class="w-44" alt="">
                    </div>
                    <div class="font-bold text-2xl mb-4">
                        $15
                        <span class="font-normal text-base"> / cup</span>
                    </div>
                    <div>
                        <p>Two shots of Espresso with fresh milk without sugar</p>
                    </div>
                    <button class="border-2 border-solid border-black rounded-xl text-lg py-2 mt-16">
                        Read More
                    </button>
                </div>
                
    <!-- MENU -->
                <div class="flex-1 flex flex-col mx-6 shadow-2xl relative rounded-2xl py-5 px-8 mb-8 md:top-8">
                    <h3 class="font-normal text-2xl mb-4">
                        Iced Palm Sugar
                    </h3>
                    <div class="mx-auto">
                        <img src="assets/img/mockup8.png" class="w-44" alt="">
                    </div>
                    <div class="font-bold text-2xl mb-4">
                        $25
                        <span class="font-normal text-base"> / cup</span>
                    </div>
                    <div>
                        <p>Two shots of Espresso with a combination of the sweetness of palm sugar and fresh milk</p>
                    </div>
                    <button class="border-2 border-solid border-black rounded-xl text-lg py-2 mt-4">
                        Read More
                    </button>
                </div>

                <div class="flex-1 flex flex-col mx-6 shadow-2xl relative rounded-2xl py-5 px-8 mb-8 md:top-8">
                    <h3 class="font-normal text-2xl mb-4">
                        Iced Mocha
                    </h3>
                    <div class="mx-auto">
                        <img src="assets/img/mockup6.png" class="w-44" alt="">
                    </div>
                    <div class="font-bold text-2xl mb-4">
                        $10
                        <span class="font-normal text-base"> / cup</span>
                    </div>
                    <div>
                        <p>Two shots of Espresso with 5% coffee's signature chocolate and fresh milk</p>
                    </div>
                    <button class="border-2 border-solid border-black rounded-xl text-lg py-2 mt-10">
                        Read More
                    </button>
                </div>
            </div>
        </section>
    
<!-- FOOTER -->
    <footer class="mt-24">
            <div class="px-10 p-4 bg-gray-100 text-black">
                <div class="">
                    <div class="grid grid-cols-4 gap-2">
                        <div class="mb-5">
                            <h4 class="text-amber-800 text-2xl font-semibold">Products</h4>
                            <ul>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="#" class="">Coffee</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Tea Series</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Milk Series</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Croffle</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Cookies and Cream</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Marchandise</a></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h4 class="text-amber-800 text-2xl font-semibold">Informations</h4>
                            <ul>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Founder of 5%</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Promotions</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Fun Fact</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Our Story</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Feedback</a></li>
                                <li class="hover:text-orange-700 transition duration-300 ease-in-out"><a href="">Locations</a></li>
                            </ul>
                        </div>

                        <div class="mb-5">
                            <h4 class="text-amber-800 text-2xl font-semibold">Contact Us</h4>
                            <p><a href="#" class="hover:text-orange-700 transition duration-300 ease-in-out">customercare@5percentcoffee.id</a></p>
                            <br>
                            <p>Customer Hotline : <a href="#" class="hover:text-orange-700 transition duration-300 ease-in-out">(021)1500280</a></p>
                            <p>Contact : <a href="#" class="hover:text-orange-700 transition duration-300 ease-in-out">+628115484222</a></p>
                            <div class="grid grid-cols-5 gap-3 w-48 mt-2 ml-[-3px]">
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/instagram-new--v1.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/facebook-new.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/whatsapp--v1.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/twitter.png"/></a>
                                <a href="#"><img src="https://img.icons8.com/material-outlined/48/000000/youtube-play--v1.png"/></a>
                            </div>
                        </div>
                        <div class="mx-auto">
                            <img src="assets/img/logofix.png" alt="" class="w-32">
                            <p class="font-semibold mt-2 ml-1.5 text-sm">©1780 5%COFFEE.ID, ALL RIGHT RESERVED.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-gray-200 text-black p-2 px-4 ">
                <div class="flex justify-between">
                    <div class="text-left text-sm ml-5">
                        <div>
                            Copyright company. All Right Reserved
                        </div>
                        <div>
                            Designed by XID RPL
                        </div>
                    </div>

                </div>
            </div>
        </footer>

</body>
</html>
