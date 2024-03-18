<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="p-6 text-gray-900">

            <div class="flex items-center justify-end mb-3">
                <a href="{{ route('person.create') }}" class="bg-blue-600 text-white py-2 px-3 rounded-full">Add Person</a>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
    @foreach ($people as $person)
        <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="{{ route('person.details', $person->id) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $person->firstname }} {{ $person->lastname }}</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Phone: {{ $person->phonenumber }}</p>
            <div class="flex justify-between">
                <a href="{{ route('person.details', $person->id) }}" class="inline-flex items-center mr-2 px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Details
                </a>
                <div class="flex">
                    <a href="{{ route('person.edit', $person->id) }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Edit
                    </a>

                    <a href="{{ route('person.destroy', $person->id) }}" class="inline-flex items-center  ml-2 px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        Delete
                    </a>
                   
                </div>
            </div>
        </div>
    @endforeach
</div>

        </div>
    </div>


    <footer class="bg-white py-4">
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <p class="text-sm">&copy; 2024 Contact App. All rights reserved.</p>
        
        </div>
    </div>
</footer>

</x-app-layout>
