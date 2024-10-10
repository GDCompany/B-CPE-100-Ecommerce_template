<div>

    <!-- Breadcrumbs -->
    <div class="container py-4 flex items-center ml-24 gap-3">
        <a href="{{ route('home') }}" class="text-red-500 text-base">
            <i class="fas fa-home"></i>
        </a>
        <span class="text-sm text-gray-400 mx-2">
            <i class="fas fa-chevron-right"></i>
        </span>
        <span class="text-gray-600 font-medium">About</span>
    </div>
    <!-- Breadcrumbs end -->

    <!-- About Vision -->
    <div class="container grid grid-cols-12 gap-6 ml-24 mt-4">
        <div class="col-span-12 lg:col-span-5">
            <div class="about_imgs">
                <img loading="lazy" src="{{ asset('assets/images/about-img.jpg') }}" class="w-full" alt="About Image">
            </div>
        </div>
        <div class="col-span-12 lg:col-span-7">
            <div class="ps-xl-2">
                <h2 class="text-sm text-primary mb-2">OUR VISION</h2>
                <h3 class="text-2xl lg:text-3xl uppercase mb-3">
                    Our vision is simple - We exist to <br class="hidden xl:inline-block">
                    accelerate our customers’ progress
                </h3>
                <p class="mb-4">
                    We design and deliver our customers’ digital transformation by bringing together their
                    vision with our industry knowledge and deep technological expertise. We design and deliver
                    our customers’ digital transformation.
                </p>
                <div>
                    <p class="flex items-center gap-2 mb-2 mt-4">
                        <span class="text-primary">
                            <svg width="16" height="16" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="..."></path>
                            </svg>
                        </span>
                        We build strong relationships
                    </p>
                    <p class="flex items-center gap-2 mb-2 mt-4">
                        <span class="text-primary">
                            <svg width="16" height="16" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="..."></path>
                            </svg>
                        </span>
                        We encourage initiative and provide opportunity
                    </p>
                    <p class="flex items-center gap-2 mb-2 mt-4">
                        <span class="text-primary">
                            <svg width="16" height="16" viewBox="0 0 1024 1024">
                                <path fill="currentColor" d="..."></path>
                            </svg>
                        </span>
                        We embrace change and creativity
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Mission -->
    <div class="container mt-8 ml-24">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Our Mission</h2>
        <p class="text-gray-600 mb-6">
            Our mission is to empower individuals and organizations with innovative solutions that drive success. 
            We achieve this by harnessing the latest technologies, fostering collaboration, and committing to excellence.
        </p>
    </div>

    <!-- About Values -->
    <div class="container mt-8 ml-24">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Our Core Values</h2>
        <ul class="list-disc pl-5 text-gray-600">
            <li>Integrity - We act with honesty and transparency in all we do.</li>
            <li>Customer Centricity - Our customers are at the heart of everything we do.</li>
            <li>Innovation - We embrace change and continuously seek new ways to improve.</li>
            <li>Excellence - We strive to deliver the highest quality in every project.</li>
        </ul>
    </div>

    <!-- Call to Action -->
    <div class="container mt-12 ml-24 mb-12 text-center">
        <h3 class="text-2xl font-semibold mb-4">Join Us on Our Journey</h3>
        <p class="text-gray-600 mb-6">
            Discover how we can help you achieve your digital transformation goals. Get in touch with us today!
        </p>
        <a href="#" class="bg-red-500 text-white px-6 py-3 rounded hover:bg-red-600 transition">Contact Us</a>
    </div>


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
