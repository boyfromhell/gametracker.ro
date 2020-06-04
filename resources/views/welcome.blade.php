@extends('layouts.app')

@section('page_title', 'Home')

@section('content')
    <section class="text-gray-700 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/undraw_select_player_64ca.svg') }}">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">We think software.
                    <br class="hidden lg:inline-block">For you.
                </h1>
                <p class="mb-8 leading-relaxed">We accompany you in the implementation of your project. We are at your side from planning to implementation.</p>
                <div class="flex justify-center">
                    <a href="#latest-projects" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Latest Projects</a>
                    <a href="#from-the-blog" class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">Latest Blogposts</a>
                </div>
            </div>
        </div>
    </section>

    @include('_partials.projects')

    @include('_partials.posts')
@endsection
