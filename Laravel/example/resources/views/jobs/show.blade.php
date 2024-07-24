<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class= "font-bold text-lg">{{ $job->title }}</h2>
    <p>
        This job pays {{ $job->salary }} per year
    </p>
@can('edit', $job) {{-- shows the edit job button only if the user is authorized to edit that job --}}
    <p class="mt-6">
        <x-button href="/dashboard/example/public/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>
@endcan
</x-layout>