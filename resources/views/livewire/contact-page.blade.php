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

<!-- contact form -->
<div class="container py-10 ml-32">
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-12 lg:col-span-7 bg-white shadow-md px-5 py-6">
            <div>
                <h4 class="text-lg sm:text-xl uppercase mb-2">Laissez-nous un message</h4>
                <p class="mb-4 text-sm">Utilisez le formulaire ci-dessous pour contacter notre équipe de vente.</p>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 sm:col-span-6">
                        <label for="first_name" class="block mb-1">Prénom <span class="text-red-600">*</span></label>
                        <input type="text" class="w-full border border-gray-300 rounded focus:border-red-500 focus:ring-0">
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label for="last_name" class="block mb-1">Nom <span class="text-red-600">*</span></label>
                        <input type="text" class="w-full border border-gray-300 rounded focus:border-red-500 focus:ring-0">
                    </div>
                    <div class="col-span-12">
                        <label for="email_addr" class="block mb-1">Adresse Email <span class="text-red-600">*</span></label>
                        <input type="text" class="w-full border border-gray-300 rounded focus:border-red-500 focus:ring-0">
                    </div>
                    <div class="col-span-12">
                        <label for="company_name" class="block mb-1">Objet</label>
                        <input type="text" class="w-full border border-gray-300 rounded focus:border-red-500 focus:ring-0">
                    </div>
                    <div class="col-span-12">
                        <label for="county_region" class="block mb-1">Votre message <span class="text-red-600">*</span></label>
                        <textarea class="w-full border border-gray-300 rounded focus:border-red-500 focus:ring-0"></textarea>
                    </div>
                    <div class="col-span-12 mt-4">
                        <button type="submit" class="bg-red-500 text-white rounded px-4 py-2 hover:bg-red-600">Envoyer le message</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-12 lg:col-span-5 bg-white shadow-md px-5 py-6">
            <h4 class="text-lg uppercase mb-3">Notre magasin</h4>
            <div class="footer_contact">
                <div class="relative pb-3">
                    <p class="absolute top-1 left-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="32"
                                d="M256 48c-79.5 0-144 61.39-144 137c0 87 96 224.87 131.25 272.49a15.77 15.77 0 0 0 25.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137Z" />
                            <circle cx="256" cy="192" r="48" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="32" />
                        </svg>
                    </p>
                    <p class="pl-8">7895 Dr New Albuquerue, NM 19800, États-Unis</p>
                </div>
                <div class="relative pb-3">
                    <span class="absolute left-0 top-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m19.23 15.26l-2.54-.29a1.99 1.99 0 0 0-1.64.57l-1.84 1.84a15.045 15.045 0 0 1-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52a2.001 2.001 0 0 0-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07c.53 8.54 7.36 15.36 15.89 15.89c1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98z" />
                        </svg>
                    </span>
                    <p class="pl-8">+566 477 256, +566 254 575</p>
                </div>
                <div class="relative pb-3">
                    <span class="absolute left-0 top-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4 20q-.825 0-1.412-.587Q2 18.825 2 18V6q0-.825.588-1.412Q3.175 4 4 4h16q.825 0 1.413.588Q22 5.175 22 6v12q0 .825-.587 1.413Q20.825 20 20 20Zm8-7L4 8v10h16V8Zm0-2l8-5H4ZM4 8V6v12Z" />
                        </svg>
                    </span>
                    <p class="pl-8">info@domain.com</p>
                </div>
            </div>

            <h4 class="mt-4 mb-3 uppercase">Horaires d'ouverture</h4>
            <div class="space-y-1">
                <div class="flex justify-between">
                    <p>Samedi</p>
                    <p>12:00 PM</p>
                </div>
                <div class="flex justify-between">
                    <p>Dimanche</p>
                    <p>12:00 PM</p>
                </div>
                <div class="flex justify-between">
                    <p>Lundi</p>
                    <p>12:00 PM</p>
                </div>
                <div class="flex justify-between">
                    <p>Mardi</p>
                    <p>12:00 PM</p>
                </div>
                <div class="flex justify-between">
                    <p>Mercredi</p>
                    <p>12:00 PM</p>
                </div>
                <div class="flex justify-between">
                    <p>Jeudi</p>
                    <p>12:00 PM</p>
                </div>
                <div class="flex justify-between">
                    <p>Vendredi</p>
                    <p>12:00 PM</p>
                </div>
            </div>

            <h4 class="text-lg mt-4 mb-2 uppercase">Carrières</h4>
            <p class="text-sm mb-0">Si vous êtes intéressé par des opportunités d'emploi chez RAFCARTs, veuillez
                nous contacter par email :</p>
            <a href="#" class="text-red-500">contact@mail.com</a>
        </div>
    </div>
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