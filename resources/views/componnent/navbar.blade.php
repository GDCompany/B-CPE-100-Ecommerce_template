<!-- header -->
 <header class="bg-white shadow-sm">
        <div class="container mx-auto flex items-center justify-between py-4">
            <!-- Logo -->
            <a href="#" class="flex items-center">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo" class="w-32">
            </a>
            <!-- Search bar -->
            <div class="flex-grow max-w-2xl mx-8 relative flex items-center">
                <span class="absolute left-3 top-1/2 transform -translate-y-1/2 text-lg text-gray-400">
                    <i class="fas fa-search"></i>
                </span>
                <input type="text" 
                       class="w-full border border-gray-300 border-r-0 pl-10 py-2 pr-3 rounded-l-md focus:outline-none" 
                       placeholder="Search...">
                <button class="bg-red-500 border border-red-500 text-white px-8 py-2 rounded-r-md hover:bg-transparent hover:text-red-500 transition">
                    Search
                </button>
            </div>
            <!-- Icons -->
            <div class="flex items-center space-x-6">
                <a href="{{route('wishlist')}}" class="text-center text-gray-700 hover:text-red-500 transition relative">
                    <div class="text-2xl">
                    <i class="far fa-heart"></i>
                </div>
                <div class="text-xs leading-3">Wish List</div>
                <span class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-red-500 text-xs text-white">8</span>
                </a>
                <a href="#" class="text-center text-gray-700 hover:text-red-500 transition relative">
                    <div class="text-2xl">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                    <div class="text-xs leading-3">Cart</div>
                     <span class="absolute right-0 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-red-500 text-xs text-white">2</span>
                </a>
                <a href="{{ route('profile')}}" class="text-center text-gray-700 hover:text-red-500 transition relative">
                   <div class="text-2xl">
                        <i class="fa-regular fa-user"></i>
                    </div>
                <div class="text-xs leading-3">Acount</div>
                </a>
            </div>
        </div>
    </header>
<!-- ./header -->

 <!-- navbar -->
     <nav class="bg-gray-800">
        <div class="container flex">
            <!-- all category -->
            <div class="py-8 px-4 bg-red-500 flex items-center cursor-pointer ml-24 relative group">
                <span class="text-white">
                    <i class="fas fa-bars"></i>
                </span>
                <span class="capitalize ml-2 text-white">All categories</span>
                <div class="absolute w-full left-0 top-full bg-white shadow-md py-3 divide-y divide-gray-300 divide-deshed hidden group-hover:block opacity-0 group-hover:opacity-100 transition duration-300 invisible group-hover:visible">
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="{{ asset('assets/images/icons/bed-2.svg') }}" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Bedroom</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="{{ asset('assets/images/icons/sofa.svg') }}" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Sofa</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="{{ asset('assets/images/icons/office.svg') }}" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Office</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="{{ asset('assets/images/icons/outdoor-cafe.svg') }}" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Outdoor</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="{{ asset('assets/images/icons/bed-2.svg') }}" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Mottress</span>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 hover:bg-gray-100 transition">
                        <img src="{{ asset('assets/images/icons/restaurant.svg') }}" class="w-5 h-5 object-contain">
                        <span class="ml-6 text-gray-600 text-sm">Dining</span>
                    </a>
                </div>
            </div>
             <!-- all category end -->
              <!-- navbar links -->
               <div class="flex items-center justify-between flex-grow pl-12">
                <div class="flex items-center space-x-6 capitalize">
                    <a href="{{ route('home')}}" class="text-gray-200 hover:text-white transition">Home</a>
                    <a href="{{ route('shop')}}" class="text-gray-200 hover:text-white transition">Shop</a>
                    <a href="{{ route('about')}}" class="text-gray-200 hover:text-white transition">About</a>
                    <a href="{{ route('contact')}}" class="text-gray-200 hover:text-white transition">Contact us</a>
                </div>
                <a href="{{ route('login')}}" class="text-gray-200 hover:text-white transition">Login/Register</a>
               </div>
        </div>
     </nav>
<!-- end navbar -->
