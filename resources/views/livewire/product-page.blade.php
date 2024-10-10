<div>
            <!-- Breadcrumbs -->
    <div class="container py-4 flex items-center ml-24 gap-3">
        <a href="{{ route('home')}}" class="text-red-500 text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400 mx-2">
            <i class="fas fa-chevron-right"></i>
        </span>
        <span class="text-gray-600 font-medium">Produict view</span>
    </div>
    <!-- Breadcrumbs end -->

    <!-- product view -->
     <div class="container grid grid-cols-2 gap-6">
        <!-- product image-->
         <div class="ml-40">
            <img src="{{ asset('assets/images/products/product9.jpg')}}" alt="w-full">
            <div class="grid grid-cols-5 gap-4 mt-4">
                <img src="{{ asset('assets/images/products/product9.jpg')}}" class="w-full cursor-pointer border border-red-500 hover:border-red-500">
                <img src="{{ asset('assets/images/products/product1.jpg')}}" class="w-full cursor-pointer border hover:border-red-500">
                <img src="{{ asset('assets/images/products/product8.jpg')}}" class="w-full cursor-pointer border hover:border-red-500">
                <img src="{{ asset('assets/images/products/product12.jpg')}}" class="w-full cursor-pointer border hover:border-red-500">
                <img src="{{ asset('assets/images/products/product11.jpg')}}" class="w-full cursor-pointer border hover:border-red-500">
            </div>
         </div>
         <!-- product image -->
          <!-- product content -->
           <div>
            <h2 class="text-3xl font-medium uppercase mb-2">Italian L Shape Sofa</h2>
            <div class="flex items-center mb-4">
                <div class="flex gap-1 text-sm text-yellow-400">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                </div>
                <div class="text-xs text-gray-500 ml-3">(150 Reviews)</div>
            </div>
            <div class="space-y-2">
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Awilability:</span>
                    <span class="text-green-600">In stock</span>
                </p>
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>Brand:</span>
                    <span class="text-gray-800">Apex</span>
                </p>
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>category:</span>
                    <span class="text-gray-800">Sofa</span>
                </p>
                <p class="text-gray-800 font-semibold space-x-2">
                    <span>SKU:</span>
                    <span class="text-gray-800">BE45V6RT</span>
                </p>
            </div>
            <div class="flex items-baseline mb-1 space-x-2 font-roboto mt-4">  
                <p class="text-2xl text-red-500 font-semibold">$45.00</p>  
                <p class="text-base text-gray-400 line-through">$55.00</p>  
            </div>
            <p class="mt-4 text-gray-600">
                Lorem, ipsum dolor sit amet consecteur adipiscing elit, rationne, perro
            </p>
                            <!-- size filter -->
                            <div class="pt-4">
                                <h3 class="text-sm text-gray-800 uppercase mb-1">Size</h3>
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
                        <h3 class="text-sm text-gray-800 uppercase mb-1">Color</h3>
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
                     <!-- quantity -->
                      <div class="mt-4">
                        <h3 class="text-sm text-gray-800 uppercase mb-1">Size</h3>
                        <div class="flex border border-gray-300 text-gray-600 divide-x divide-x divide-gray-200 w-max">
                            <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">-</div>
                            <div class="h-8 w-8 text-base flex items-center justify-center">4</div>
                            <div class="h-8 w-8 text-xl flex items-center justify-center cursor-pointer select-none">+</div>
                        </div>
                      </div>
                      <!-- quantity end -->
                       <div class="flex gap-3 border-b border-gray-200 pb-5 mt-6">
                        <a href="#" class="bg-red-500 border border-red-500 text-white px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-red-200 transition">
                            <i class="fas fa-shopping-bag"></i>Add to Cart
                        </a>
                        <a href="#" class="border border-red-500 text-white-900 px-8 py-2 font-medium rounded uppercase flex items-center gap-2 hover:text-red-500 transition">
                            <i class="fas fa-heart"></i>Wishlist
                        </a>
                       </div>
                       <!-- cart button -->
                        <!-- social share -->

                        <!-- social share end -->
                        <div class="flex gap-3 mt-4">
                            <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-gray-500 h-8 w-8 rounded-full bg-gray-300 flex items-center justify-center">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                        <!-- cart button end -->

           </div>
           <!-- product content end -->
     </div>
     <!-- product view end -->

     <!-- product view details -->
      <div class="container pb-16 ml-40">
        <h3 class="border-b border-gray-200 font-roboto text-gray-800 pb-3 font-medium">Product details</h3>
        <div class="w-3/5 pt-6">
            <div class="text-gray-600 space-y-3">
                <p>
                    Les étoiles scintillent dans le ciel nocturne, offrant un spectacle enchanteur. 
                    Chaque point lumineux semble raconter une histoire ancienne, nous connectant au vaste univers.
                     Ce silence étoilé invite à la rêverie et à l’émerveillement.
                </p>
                <p>
                    Les étoiles scintillent dans le ciel nocturne, offrant un spectacle enchanteur. 
                    Chaque point lumineux semble raconter une histoire ancienne, nous connectant au vaste univers.
                     Ce silence étoilé invite à la rêverie et à l’émerveillement.
                </p>
                <p>
                    Les étoiles scintillent dans le ciel nocturne, offrant un spectacle enchanteur. 
                    Chaque point lumineux semble raconter une histoire ancienne, nous connectant au vaste univers.
                     Ce silence étoilé invite à la rêverie et à l’émerveillement.
                </p>
            </div>
            <!-- table -->
             <table class="table-auto border-collapse w-full text-left text-sm mt-6">
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                    <th class="py-2 px-4 border border-gray-300">Black, Broun, Red</th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                    <th class="py-2 px-4 border border-gray-300">Black, Broun, Red</th>
                </tr>
                <tr>
                    <th class="py-2 px-4 border border-gray-300 w-40 font-medium">Color</th>
                    <th class="py-2 px-4 border border-gray-300">Black, Broun, Red</th>
                </tr>
             </table>
             <!-- table end -->
        </div>
      </div>
      <!-- product view details end  -->

              <!-- product wipper -->  
              <div class="container py-16 ml-40"> 
                <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">Related product</h2>  
                <!-- product grid -->  
                <div class="grid grid-cols-4 gap-4">
                    <!-- single produit  -->
                    <div class="bg-white shadow rounded overflow-hidden group">
                        <!-- product image -->
                        <div class="relative">  
                            <img src="image/products/product1.jpg" class="w-full">  
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
                        <div class="flex items-center ml-5">  
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
                            <img src="image/products/product3.jpg" class="w-full">  
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
                        <div class="flex items-center ml-5">  
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
                            <img src="image/products/product9.jpg" class="w-full">  
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
                        <div class="flex items-center ml-5">  
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
                            <img src="image/products/product10.jpg" class="w-full">  
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
                        <div class="flex items-center ml-5">  
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
            </div>  
            <!-- end product wrpper -->

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
