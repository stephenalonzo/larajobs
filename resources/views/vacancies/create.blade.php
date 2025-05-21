<x-layout>
    <x-card class="container mx-auto w-1/2">
                    <h3
                        class="text-2xl text-center font-medium text-pretty text-purple-900"
                    >
                        Create Job Listing
                    </h3>
                    <form action="/vacancies" method="post" class="space-y-4" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="title">
                                <span class="text-sm font-medium text-gray-700">
                                    Title
                                </span>

                                <input
                                    type="text"
                                    id="title"
                                    class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                                    name="title"
                                    placeholder="ex. Senior Web Developer"
                                    value="{{ old('title') }}"
                                />

                                @error('title')
                                    <p class="text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                        <div>
                            <label for="company">
                                <span class="text-sm font-medium text-gray-700">
                                    Company
                                </span>
                                <input
                                    type="text"
                                    id="company"
                                    class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                                    name="company"
                                    placeholder="ex. Apple Inc."
                                    value="{{ old('company') }}"
                                />

                                @error('company')
                                    <p class="text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                        <div>
                            <label for="location">
                                <span class="text-sm font-medium text-gray-700">
                                    Location
                                </span>
                                <input
                                    type="text"
                                    id="location"
                                    class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                                    name="location"
                                    placeholder="ex. San Francisco, CA"
                                    value="{{ old('location') }}"
                                />

                                @error('location')
                                    <p class="text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                        <div>
                            <label for="logo">
                                <span class="text-sm font-medium text-gray-700">
                                    Company Logo
                                </span>
                                <input
                                    type="file"
                                    id="logo"
                                    class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                                    name="logo"
                                />
                            </label>
                        </div>
                        <div>
                            <label
                                for="Description"
                                class="flex flex-col space-y-1"
                            >
                                <span class="text-sm font-medium text-gray-700">
                                    Description
                                </span>
                                <textarea
                                    class="p-2 w-full rounded border border-gray-300 h-40 shadow-sm resize-none bg-white sm:text-sm"
                                    name="description"
                                    id="description"
                                >{{ old('description') }}</textarea>
                            </label>
                        </div>
                        <button
                            class="rounded-md bg-purple-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-purple-700"
                            type="submit"
                        >
                            Submit
                        </button>
                    </form>
    </x-card>
</x-layout>