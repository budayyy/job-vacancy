<x-layout>
    <x-page-heading>
        New Job
    </x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="5.000.000 IDR" />
        <x-forms.input label="Location" name="location" placeholder="Jakarta, Indonesia" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://jobs/ceo" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma Separated)" name="tags"
            placeholder="backend, fullstack, video, edication" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
