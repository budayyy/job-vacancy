<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @if ($jobs->count())
            <section class="mt-6">
                <x-section-heading>
                    Search : {{ request('q') }}
                </x-section-heading>
            </section>
            @foreach ($jobs as $job)
                <x-job-card-wide :$job />
            @endforeach
        @else
            <section class="mt-6">
                <x-section-heading>
                    Search : {{ request('q') }}
                </x-section-heading>
            </section>
            <x-panel>
                <h3 class="text-center font-bold text-lg">No Job Recomendations</h3>
            </x-panel>
        @endif
    </div>
</x-layout>
