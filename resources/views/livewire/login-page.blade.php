<div>

           <!-- Breadcrumbs -->
    <div class="container py-4 flex items-center ml-24 gap-3">
        <a href="{{ route('home')}}" class="text-red-500 text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400 mx-2">
            <i class="fas fa-chevron-right"></i>
        </span>
        <span class="text-gray-600 font-medium">Login</span>
    </div>
    <!-- Breadcrumbs end -->

    <!-- login -->
    <div class="contain py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">Login</h2>
            <p class="text-gray-600 mb-6 text-sm">
                welcome back customer
            </p>
            <form action="">
                <div class="space-y-4">
                    <div>  
                        <label for="email" class="text-gray-600 mb-2 block">Email Address</label>  
                        <input id="email" type="email" class="block w-full border border-gray-100 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-red-500 placeholder-gray-400" placeholder="Enter your email adress">  
                    </div>
                    <div>  
                        <label for="password" class="text-gray-600 mb-2 block">Password</label>  
                        <input id="password" type="password" class="block w-full border border-gray-100 px-4 py-3 text-gray-600 text-sm rounded focus:ring-0 focus:border-red-500 placeholder-gray-400" placeholder="Enter your password">  
                    </div>
                </div>
                <div class="flex items-center mt-6">
                    <div class="flex items-center">
                        <input type="checkbox" id="agreement" class="accent-red-500 focus:ring-0 rounded-sm cursor-pointer">
                        <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">Remenber me</label>
                    </div>
                    <a href="{{route('fogortpassword')}}" class="text-red-500 ml-auto">Forgot password</a>
                </div>
                <div class="mt-4">
                    <button type="submit" class="block w-full py-2 text-center text-white bg-red-500 border border-red-500 rounded hover:bg-transparent hover:text-red-500 transition uppercase font-roboto font-medium">Login</button>
                </div>
            </form>
            <!-- login with -->
        <div class="mt-6 flex justify-center items-center relative">
            <div class="text-gray-600 uppercase px-3 bg-white z-10 relative">Or login with</div>
            <div class="absolute left-0 top-1/2 w-full border-b-2 border-gray-200"></div>
        </div>
        <div class="flex mt-4 gap-4">
            <a href="#" class="w-1/2 py-2 text-center bg-blue-600 text-whiterounded uppercase font-roboto font-medium text-sm hover:bg-blue-700">Facebook</a>
            <a href="#" class="w-1/2 py-2 text-center bg-yellow-600 text-whiterounded uppercase font-roboto font-medium text-sm hover:bg-yellow-700">Google</a>
        </div>
        <!-- login with end -->
        <p class="mt-4 text-gray-600 text-center">
            Don't have an account? <a href="{{ route('register')}}" class="text-red-500">Register now</a>
        </p>
        </div>
    </div>
    <!-- ./login -->

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
