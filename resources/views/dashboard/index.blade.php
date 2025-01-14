<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- Start Results -->
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div>
                        <div class="flex flex-row">
                            <div class="basis-1/3 text-center">HOME</div>
                            <div class="basis-1/3 text-center"></div>
                            <div class="basis-1/3 text-center">AWAY</div>
                        </div>
                        @foreach ($results as $result)
                        <div class="flex flex-row">
                            <div class="basis-1/3 text-center">{{ $result->properties['clubs'][0]['name'] ?? 'Team Disbanded' }}</div>
                            <div class="basis-1/3 text-center">{{ $result->home_team_goals }} - {{ $result->away_team_goals }}</div>
                            <div class="basis-1/3 text-center">{{ $result->properties['clubs'][1]['name'] ?? 'Team Disbanded' }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="py-2">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                                {{ $results->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Results -->

</x-app-layout>
