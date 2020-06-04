<header class="text-gray-700 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a href="/" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img src="{{ asset('images/logo/default-monochrome.svg') }}" alt="4raum.co Logo" class="w-6 h-6">
            <span class="ml-3 text-xl">{{ config('app.name') }}</span>
        </a>
        <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a href="/" class="mr-5 hover:text-gray-900">Home</a>
            <a href="/projects" class="mr-5 hover:text-gray-900">Projects</a>
            <a href="/blog" class="mr-5 hover:text-gray-900">Blog</a>
            <a href="/contact" class="mr-5 text-indigo-900 hover:text-indigo-200">Work with us!</a>
        </nav>

        <a href="{{ route('login') }}" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Customer Login
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
        </a>
    </div>
</header>
