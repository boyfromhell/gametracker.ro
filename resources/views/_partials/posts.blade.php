<section id="from-the-blog" class="text-gray-700 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20">
            <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">From the blog</h1>
                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
            </div>

            <p class="lg:w-1/2 w-full leading-relaxed text-base">Whenever we have thoughts that we think others might help, we write them down.</p>
        </div>

        <div class="-my-8">
            @foreach(\App\Models\Post::where('is_published', true)->take(3)->get() as $post)
                <div class="py-8 flex flex-wrap md:flex-no-wrap">
                    <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                        <span class="tracking-widest font-medium title-font text-gray-900">{{ $post->category->title }}</span>
                        <span class="mt-1 text-gray-500 text-sm">{{ $post->published_at }}</span>
                    </div>

                    <div class="md:flex-grow">
                        <h2 class="text-2xl font-medium text-gray-900 title-font mb-2">{{ $post->title }}</h2>
                        <p class="leading-relaxed">{{ $post->excerpt }}</p>
                        <a href="" class="text-indigo-500 inline-flex items-center mt-4">Read More
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
