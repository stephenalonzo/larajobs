<x-layout>
                <div class="container mx-auto w-1/2">
                    <ul class="space-y-4 w-full">
                        @foreach ($vacancies as $vacancy)
                        <li>
                            <a
                                href="/vacancies/{{ $vacancy->id }}/"
                                class="block rounded-md border border-gray-300 p-4 shadow-sm sm:p-6"
                            >
                                <div
                                    class="flex justify-between items-center"
                                >
                                    <div class="sm:order-last sm:shrink-0">
                                        <img
                                            alt=""
                                            src="{{ $vacancy->logo ? 'storage/' . $vacancy->logo : asset('images/no-image.png') }}"
                                            class="w-48 object-cover"
                                        />
                                    </div>

                                    <div class="mt-4 sm:mt-0">
                                        <h3
                                            class="text-lg font-medium text-pretty text-purple-900"
                                        >
                                            {{ $vacancy->title }}
                                        </h3>

                                        <p class="mt-1 text-sm text-gray-700">
                                           {{ $vacancy->company }}
                                        </p>

                                        <p class="mt-1 text-sm text-gray-400">
                                            {{ $vacancy->location }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
</x-layout>