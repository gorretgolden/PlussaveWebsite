<?php
$partners = App\Models\Partner::all();

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Plussave</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    @livewireStyles

</head>

<body class="font-sans antialiased">
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}

    <!--navbar-->
    <nav class=" flex justify-between items-center p-4 bg-green-700">
        <div class="flex items-center">
            <!-- Logo -->
            <a href="/">
                <img class=" h-16 w-auto mr-2" src="{{ asset('applogo.png') }}" alt="Your Company">
            </a>
            {{-- <a href="/"> <span class="text-white">Plussave</span></a> --}}
        </div>
        <!-- Mobile menu button -->
        <button type="button" class="text-gray-400 focus:outline-none sm:hidden" id="mobile-menu-button">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <!-- Responsive navigation links -->
        <div class="hidden sm:flex space-x-4">

            <a href="{{ route('services') }}"
                class="block text-white  rounded-md hover:border border-white px-3 py-2 text-base font-bold mb-2">Our
                Services</a>

            <a href="{{ route('about-us') }}"
                class="block text-white  rounded-md hover:border border-white px-3 py-2 text-base font-bold mb-2">About
                Us</a>
            <a href="{{ route('faqs') }}"
                class="block text-white  rounded-md hover:border border-white px-3 py-2 text-base font-bold mb-2">FAQs</a>
            <a href="{{ route('contact-us') }}"
                class="block text-white  rounded-md hover:border border-white px-3 py-2 text-base font-bold mb-2">Contact
                Us</a>
            <a href="{{ route('blog') }}"
                class="block text-white  rounded-md hover:border border-white px-3 py-2 text-base font-bold mb-2">Blog</a>

        </div>
        <!-- Login button -->
        <button
            class="bg-white text-green-700 font-semibold py-2 px-3 rounded hover:bg-white hover:text-green-600 hover:border-transparent hidden sm:block">
            Apply for a Loan
        </button>

    </nav>


    <!-- Mobile menu -->
    <div class="sm:hidden" id="mobile-menu" style="display: none;">
        <div class="bg-black p-4">
            <a href="#"
                class="block text-white hover:bg-purple-900 rounded-md hover:text-white px-3 py-2 text-base font-bold mb-2">Services</a>
            <a href="#"
                class="block text-white hover:bg-purple-900 rounded-md hover:text-white px-3 py-2 text-base font-bold mb-2">Bookings</a>
            <a href="#"
                class="block text-white hover:bg-purple-900 rounded-md hover:text-white px-3 py-2 text-base font-bold mb-2">About
                Us</a>
            <a href="#"
                class="block text-white hover:bg-purple-900 rounded-md hover:text-white px-3 py-2 text-base font-bold mb-2">Contact
                Us</a>
            <button wire:click="toggleModal"
                class="border border-purple-600 text-white font-semibold py-2 px-4 rounded hover:bg-white hover:text-purple-600 hover:border-transparent mt-4 ml-3">Login</button>
        </div>
    </div>


    <main>
        @yield('content')
    </main>

    <!--Partners-->
    {{-- <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-12">Our Partners</h2>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach ($partners as $partner)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $partner->image) }}" alt="{{ $partner->name }}">
                        </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section> --}}


    <!-- Subscription Section -->
    <section class="bg-salon bg-cover bg-center relative py-20"
        style="background-image: url('https://img.freepik.com/free-photo/green-grass-wallpaper-fresh-green-grass-wallpapers-wallpaper-cave_1340-42685.jpg?t=st=1717916782~exp=1717920382~hmac=b300557944f89b027e2b2b64e2a66d174cb5156ef1c939c3791ec6a18961eaee&w=1800') ">
        <!-- Background Overlay -->
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="container mx-auto relative z-10 px-4">
            <div class="max-w-lg mx-auto bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Subscribe to Our Newsletter</h2>
                <p class="text-gray-600 mb-6 text-center">Get the latest updates on our services and special offers.</p>
                <form action="#">
                    <div class="mb-4">
                        <input type="email"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-purple-600"
                            placeholder="Enter your email">
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="bg-green-600 text-white px-6 py-2 rounded-md hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-black text-white mt-auto">
        <div class="container mx-auto px-4 py-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Information -->
            <div>
                <h2 class="text-xl font-bold mb-4">Plussave Financial Solutions</h2>
                <p class="mb-4">Kampala Uganda, 12345</p>
                <p class="mb-4">Email: plussavefinancialltd@gmail.com</p>
                <p class="mb-4">Phone: (123) 456-7890</p>
            </div>
            <!-- Quick Links -->
            <div>
                <h2 class="text-xl font-bold mb-4">Quick Links</h2>
                <ul>
                    <li class="mb-2"><a href="/" class="hover:underline">Home</a></li>
                    <li class="mb-2"><a href="{{ route('about-us') }}" class="hover:underline">About Us</a></li>
                    <li class="mb-2"><a href="{{ route('services') }}" class="hover:underline">Services</a></li>
                    <li class="mb-2"><a href="{{ route('contact-us') }}" class="hover:underline">Contact</a></li>
                </ul>
            </div>
            <!-- Resources -->
            <div>
                <h2 class="text-xl font-bold mb-4">Resources</h2>
                <ul>
                    <li class="mb-2"><a href="/" class="hover:underline">Blog</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">FAQs</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Support</a></li>
                    <li class="mb-2"><a href="#" class="hover:underline">Privacy Policy</a></li>
                </ul>
            </div>
            <!-- Social Media Links -->
            <div>
                <h2 class="text-xl font-bold mb-4">Follow Us</h2>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-gray-400"><svg class="w-6 h-6 fill-current"
                            viewBox="0 0 24 24">
                            <path
                                d="M22.675 0H1.325C.593 0 0 .593 0 1.325v21.351C0 23.406.593 24 1.325 24H12.82V14.709h-3.468v-3.6h3.468V8.322c0-3.443 2.108-5.314 5.189-5.314 1.474 0 2.741.11 3.109.159v3.6l-2.131.001c-1.668 0-1.992.792-1.992 1.956v2.569h3.98l-.519 3.6h-3.461V24h6.805c.73 0 1.325-.593 1.325-1.325V1.325C24 .593 23.406 0 22.675 0z" />
                        </svg></a>
                    <a href="#" class="hover:text-gray-400"><svg class="w-6 h-6 fill-current"
                            viewBox="0 0 24 24">
                            <path
                                d="M23.954 4.569c-.885.392-1.833.656-2.828.775a4.932 4.932 0 0 0 2.165-2.724 9.865 9.865 0 0 1-3.127 1.195 4.92 4.92 0 0 0-8.379 4.482A13.978 13.978 0 0 1 1.675 3.149a4.935 4.935 0 0 0 1.523 6.573 4.92 4.92 0 0 1-2.23-.616c-.054 2.281 1.581 4.415 3.949 4.891a4.936 4.936 0 0 1-2.224.084 4.929 4.929 0 0 0 4.604 3.417A9.874 9.874 0 0 1 0 21.539 13.951 13.951 0 0 0 7.548 24c9.142 0 14.307-7.721 13.995-14.646a9.935 9.935 0 0 0 2.411-2.585z" />
                        </svg></a>
                    <a href="#" class="hover:text-gray-400"><svg class="w-6 h-6 fill-current"
                            viewBox="0 0 24 24">
                            <path
                                d="M12 0C5.373 0 0 5.373 0 12c0 5.063 3.222 9.387 7.688 10.909.562.104.77-.244.77-.542 0-.268-.01-1.142-.015-2.073-3.125.678-3.787-1.52-3.787-1.52-.513-1.305-1.252-1.652-1.252-1.652-1.02-.698.077-.684.077-.684 1.127.079 1.722 1.158 1.722 1.158 1.002 1.718 2.625 1.222 3.267.935.102-.726.393-1.222.715-1.504-2.5-.284-5.125-1.25-5.125-5.559 0-1.227.438-2.23 1.158-3.017-.115-.284-.502-1.431.109-2.984 0 0 .944-.302 3.1 1.152a10.824 10.824 0 0 1 2.823-.382c.957.004 1.922.13 2.823.382 2.155-1.454 3.098-1.152 3.098-1.152.612 1.553.225 2.7.111 2.984.72.787 1.155 1.79 1.155 3.017 0 4.32-2.63 5.27-5.134 5.548.404.348.76 1.036.76 2.088 0 1.508-.014 2.723-.014 3.093 0 .302.206.653.774.541C20.775 21.386 24 17.063 24 12c0-6.627-5.373-12-12-12z" />
                        </svg></a>
                </div>
            </div>
        </div>
        <div class="bg-gray-700 text-center py-4">
            <p class="text-gray-400 text-sm">&copy; {{ date('Y') }} Plussave Financial Solutions. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
       var swiper = new Swiper('.swiper-container', {
            slidesPerView: 5,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 30,
                },
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("mobile-menu-button").addEventListener("click", function() {
                var mobileMenu = document.getElementById("mobile-menu");
                mobileMenu.style.display = (mobileMenu.style.display === "none" || mobileMenu.style
                    .display === "") ? "block" : "none";
            });
        });

        document.addEventListener('initAutoScroll', function () {
        setInterval(function () {
            let container = document.querySelector('.grid');
            container.scrollBy({ top: 0, left: 300, behavior: 'smooth' });
        }, 60000); // Scroll every 1 minute
    });



    </script>



    @livewireScripts

    <script>
        // Refreshing the Livewire component every 10 seconds
        setInterval(function() {
            Livewire.emit('fetchUpdates');
        }, 10000);
    </script>



</body>

</html>
