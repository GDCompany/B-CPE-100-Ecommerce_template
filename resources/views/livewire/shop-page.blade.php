<div>
       <!-- Breadcrumbs -->
    <div class="container py-4 flex items-center ml-24 gap-3">
        <a href="{{ route('home')}}" class="text-red-500 text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400 mx-2">
            <i class="fas fa-chevron-right"></i>
        </span>
        <span class="text-gray-600 font-medium">Shop</span>
    </div>
    <!-- Breadcrumbs end -->

    <!-- shop wrapper -->
    <div class="container w-full grid grid-cols-4 pt-4 items-start gap-6 ml-24">
        <!-- sidebar -->
        <div class="col-span-1 bg-white px-4 pb-6 shadow rounded overflow-hidden">
            <div class="divide-y divide-gray-200 space-y-5">
                <!-- category filter -->
                <div class="space-y-2">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Categories</h3>
                    <!-- single category -->
                    <div class="flex items-center">
                        <input type="checkbox" id="Bedroom" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Bedroom" class="text-gray-600 ml-3 cursor-pointer">Bedroom</label>
                        <div class="ml-auto text-gray-600 text-sm">(15)</div>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" id="Sofa" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Sofa" class="text-gray-600 ml-3 cursor-pointer">Sofa</label>
                        <div class="ml-auto text-gray-600 text-sm">(05)</div>
                    </div> 
                    <div class="flex items-center">
                        <input type="checkbox" id="Office" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Office" class="text-gray-600 ml-3 cursor-pointer">Office</label>
                        <div class="ml-auto text-gray-600 text-sm">(09)</div>
                    </div> 
                    <div class="flex items-center">
                        <input type="checkbox" id="Outdoor" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Outdoor" class="text-gray-600 ml-3 cursor-pointer">Outdoor</label>
                        <div class="ml-auto text-gray-600 text-sm">(19)</div>
                    </div>           
                </div>
                <!-- category filter end -->
                <!-- Bands filter -->
                <div class="space-y-2">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">BRANDS</h3>
                    <!-- single Bands -->
                    <div class="flex items-center">
                        <input type="checkbox" id="Dorminik" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Dorminik" class="text-gray-600 ml-3 cursor-pointer">Dorminik</label>
                        <div class="ml-auto text-gray-600 text-sm">(15)</div>
                    </div>
                    <div class="flex items-center">
                        <input type="kbox" id="Karl" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Karl" class="text-gray-600 ml-3 cursor-pointer">Karl</label>
                        <div class="ml-auto text-gray-600 text-sm">(18)</div>
                    </div> 
                    <div class="flex items-center">
                        <input type="checkbox" id="Maxing" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Maxing" class="text-gray-600 ml-3 cursor-pointer">Maxing</label>
                        <div class="ml-auto text-gray-600 text-sm">(09)</div>
                    </div> 
                    <div class="flex items-center">
                        <input type="checkbox" id="Ernest" class="h-4 w-4 border-gray-300 rounded focus:ring-red-500 checked:bg-red-500">
                        <label for="Ernest" class="text-gray-600 ml-3 cursor-pointer">Ernest</label>
                        <div class="ml-auto text-gray-600 text-sm">(12)</div>
                    </div>           
                </div>
                <!-- Bands filter end -->

                <!-- price filter -->
                <div class="mt-4">
                    <h3 class="text-xl text-gray-800 mb-1 uppercase font-medium">Price</h3>
                    <div class="flex items-end">
                        <input type="text" class="border border-gray-300 focus:border-red-500 focus:ring-0 px-2 py-1 text-gray-600 text-sm shadow-sm rounded-l w-24" placeholder="min">
                        <span class="mx-1 text-gray-500">-</span>
                        <input type="text" class="border border-gray-300 focus:border-red-500 focus:ring-0 px-2 py-1 text-gray-600 text-sm shadow-sm rounded-r w-24" placeholder="max">
                    </div>
                </div>
                <!-- price filter end -->

                <!-- size filter -->
                <div class="pt-4">
                    <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Size</h3>
                    <div class="flex items-center gap-2">
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-xs">
                            <label for="size-xs" class="border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-500 transition duration-200 ease-in-out hover:bg-red-500 hover:text-white">XS</label>
                        </div>
                        <!-- single size end -->
                        
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-S">
                            <label for="size-S" class="border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-500 transition duration-200 ease-in-out hover:bg-red-500 hover:text-white">S</label>
                        </div>
                        <!-- single size end -->
                        
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-M">
                            <label for="size-M" class="border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-500 transition duration-200 ease-in-out hover:bg-red-500 hover:text-white">M</label>
                        </div>
                        <!-- single size end -->
                        
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-L">
                            <label for="size-L" class="border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-500 transition duration-200 ease-in-out hover:bg-red-500 hover:text-white">L</label>
                        </div>
                        <!-- single size end -->
                        
                        <!-- single size -->
                        <div class="size-selector">
                            <input type="radio" name="size" class="hidden" id="size-XL">
                            <label for="size-XL" class="border border-gray-200 rounded-sm h-6 w-6 flex items-center justify-center cursor-pointer shadow-sm text-gray-500 transition duration-200 ease-in-out hover:bg-red-500 hover:text-white">XL</label>
                        </div>
                        <!-- single size end -->
                    </div>
                </div>
                <!-- size filter end -->

        <!-- color filter -->
        <div class="pt-4">
            <h3 class="text-xl text-gray-800 mb-3 uppercase font-medium">Color</h3>
            <div class="flex items-center gap-2">
                <!-- single color -->
                <div class="color-selector">
                    <input type="radio" name="color" id="color-red" class="hidden">
                    <label for="color-red" class="border border-gray-200 rounded-sm h-5 w-5 cursor-pointer shadow-sm block transition duration-200 ease-in-out hover:scale-110" style="background-color: #fc3d57;"></label>
                </div>
                <!-- single color end -->

                <!-- single color -->
                <div class="color-selector">
                    <input type="radio" name="color" id="color-white" class="hidden">
                    <label for="color-white" class="border border-gray-200 rounded-sm h-5 w-5 cursor-pointer shadow-sm block transition duration-200 ease-in-out hover:scale-110" style="background-color: #ffffff;"></label>
                </div>
                <!-- single color end -->

                <!-- single color -->
                <div class="color-selector">
                    <input type="radio" name="color" id="color-black" class="hidden">
                    <label for="color-black" class="border border-gray-200 rounded-sm h-5 w-5 cursor-pointer shadow-sm block transition duration-200 ease-in-out hover:scale-110" style="background-color: #000000;"></label>
                </div>
                <!-- single color end -->
            </div>
        </div>
        <!-- color filter end -->
        </div>
        </div>
        <!-- sidebar end -->

        <!-- produits -->
        <div class="col-span-3">
            <!-- sorting -->
            <div class="flex items-center mb-4">
                <select class="w-44 text-sm text-gray-600 px-4 py-3 shadow-sm rounded focus:ring-red-500 focus:border-red-500">
                    <option>Default sorting</option>
                    <option>Price low-high</option>
                    <option>Price high-low</option>
                    <option>Latest product</option>
                </select>

                <div class="ml-auto flex gap-2">
                    <div class="border border-red-500 w-10 h-9 flex items-center justify-center text-white bg-red-500 rounded cursor-pointer">
                        <i class="fas fa-th"></i>
                    </div>
                    <div class="border border-gray-300 w-10 h-9 flex items-center justify-center text-gray-500 rounded cursor-pointer">
                        <i class="fas fa-list"></i>
                    </div>
                </div>
            </div>
            <!-- sorting end -->
             
             <!-- produit grid -->
                        <!-- product grid -->  
                        <div class="grid grid-cols-3 gap-4">
                            <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product1.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                        <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product2.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                        <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product3.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                        <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product4.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product5.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product6.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product7.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product8.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product10.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product11.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product12.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                                             <!-- single produit  -->
                            <div class="bg-white shadow rounded overflow-hidden group">
                                <!-- product image -->
                                <div class="relative">  
                                    <img src="{{ asset('assets/images/products/product9.jpg')}}" class="w-full">  
                                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition">  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="fas fa-search"></i>  
                                        </a>  
                                        <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-red-500 flex items-center justify-center hover:bg-gray-800 transition">  
                                            <i class="far fa-heart"></i>   
                                        </a>  
                                    </div>  
                                </div>  
                                <!-- end product image -->  
                    
                                <!-- product content -->  
                                <div class="pt-4 pb-3 px-4">  
                                    <a href="#">  
                                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-500 hover:bg-red-500 transition">Guyer chair</h4>  
                                    </a>  
                                </div>  
                                <div class="flex items-baseline mb-1 space-x-2 font-roboto ml-5">  
                                    <p class="text-xl text-red-500 font-semibold">$45.00</p>  
                                    <p class="text-sm text-gray-400 line-through">$55.00</p>  
                                </div>  
                                <div class="flex items-center ml-5 mb-2">  
                                    <div class="flex gap-1 text-sm text-yellow-400">  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                        <span><i class="fas fa-star"></i></span>  
                                    </div>  
                                    <div class="text-xs text-gray-500 ml-3">(150)</div>  
                                </div>  
                                <a href="#" class="block w-full py-1 text-center text-white bg-red-500 border border-red-500 rounded-b hover:bg-transparent transition">Add to cart</a>  
                                <!-- product content end-->  
                            </div>
                            <!-- single product end -->
                        </div>
                        <!-- end product grid -->  
              <!-- produit grid end -->
        </div>
        <!-- produits wrap -->

    </div>
    <!-- shop wrapper end -->

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
        <div class="flex items-center justify-between px-4">
            <p class="text-white">&copy; TailCommerce - All Right Reserved</p>
            <div>
                <img src="{{ asset('assets/images/methods.png') }}" alt="Méthodes de paiement" class="h-5">
            </div>
        </div>
    </div>
    <!-- ./copyright -->
</div>
