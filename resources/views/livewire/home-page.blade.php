<div>

   <!-- banner -->
    <div class="bg-cover bg-no-repeat bg-center py-36" style="background-image: url({{ asset('assets/images/banner-bg.jpg') }});">
        <div class="container">
            <h1 class="text-6xl text-gray-800 font-medium nb-4 capitalize ml-40">
                best collection for <br> Home decoration
            </h1>
            <p class="ml-40">
                Rejoignez-nous pour améliorer vos compétences 
                et élargir vos connaissances. <br> Explorez
                 nos cours et formations adaptés à tous les niveaux.
            </p>
            <div class="mt-12">
                <a href="#" class="bg-red-500 border border-red-500 text-white px-8 py-3 font-medium rounded-md hover:bg-transparent hover:text-red-500 transition ml-40">Shop Now</a>
            </div>
        </div>
     </div>
     <!-- banner end -->
      <!-- feature section -->
       <div class="container ml-40">
        <div class="w-10/12 grid grid-cols-3 gap-6 mx-auto justify-center">
            <!-- single feature -->
        <div class="border border-red-500 rounded-sm px-3 py-6 flex justify-center items-center gap-5 transform translate-y-8">
            <img src="{{ asset('assets/images/icons/delivery-van.svg') }}" class="w-12 h-12 object cover">
            <div>
                <h4 class="font-medium capitalize text-lg">Free Shopping</h4>
                <p class="text-gray-500 text-sm">Order over $200</p>
            </div>
        </div>
        <!-- end single feature -->
          <!-- single feature -->
        <div class="border border-red-500 rounded-sm px-3 py-6 flex justify-center items-center gap-5 transform translate-y-8">
            <img src="{{ asset('assets/images/icons/money-back.svg') }}" class="w-12 h-12 object cover">
            <div>
                <h4 class="font-medium capitalize text-lg">Money Returns</h4>
                <p class="text-gray-500 text-sm">30 Days money returns</p>
            </div>
        </div>
        <!-- end single feature -->
          <!-- single feature -->
        <div class="border border-red-500 rounded-sm px-3 py-6 flex justify-center items-center gap-5 transform translate-y-8">
            <img src="{{ asset('assets/images/icons/service-hours.svg') }}" class="w-12 h-12 object cover">
            <div>
                <h4 class="font-medium capitalize text-lg">24/7 Support</h4>
                <p class="text-gray-500 text-sm">Customer support</p>
            </div>
        </div>
        <!-- end single feature -->  
        </div>
        </div>
       <!-- end feature section  -->

        <!-- categories -->
         <div class="container py-16 ml-40 transform translate-y-12">
            <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">Shop by category</h2>

            <div class="grid grid-cols-3 gap-3">  
                <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="{{ asset('assets/images/category/category-1.jpg') }}" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Bedroom</span>  
                    </a>  
                </div>  
                <!-- End single category -->  
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="{{ asset('assets/images/category/category-2.jpg') }}" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Sofa</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="{{ asset('assets/images/category/category-3.jpg') }}" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Office</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="{{ asset('assets/images/category/category-4.jpg') }}" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Outdoor</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="{{ asset('assets/images/category/category-5.jpg') }}" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Mattress</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
                 <!-- Single category -->  
                <div class="group relative rounded-sm overflow-hidden">  
                    <img src="{{ asset('assets/images/category/category-6.jpg') }}" class="w-full">  
                    <a href="#" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-40 transition duration-100 ease-in-out group-hover:bg-opacity-60">   
                        <span class="text-xl text-white font-roboto font-medium">Dining</span>  
                    </a>  
                </div>  
                <!-- End single category --> 
            </div>
         </div>
         <!-- categories -->

        <!-- product wipper -->  
        <div class="container py-16 ml-40"> 
            <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">Top New Arrival</h2>  
            <!-- product grid -->  
            <div class="grid grid-cols-4 gap-4">
                <!-- single produit  -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">  
                        <img src="{{ asset('assets/images/products/product1.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product2.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product3.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product4.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product5.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product6.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product7.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product9.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product10.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product11.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product12.jpg') }}" class="w-full">  
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
                        <img src="{{ asset('assets/images/products/product8.jpg') }}" class="w-full">  
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
            <!-- ads -->
        <div class="container pb-16 mt-8">
        <a href="#">
            <img src="{{ asset('assets/images/offer.jpg') }}" alt="ads" class="w-full">
        </a>
        </div>
        <!-- ./ads -->

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
        <div class="bg-gray-800 py-4 w-full">
            <div class="container flex items-center justify-between">
                <p class="text-white">© TailCommerce - All Right Reserved</p>
                <div>
                    <img src="{{asset('assets/images/methods.png')}}" alt="methods" class="h-5">
                </div>
            </div>
    </div>
    <!-- ./copyright -->

</div>
