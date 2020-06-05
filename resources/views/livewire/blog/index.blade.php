<div>
    <section class="text-gray-700 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-12">
                @foreach($posts as $post)
                    <div class="p-12 md:w-1/2 flex flex-col items-start">
                        <a href="{{ route('categories.show', $post->category->slug) }}" class="inline-block py-1 px-3 rounded bg-indigo-100 text-indigo-500 text-sm font-medium tracking-widest">{{ $post->category->title }}</a>
                        <h2 class="sm:text-3xl text-2xl title-font font-medium text-gray-900 mt-4 mb-4">{{ $post->title }}</h2>
                        <p class="leading-relaxed mb-8">{{ $post->excerpt }}</p>
                        <div class="flex items-center flex-wrap pb-4 mb-4 border-b-2 border-gray-200 mt-auto w-full">
                            <a href="{{ route('posts.show', $post->slug) }}" class="text-indigo-500 inline-flex items-center">Read More
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>

                            @livewire('blog.post.view-count', ['post' => $post])

                            @livewire('blog.post.comment-count', ['post' => $post])
                        </div>

                        <a  class="inline-flex items-center">
                            <img alt="blog" src="{{ $post->author->gravatar }}" class="w-12 h-12 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-medium text-gray-900">{{ $post->author->name }}</span>
                                <span class="text-gray-500 text-sm">{{ $post->author->role }}</span>
                            </span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
