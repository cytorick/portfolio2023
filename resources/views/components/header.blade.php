@props([
    'intro' => false,
])

<div class="relative overflow-hidden bg-gray-50 dark:bg-black">
    <div class="hidden sm:absolute sm:inset-0 sm:block" aria-hidden="true">
        <svg
            class="absolute bottom-0 right-0 mb-48 translate-x-1/2 transform text-gray-700 lg:top-0 lg:mt-28 lg:mb-0 xl:translate-x-0 xl:transform-none"
            width="364" height="384" viewBox="0 0 364 384" fill="none">
            <defs>
                <pattern id="eab71dd9-9d7a-47bd-8044-256344ee00d0" x="0" y="0" width="20" height="20"
                         patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-gray-800"
                          fill="currentColor"/>
                </pattern>
            </defs>
            <rect width="364" height="384" fill="url(#eab71dd9-9d7a-47bd-8044-256344ee00d0)"/>
        </svg>
    </div>
    <div class="relative pt-6">
        <div x-data="{ open: false }">
            <nav class="relative mx-auto flex max-w-7xl items-center justify-between px-4 sm:px-6"
                 aria-label="Global">
                <div class="flex flex-1 items-center">
                    <div class="flex w-full items-center justify-between md:w-auto">
                        <a href="{{ route('home') }}" class="flex items-center">
                            <i class="fa-solid fa-r h-8 block text-green-600 text-2xl"></i>
                            <i class="fa-solid fa-v h-8 block text-green-600 text-2xl"></i>
                        </a>
                        <div class="-mr-2 flex items-center md:hidden">
                            <button
                                id="theme-toggle"
                                type="button"
                                class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
                            >
                                <svg
                                    id="theme-toggle-dark-icon"
                                    class="w-6 h-6 hidden"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                                    ></path>
                                </svg>
                                <svg
                                    id="theme-toggle-light-icon"
                                    class="w-6 h-6 hidden"
                                    fill="currentColor"
                                    viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="hidden space-x-10 md:ml-10 md:flex">

                    </div>
                </div>
                <div class="hidden md:flex space-x-10 md:ml-10">
                    <a href="{{ route('home') }}"
                       class="font-medium p-3 {{ (request()->is('/')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500 dark:text-gray-300 dark:hover:text-green-600' }}"><i
                            class="fa-solid fa-house"></i></a>

                    <a href="{{ route('about') }}"
                       class="font-medium p-3 {{ (request()->is('over*')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500 dark:text-gray-300 dark:hover:text-green-600' }}">Over
                        mij</a>

                    <a href="{{ route('experience') }}"
                       class="font-medium p-3 {{ (request()->is('ervaring*')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500 dark:text-gray-300 dark:hover:text-green-600' }}">Ervaring</a>

                    <a href="{{ route('projects') }}"
                       class="font-medium p-3 {{ (request()->is('projecten')) ? 'text-green-600' : 'hover:text-green-600 text-gray-500 dark:text-gray-300 dark:hover:text-green-600' }}">Projecten</a>

                    <a href="{{ route('contact') }}"
                       class="font-medium text-white bg-green-600 hover:bg-green-700 rounded-full p-3 px-6">Bericht
                        mij!</a>
                    <button
                        id="theme-toggle-md"
                        type="button"
                        class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5"
                    >
                        <svg
                            id="theme-toggle-dark-icon-md"
                            class="w-5 h-5 hidden"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"
                            ></path>
                        </svg>
                        <svg
                            id="theme-toggle-light-icon-md"
                            class="w-5 h-5 hidden"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                            ></path>
                        </svg>
                    </button>
                </div>
            </nav>
        </div>

        <main class="mt-16 sm:mt-24">
            <div class="mx-auto max-w-7xl">
                <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                    <div
                        class="px-4 sm:px-6 sm:text-center md:mx-auto md:max-w-2xl lg:col-span-6 lg:flex lg:items-center lg:text-left">
                        <div>
                            @livewire('tools.available')
                            <h1 class="mt-4 text-5xl font-bold tracking-tight text-gray-900 dark:text-gray-100">
                                {{ $slot }}
                            </h1>
                            @if($intro)
                                <p class="mt-3 text-base text-gray-500 dark:text-gray-300 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                    {{ $intro }}
                                </p>
                            @endif
                            <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
                                @foreach(\App\Models\Link::where('archived', 0)->where('featured', 1)->get() as $link)
                                    <a href="{{ $link->link }}" target="_blank" class=" hover:text-green-600 mr-8">
                                        {!! $link->icon !!}
                                    </a>
                                @endforeach
                            </p>
                        </div>
                    </div>
                    <div class="mt-16 sm:mt-24 lg:col-span-6 lg:mt-0 flex justify-center">
                        <img src="{{ asset('img/rick-netjes-nobg.png') }}" alt="" class="w-72">
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
