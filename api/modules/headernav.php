<!-- header css -->
<link async rel="stylesheet" href="../../asset/css/header.css" />
<!-- main js -->
<script defer src="../../asset/js/main.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11061704274"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "AW-11061704274");
</script>

</head>

<body>
    <!-- nav start -->
    <div class="px-6 pt-6 lg:px-8 z-30 bg">
        <div>
            <nav class="lg:fixed lg:inset-x-0 lg:top-0 lg:p-8 z-50 lg:px-4 transition flex h-9 items-center justify-between" id="navbar" aria-label="Global">
                <div class="flex lg:pl-16 lg:min-w-0 lg:flex-1 justify-start" aria-label="Global">
                    <a href="../../" class="-m-1.5 p-1.5">
                        <span class="sr-only">LAVARAGES</span>
                        <img class="w-8 h-8" src="../../asset/img/porto-images/lavarages-logo-ps.webp" alt="logo-lavarages" />
                    </a>
                </div>
                <div class="flex lg:hidden z-10">
                    <button type="button" class="gotin -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="toogleOpenMenu">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/bars-3 -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden z-50 lg:flex lg:min-w-0 lg:flex-1 sm:justify-center lg:gap-x-12">
                    <a href="../../" class="transition-all duration-500 ease-in-out hover:text-indigo-700 font-semibold text-gray-900">Home</a>

                    <a href="../../api/pages/service.php" class="transition-all duration-500 ease-in-out hover:text-indigo-700 font-semibold text-gray-900">Services</a>

                    <a href="../../api/pages/portofolio.php" class="transition-all duration-500 ease-in-out hover:text-indigo-700 font-semibold text-gray-900">Works</a>

                    <a href="../../api/pages/about.php" class="transition-all duration-500 ease-in-out hover:text-indigo-700 font-semibold text-gray-900">About</a>

                    <a href="../../api/pages/contact.php" class="transition-all duration-500 ease-in-out hover:text-indigo-700 font-semibold text-gray-900">Contact</a>
                </div>
                <div class="hidden pr-16 lg:flex lg:min-w-0 lg:flex-1 lg:justify-end">
                    <a href="https://wa.me/6281337180384?text=" class=" transition-all duration-500 ease-in-out hover:bg-indigo-500 hover:text-white inline-block rounded-lg px-3 py-1.5 text-sm font-semibold leading-6 text-gray-900 shadow-sm ring-1 ring-gray-900/10 hover:ring-gray-900/20">Disccuse Now!</a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div id="mobile-menu" style="display: none" role="dialog" aria-modal="true">
                <div focus="true" class="fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6 lg:hidden">
                    <div class="flex h-9 items-center justify-between">
                        <div class="flex">
                            <a href="../" class="-m-1.5 p-1.5">
                                <span class="sr-only">Your Company</span>
                                <img class="h-8" src="../../asset/img/porto-images/lavarages-logo-ps.webp" alt="lavarages-logo-ps" />
                            </a>
                        </div>
                        <div class="flex">
                            <button type="button" class="gotin -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" id="toogleCloseMenu">
                                <span class="sr-only">Close menu</span>
                                <!-- Heroicon name: outline/x-mark -->
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="../../" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Home</a>

                                <a href="../../api/pages/service.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Services</a>

                                <a href="../../api/pages/portofolio.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Works</a>

                                <a href="../../api/pages/about.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">About</a>

                                <a href="../../api/pages/contact.php" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Contact Us</a>
                            </div>
                            <div class="py-6">
                                <a href="https://wa.me/6281337180384?text=" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Chat With us Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nav end -->