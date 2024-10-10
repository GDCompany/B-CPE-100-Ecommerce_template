<div>
    <!-- Breadcrumbs -->
    <div class="container py-4 flex items-center ml-24 gap-3">
        <a href="{{ route('home')}}" class="text-red-500 text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400 mx-2">
            <i class="fas fa-chevron-right"></i>
        </span>
        <span class="text-gray-600 font-medium">My Account</span>
    </div>
    <!-- Breadcrumbs end -->

        <!-- Account wrapper -->
        <div class="container grid grid-cols-12 items-start gap-6 pt-4 pb-16 ml-40">
            <!-- sidebar -->
            <div class="col-span-3">
                <!-- account profile -->
                <div class="px-4 py-3 shadow flex items-center gap-4">
                    <div class="flex-shrink-0">
                        <img src="{{ asset('assets/images/avatar.png')}}" class="rounded-full w-14 h-14 border border-gray-200 p-1 object-cover">
                    </div>
                    <div class="flex-grow">
                        <p class="text-gray-600">Hello,</p>
                        <h4 class="text-gray-800 font-medium">Russell Ahmed</h4>
                    </div>
                </div>
                <!-- account profile end  -->

                <!-- profile links -->
                <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 text-gray-600">
                    <!-- single links -->
                    <div class="space-y-1 pl-8">
                        <a href="#" class="relative text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="far fa-address-card"></i>
                            </span>
                            Manage account
                        </a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Profile information</a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Manage address</a> 
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Change password</a>
                    </div>
                    <!-- single links end -->

                    <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="#" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-solid fa-box-archive"></i>
                            </span>
                            My Order History
                        </a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">My Returns</a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">My Concellations</a> 
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">My Reviews</a>
                    </div>

                    <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="#" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-regular fa-credit-card"></i>
                            </span>
                            Payment Methodes
                        </a>
                        <a href="#" class="relative hover:text-red-500 block capitalize transition">Voucher</a>
                    </div>
                    <!-- second group of links end -->
                <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="{{route('wishlist')}}" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            My Wishlist
                        </a>
                    </div>
                    <!-- second group of links end -->
                      <!-- second group of links -->
                    <div class="space-y-1 pl-8 pt-4 mt-4">
                        <a href="#" class="relative hover:text-red-500 block font-medium capitalize transition">
                            <span class="absolute -left-8 top-0 text-base">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </span>
                            Lagout
                        </a>
                    </div>
                    <!-- second group of links end -->
                </div>
                <!-- profile links end -->
            </div>
            <!-- sidebar end -->

<!-- profile info -->
<div class="col-span-9 shadow rounded px-6 pt-5 pb-7">
    <h1 class="text-lg font-medium capitalize mb-4">
        Profile Information
    </h1>
    <div class="space-y-4">
        <!-- First Name and Last Name -->
        <div class="grid grid-cols-2 gap-4">
            <!-- First Name -->
            <div>
                <label for="first-name" class="text-gray-600 mb-2 block">First Name</label>
                <input type="text" id="first-name" class="input-box" placeholder="First Name">
            </div>
            <!-- Last Name -->
            <div>
                <label for="last-name" class="text-gray-600 mb-2 block">Last Name</label>
                <input type="text" id="last-name" class="input-box" placeholder="Last Name">
            </div>
        </div>
        <!-- form row end -->
        
        <!-- Email and Phone -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Email -->
            <div>
                <label for="email" class="text-gray-600 mb-2 block">Email</label>
                <input type="email" id="email" class="input-box" placeholder="Email Address">
            </div>
            <!-- Phone Number -->
            <div>
                <label for="phone" class="text-gray-600 mb-2 block">Phone Number</label>
                <input type="tel" id="phone" class="input-box" placeholder="Phone Number">
            </div>
        </div>
        <!-- form row end -->

        <!-- Date of Birth and Month -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Date of Birth -->
            <div>
                <label for="dob" class="text-gray-600 mb-2 block">Date of Birth</label>
                <input type="date" id="dob" class="input-box">
            </div>
            <!-- Month Selection -->
            <div>
                <label for="month" class="text-gray-600 mb-2 block">Select Month</label>
                <select id="month" class="input-box">
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
            </div>
        </div>
        <!-- form row end -->
        
        <!-- Gender and Submit Button -->
        <div class="grid grid-cols-2 gap-4">
            <!-- Gender -->
            <div>
                <label for="gender" class="text-gray-600 mb-2 block">Gender</label>
                <select id="gender" class="input-box">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <!-- Submit Button -->
            <div>
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded shadow mt-6">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
<!-- profile info end -->
        </div>
            <!-- Account wrapper end -->

                  <!-- footer -->
    <footer class="bg-white pt-16 pb-12 border-t border-gray-100 ml-24">
        <div class="container grid grid-cols-1 ">
            <div class="col-span-1 space-y-4">
                <img src="{{ asset('assets/images/logo.svg') }}" class="w-30">
                <div class="mr-2">
                    <p class="text-gray-500">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, hic?
                    </p>
                </div>
                <div class="flex space-x-5">
                    <a href="#" class="text-gray-400 hover:text-gray-500"><i
                            class="fa-brands fa-facebook-square"></i></a>
                    <a href="#" class="text-gray-400 hover:text-gray-500"><i
                            class="fa-brands fa-instagram-square"></i></a>
                    <a href="#" class="text-gray-400 hover:text-gray-500"><i
                            class="fa-brands fa-twitter-square"></i></a>
                    <a href="#" class="text-gray-400 hover:text-gray-500">
                        <i class="fa-brands fa-github-square"></i>
                    </a>
                </div>
            </div>

            <div class="col-span-2 grid grid-cols-2 gap-4 ml-40">
                <div class="grid grid-cols-2 gap-4 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analitycs</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Insights</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status</a>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Solutions</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Marketing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Analitycs</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Commerce</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Insights</a>
                        </div>
                    </div>

                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider">Support</h3>
                        <div class="mt-4 space-y-4">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Pricing</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Documentation</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">Guides</a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block">API Status</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ./footer -->

        <!-- copyright -->
    <div class="bg-gray-800 py-4">
        <div class="container flex items-center justify-between">
            <p class="text-white">&copy; TailCommerce - All Right Reserved</p>
            <div>
                <img src="../assets/images/methods.png" alt="methods" class="h-5">
            </div>
        </div>
    </div>
    <!-- ./copyright -->
</div>
