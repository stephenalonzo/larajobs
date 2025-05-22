<x-layout>
    <x-card class="container mx-auto w-1/3">
        <h3 class="text-2xl text-center font-medium text-pretty text-purple-900">
            Create an account
        </h3>
        <form action="/users" method="post" class="space-y-4">
            @csrf
            <div>
                <label for="name">
                    <span class="text-sm font-medium text-gray-700">
                        Full Name
                    </span>

                    <input type="text" id="name"
                        class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                        name="name" placeholder="ex. John Doe" />
                </label>
            </div>
            <div>
                <label for="email">
                    <span class="text-sm font-medium text-gray-700">
                        Email Address
                    </span>
                    <input type="email" id="email"
                        class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                        name="email" placeholder="ex. your@email.com" />
                </label>
            </div>
            <div>
                <label for="password">
                    <span class="text-sm font-medium text-gray-700">
                        Password
                    </span>
                    <input type="password" id="password"
                        class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                        name="password" />
                </label>
            </div>
            <div>
                <label for="password_confirmation">
                    <span class="text-sm font-medium text-gray-700">
                        Confirm Password
                    </span>
                    <input type="password" id="password_confirmation"
                        class="mt-0.5 p-2 w-full rounded border border-gray-300 shadow-sm bg-white sm:text-sm"
                        name="password_confirmation" />
                </label>
            </div>
            <button
                class="rounded-md bg-purple-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-purple-700"
                type="submit">
                Register
            </button>
        </form>
    </x-card>
</x-layout>
