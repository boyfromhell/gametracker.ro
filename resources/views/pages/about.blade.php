@extends('layouts.app')

@section('page_title', 'About')

@section('content')
    <section class="text-gray-700 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">About 4raum</h1>
                <p class="lg:w-1/2 w-full leading-relaxed text-base">Want to know how we work and who we are?</p>
            </div>

{{--            <div class="flex flex-wrap w-full mb-20">--}}
{{--                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">--}}
{{--                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Our team</h1>--}}
{{--                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="flex flex-wrap -m-4">--}}
{{--                <div class="p-4 lg:w-1/4 md:w-1/2">--}}
{{--                    <div class="h-full flex flex-col items-center text-center">--}}
{{--                        <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://avatars1.githubusercontent.com/u/6692500?s=460&u=776316289aa57c3fcc848175b2efed7167e2ebe2&v=4">--}}
{{--                        <div class="w-full">--}}
{{--                            <h2 class="title-font font-medium text-lg text-gray-900">Florian Wartner</h2>--}}
{{--                            <h3 class="text-gray-500 mb-3">Founder & CTO</h3>--}}
{{--                            <p class="mb-4">Florian comes up with ideas for projects to enrich daily lifes.</p>--}}
{{--                            <span class="inline-flex">--}}
{{--                              <a class="text-gray-500">--}}
{{--                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>--}}
{{--                                </svg>--}}
{{--                              </a>--}}
{{--                              <a class="ml-2 text-gray-500">--}}
{{--                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>--}}
{{--                                </svg>--}}
{{--                              </a>--}}
{{--                              <a class="ml-2 text-gray-500">--}}
{{--                                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>--}}
{{--                                </svg>--}}
{{--                              </a>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="p-4 lg:w-1/4 md:w-1/2">--}}
{{--                    <div class="h-full flex flex-col items-center text-center">--}}
{{--                        <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/201x201">--}}
{{--                        <div class="w-full">--}}
{{--                            <h2 class="title-font font-medium text-lg text-gray-900">Holden Caulfield</h2>--}}
{{--                            <h3 class="text-gray-500 mb-3">UI Developer</h3>--}}
{{--                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>--}}
{{--                            <span class="inline-flex">--}}
{{--              <a class="text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--              <a class="ml-2 text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--              <a class="ml-2 text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4 lg:w-1/4 md:w-1/2">--}}
{{--                    <div class="h-full flex flex-col items-center text-center">--}}
{{--                        <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/202x202">--}}
{{--                        <div class="w-full">--}}
{{--                            <h2 class="title-font font-medium text-lg text-gray-900">Atticus Finch</h2>--}}
{{--                            <h3 class="text-gray-500 mb-3">UI Developer</h3>--}}
{{--                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>--}}
{{--                            <span class="inline-flex">--}}
{{--              <a class="text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--              <a class="ml-2 text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--              <a class="ml-2 text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4 lg:w-1/4 md:w-1/2">--}}
{{--                    <div class="h-full flex flex-col items-center text-center">--}}
{{--                        <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="https://dummyimage.com/203x203">--}}
{{--                        <div class="w-full">--}}
{{--                            <h2 class="title-font font-medium text-lg text-gray-900">Henry Letham</h2>--}}
{{--                            <h3 class="text-gray-500 mb-3">UI Developer</h3>--}}
{{--                            <p class="mb-4">DIY tote bag drinking vinegar cronut adaptogen squid fanny pack vaporware.</p>--}}
{{--                            <span class="inline-flex">--}}
{{--              <a class="text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--              <a class="ml-2 text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--              <a class="ml-2 text-gray-500">--}}
{{--                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">--}}
{{--                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>--}}
{{--                </svg>--}}
{{--              </a>--}}
{{--            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="text-gray-700 body-font">--}}
{{--        <div class="container px-5 py-24 mx-auto flex flex-wrap">--}}
            <div class="flex flex-wrap w-full mb-20">
                <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                    <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">How we work</h1>
                    <div class="h-1 w-20 bg-indigo-500 rounded"></div>
                </div>
            </div>

            <div class="flex flex-wrap w-full">
                <div class="lg:w-2/5 md:w-1/2 md:pr-10 md:py-6">
                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>

                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>

                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Get in touch</h2>
                            <p class="leading-relaxed">First of all, we will sit down with you and discuss the details of your project.</p>
                        </div>
                    </div>

                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>

                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>

                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Measure</h2>
                            <p class="leading-relaxed">We take a close look at your project to find out what is behind it and how we can get the best out of it for you in the fastest possible time.</p>
                        </div>
                    </div>

                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>

                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <circle cx="12" cy="5" r="3"></circle>
                                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                            </svg>
                        </div>

                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Setup</h2>
                            <p class="leading-relaxed">We set up your project with us and thus create a solid foundation.</p>
                        </div>
                    </div>

                    <div class="flex relative pb-12">
                        <div class="h-full w-10 absolute inset-0 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                        </div>

                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>

                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Development</h2>
                            <p class="leading-relaxed">We start developing your project and always keep you up to date.</p>
                        </div>
                    </div>

                    <div class="flex relative">
                        <div class="flex-shrink-0 w-10 h-10 rounded-full bg-indigo-500 inline-flex items-center justify-center text-white relative z-10">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                                <path d="M22 4L12 14.01l-3-3"></path>
                            </svg>
                        </div>
                        <div class="flex-grow pl-4">
                            <h2 class="font-medium title-font text-sm text-gray-900 mb-1 tracking-wider">Deploy</h2>
                            <p class="leading-relaxed">As soon as we are basically finished with our work, we roll out your project and make it completely available to you.</p>
                        </div>
                    </div>
                </div>
                <img class="lg:w-3/5 md:w-1/2 object-cover object-center rounded-lg md:mt-0 mt-12" src="{{ asset('images/undraw_placeholders_rklh.svg') }}" alt="step">
            </div>
        </div>
    </section>
@endsection
