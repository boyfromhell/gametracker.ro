<section id="latest-projects" class="text-gray-700 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap w-full mb-20 flex-col items-center text-center">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Our latest projects</h1>
            <p class="lg:w-1/2 w-full leading-relaxed text-base">We run a couple of projects. These are some of them</p>
        </div>

        <div class="flex flex-wrap -m-4">
            @foreach(\App\Models\Project::where('is_active', true)->take(6)->get() as $project)
                <div class="xl:w-1/3 md:w-1/2 p-4">
                    <div class="border border-gray-300 p-6 rounded-lg">
                        <div class="w-10 h-10 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4">
                            <a href="{{ route('projects.show', $project->slug) }}"><i class="{{ $project->icon }}"></i></a>
                        </div>

                        <h2 class="text-lg text-gray-900 font-medium title-font mb-2">
                            <a href="{{ route('projects.show', $project->slug) }}">{{ $project->title }}</a>
                        </h2>

                        <p class="leading-relaxed text-base">{{ $project->excerpt }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
