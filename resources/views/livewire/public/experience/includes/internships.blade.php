<div class="bg-gray-50 dark:bg-black">
    <div class="mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl text-gray-900 dark:text-gray-200">Waar ik stage heb gelopen</h2>
                <p class="text-xl text-gray-500 dark:text-gray-300">Vanuit mijn opleidingen heb ik stage moeten lopen en dit heb ik gedaan bij de volgende bedrijven.</p>
            </div>
            <div class="lg:col-span-2">
                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                    @foreach($internships as $internship)
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-20"
                                     src="https://images.cytorick.nl/{{ $internship->media[0]->id }}/{{ $internship->media[0]->file_name }}"
                                     alt="">
                                <div class="space-y-1 text-lg font-medium leading-6">
                                    <h3 class="text-gray-900 dark:text-gray-200">{{ $internship->name }}</h3>
                                    <p class="text-green-600 text-sm">{{ $internship->company }}</p>
                                    <p class="text-gray-500 dark:text-gray-300 text-sm">
                                        {{ date('M Y', strtotime($internship->start_date)) }} -
                                        @if($internship->is_active == 1)
                                            {{ __('Heden') }}
                                        @else
                                            {{ date('M Y', strtotime($internship->end_date)) }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
