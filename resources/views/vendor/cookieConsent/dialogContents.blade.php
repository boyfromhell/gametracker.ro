<div class="js-cookie-consent cookie-consent">
    <div class="fixed inset-x-0 bottom-0">
        <div class="bg-indigo-600">
            <div class="max-w-screen-xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between flex-wrap">
                    <div class="w-0 flex-1 flex items-center">
                      <span class="flex p-2 rounded-lg bg-indigo-800">
                        <i class="fad fa-cookie-bite"></i>
                      </span>
                        <p class="ml-3 font-medium text-white truncate">
                            <span class="hidden md:inline">
                                <span class="cookie-consent__message">
                                    {!! trans('cookieConsent::texts.message') !!}
                                </span>
                            </span>
                        </p>
                    </div>

                    <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                        <div class="rounded-md shadow-sm">
                            <button class="js-cookie-consent-agree cookie-consent__agree flex items-center justify-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline transition ease-in-out duration-150">
                                {{ trans('cookieConsent::texts.agree') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
