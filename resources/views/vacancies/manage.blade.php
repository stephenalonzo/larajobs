<x-layout>
    <x-card class="container mx-auto w-1/2">
        <div class="overflow-x-auto rounded bg-white border border-gray-300 shadow-sm">
            <table class="min-w-full divide-y-2 divide-gray-200">
                <thead class="ltr:text-left rtl:text-right">
                    <tr class="*:font-medium *:text-gray-900">
                        <th class="px-3 py-2 whitespace-nowrap">Title</th>
                        <th class="px-3 py-2 whitespace-nowrap">Company</th>
                        <th class="px-3 py-2 whitespace-nowrap">Location</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-200">
                    @foreach ($vacancies as $vacancy)
                        <tr class="*:text-gray-900 *:first:font-medium">
                            <td class="px-3 py-2 whitespace-nowrap">{{ $vacancy->title }}</td>
                            <td class="px-3 py-2 whitespace-nowrap">{{ $vacancy->company }}</td>
                            <td class="px-3 py-2 whitespace-nowrap">{{ $vacancy->location }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-card>
</x-layout>
