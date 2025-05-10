<nav class="flex items-center sticky justify-between p-2 lg:px-8 bg-orange-200" aria-label="Global">
    <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <div class="container flex">
                <img class="h-16 w-16" src="{{URL::asset('images/logo.png')}}" alt="">
                <h1 class="font-semibold text-xl text-black mx-4 mt-4 hover:font-bold">Rumah Bersinar Foundation</h1>
            </div>
        </a>
    </div>
    <div class="flex lg:hidden">
        <button type="button" id="menubutton" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
        <h1 class="text-lg font-semibold text-gray-900"></h1>
        <a href="/aboutUs" class="text-m font-semibold leading-6 text-gray-900 dark:text-gray-100 hover:font-bold">About Us</a>
        <a href="/contactUs" class="text-m font-semibold leading-6 text-gray-900 dark:text-gray-100 hover:font-bold">Contact Us</a>
        <a href="/gallery" class="text-m font-semibold leading-6 text-gray-900 dark:text-gray-100 hover:font-bold">Gallery</a>
        <a href="/supportUs" class="text-m font-semibold leading-6 text-gray-900 dark:text-gray-100 hover:font-bold">How To Support Us?</a>
        <a href="/legalities" class="text-m font-semibold leading-6 text-gray-900 dark:text-gray-100 hover:font-bold">Legalities</a>
        <a href="/children" class="text-m font-semibold leading-6 text-gray-900 dark:text-gray-100 hover:font-bold">Our Childrens</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end"></div>
</nav>

<!-- Mobile menu, initially hidden -->
<div id="mobile-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-50"></div>
    <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="/" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="{{ URL::asset('images/logo.png') }}" alt="">
            </a>
            <button type="button" id="closebutton" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    <a href="/aboutUs" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">About Us</a>
                    <a href="/contactUs" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact Us</a>
                    <a href="/gallery" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Gallery</a>
                    <a href="/supportUs" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">How To Support Us?</a>
                    <a href="/legalities" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Legalities</a>
                    <a href="/children" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Out Childrens</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript to toggle the mobile menu -->
<script>
    const menuButton = document.getElementById('menubutton');
    const closeButton = document.getElementById('closebutton');
    const mobileMenu = document.getElementById('mobile-menu');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    closeButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
