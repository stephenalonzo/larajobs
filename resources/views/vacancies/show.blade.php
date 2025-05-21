<x-layout>
                    <div class="container mx-auto w-1/2 space-y-12">
                    <div class="space-y-4">
                        <span>
                            <p class="text-sm text-gray-700">{{ $vacancy->company }}</p>
                            <h3
                                class="text-2xl font-medium text-pretty text-purple-900"
                            >
                                {{ $vacancy->title }}
                            </h3>
                        </span>
                        <p class="text-sm text-gray-400">{{ $vacancy->location }}</p>
                        <div class="flex flex-row items-center space-x-2">
                            <a
                                href="/vacancies/{{ $vacancy->id }}/edit"
                                class="px-4 py-2 rounded-md bg-purple-600 text-white text-sm"
                                >Edit</a
                            >
                            <a
                                href="#"
                                class="px-4 py-2 rounded-md border-2 border-purple-600 text-purple-600 text-sm"
                                >Delete</a
                            >
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h3
                            class="font-medium text-lg underline underline-offset-4"
                        >
                            Job Description
                        </h3>
                        <p>
                            {{ $vacancy->description }}
                        </p>
                    </div>
                </div>
</x-layout>