<div>
    <section class="text-gray-700 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Have something to share with us? Hit us a message!</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div wire:loading class="pb-5">
                    Processing Form...
                </div>

                @error('name')
                    <div role="alert" class="pb-5">
                        <div class="border border-t-1 border-red-400 rounded-b rounded-t bg-red-100 px-4 py-3 text-red-700">
                            <span class="error">{{ $message }}</span>
                        </div>
                    </div>
                @enderror

                @error('email')
                    <div role="alert" class="pb-5">
                        <div class="border border-t-1 border-red-400 rounded-b rounded-t bg-red-100 px-4 py-3 text-red-700">
                            <span class="error">{{ $message }}</span>
                        </div>
                    </div>
                @enderror

                @error('message')
                    <div role="alert" class="pb-5">
                        <div class="border border-t-1 border-red-400 rounded-b rounded-t bg-red-100 px-4 py-3 text-red-700">
                            <span class="error">{{ $message }}</span>
                        </div>
                    </div>
                @enderror

                @if (session()->has('message'))
                    <div role="alert" class="pb-5">
                        <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
                            Your Message has been sent!
                        </div>

                        <div class="border border-t-1 rounded-t border-green-400 rounded-b bg-green-100 px-4 py-3 text-green-700">
                            <p>{{ session('message') }}</p>
                        </div>
                    </div>
                @endif

                <form wire:submit.prevent="submit" class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Name" type="text" wire:model="name">
                    </div>

                    <div class="p-2 w-1/2">
                        <input class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none focus:border-indigo-500 text-base px-4 py-2" placeholder="Email" type="email" wire:model="email">
                    </div>

                    <div class="p-2 w-full">
                        <textarea class="w-full bg-gray-100 rounded border border-gray-400 focus:outline-none h-48 focus:border-indigo-500 text-base px-4 py-2 resize-none block" placeholder="Message" wire:model="message"></textarea>
                    </div>

                    <div class="p-2 w-full">
                        <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
