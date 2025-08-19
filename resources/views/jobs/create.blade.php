<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
         <x-forms.input name="title" label="Title" placeholder="Web Developer" required />
         <x-forms.input name="salary" label="Salary" placeholder="$90,000 USD" required />
         <x-forms.input name="location" label="Location" placeholder="Winter Park, Florida" required />

         <x-forms.select label="Schedule" name="schedule" required>
             <option>Full Time</option>
             <option>Part Time</option>
         </x-forms.select>
         
         <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted"/>

         <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

         <x-forms.divider/>

         <x-forms.input name="tags" label="Tags (comma Separated)" placeholder="laracasts,video" required />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>
</x-layout>