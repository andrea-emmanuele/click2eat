<x-app-layout>
    <x-slot name="header">
        <div class="pt-52 pl-10 lg:pl-96 text-white text-7xl">
            <h1>Choose it</h1>
            <h1>Click it</h1>
            <h1>Eat it</h1>
        </div>
    </x-slot>

    <x-slot name="slot">
        <!-- sezione featured -->
        <div class="text-blue text-center mt-16">
            <h3 class="text-3xl lg:text-4xl norican text-yellow">Featured</h3>
            <h2 class="text-3xl lg:text-5xl lg:m-4">Restourant & Cafes</h2>
            <p class="lg:mb-10">The best restaurants and cafes that <br> have been working with us for a long time</p>
        </div>
        <!-- sezione featured fine -->
        <search-by-type />
    </x-slot>

    <x-slot name="content">
        <!-- wy people chose us -->
        <section class="text-blue text-center mt-16">
            <div>
                <h3 class="text-3xl lg:text-4xl norican text-yellow">The reason why</h3>
                <h2 class="text-3xl lg:text-5xl lg:m-4">Why People Choose Us</h2>
                <p class="lg:mb-10">We have many advantages but we will highlight <br> only some of them, look below</p>
            </div>
            <!-- cards -->
            <div class="flex flex-wrap justify-center">
                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/discount.svg')}}" alt=""> 
                    </div>
                   <h4 class="font-bold">Discount System</h4>
                   <p>We have a favorable discount system for our regular customers.</p>
                </div>
                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/delivery.svg')}}" alt=""> 
                    </div>
                   <h4 class="font-bold">Express Delivery</h4>
                   <p>The hottest food & fastest delivery to any location of your city.</p>
                </div>
                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/food.svg')}}" alt=""> 
                    </div>
                   <h4 class="font-bold">50+ restaurants</h4>
                   <p>Large selection of restaurants and cafes throughout the country.</p>
                </div>
            </div>
        </section>
        <!-- wy people chose us fine-->

        <!-- first order 50% off -->
        <!-- <section class="bg-pizzaHome w-screen h-96 bg-center my-5">
            <div class="max-w-2xl m-auto h-96 flex items-center">
                <div class="text-white max-w-md">
                    <h2 class="text-3xl lg:text-5xl">Make Your first order and get <span class="text-yellow">50% off</span></h2>
                    <h4 class="my-2 text-xl font-bold">Get it delivered right to your door.</h4>
                    <p class="my-2 text-gray-400">If you order food delivery from us for the first time then we have a gift - 50% discount for you on the first order. You just need to register and order your favorite food.</p>
                    <button class="">Order Products </button>
                </div>
            </div>
        </section> -->
        <!-- first order 50% off fine-->

        <!-- middlmix -->
        <section class="bg-pizzaHome bg-left w-screen min-h-96 bg-center my-20">
            <div class="max-w-2xl m-auto h-96 py-30 flex items-center">
                <div class="text-white max-w-md">
                    <h2 class="text-3xl lg:text-5xl">Make orders With Our <span class="text-yellow">Application</span></h2>
                    <ul>
                        <li>
                            <h4 class="my-2 text-xl font-bold">Order and pay in a few minutes</h4>
                            <p class="my-2 text-gray-400">Сhoose food and pay for the order in a couple of clicks online also choose you current location using GPS.</p>
                        </li>
                        <li>
                            <h4 class="my-2 text-xl font-bold">Check Delivery Status</h4>
                            <p class="my-2 text-gray-400">Follow the status of your order in real time and also track the delivery path until you get it.</p>
                        </li>
                    </ul>
                    <div class="flex flex-wrap md:flex-nowrap">
                        <img class="m-2 md:m-auto" src="{{url('/images/homepage_images/googleplay.png')}}" alt="">
                        <img class="m-2 md:ml-5" src="{{url('/images/homepage_images/appstore.png')}}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- middlemix fine-->

        <!-- newsletter -->
        <section class="max-w-4xl h-72 bg-newsletter items-center rounded-2xl overflow-hidden text-white flex m-auto justify-around flex-wrap md:flex-nowrap text-center md:text-left">
            <div class="flex items-center">
                <div class="">
                    <h2 class="text-3xl lg:text-5xl">Newsletter</h2>
                    <p class="my-2 text-gray-400">Don’t miss promotions and discounts.</p>
                </div>
            </div>
            <!--newsletter-text end-->
            <form class="flex items-center h-3/5">
                <div class="md:bg-white rounded-full">
                    <input type="email" class="p-6 rounded-full border-none w-full md:w-auto" placeholder="Enter your email">
                    <button type="submit" class="py-6 px-8 md:my-auto my-10 w-full md:w-auto rounded-full border-white md:border-4 bg-orange p-1">Subscribe</button>
                </div>
            </form>
        </section>
        <!-- newsletter fine -->

        <!-- latest post -->
        <!-- <section class="text-blue text-center mt-16">
            <div>
                <h3 class="text-3xl lg:text-4xl norican text-yellow">Our blog</h3>
                <h2 class="text-3xl lg:text-5xl lg:m-4">Latest posts & articles</h2>
                <p class="lg:mb-10">Here you can find recipes from the most famous chefs <br> and read useful information.</p>
            </div> -->
            <!-- cards -->
            <!-- <div class="flex flex-wrap justify-center">

                <div class="w-80 m-5 border border-gray-400 rounded-2xl overflow-hidden">
                    <div class="mx-auto">
                        <img class="" src="{{url('/images/homepage_images/cake.jpg')}}" alt=""> 
                    </div>
                    <div class="flex items-center justify-around my-5">
                        <div class="w-5">
                            <img src="{{url('/images/homepage_images/meta.png')}}" alt="">
                        </div>
                        <a href="#"><span class="text-gray-400">Antonio Refflis</span></a>
                        <a href="#"><span class="text-gray-400">May 15, 2020</span></a>
                    </div> -->
                    <!-- horizontal rule -->
                    <!-- <div class="border w-4/5 m-auto border-gray-400"></div> 
                    <a href="#"><span class="my-10 text-left text-blue font-bold text-2xl hover:text-yellow">The Traditional recipe of apple pie</span></a>
                </div>

                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/cupcake.jpg')}}" alt=""> 
                    </div>
                    <h4 class="font-bold">Express Delivery</h4>
                    <p>The hottest food & fastest delivery to any location of your city.</p>
                </div>
                <div class="w-80 m-5">
                    <div class="mx-auto w-16">
                        <img class="" src="{{url('/images/homepage_images/cake2.jpg')}}" alt=""> 
                    </div>
                    <h4 class="font-bold">50+ restaurants</h4>
                    <p>Large selection of restaurants and cafes throughout the country.</p>
                </div>
            </div>
        </section> -->
        <!-- latest post fine -->

    </x-slot>
    
   

<!-- bg: 'big-pizza': "url('/images/homepage_images/bg-pizza.jpg)", -->

</x-app-layout>
