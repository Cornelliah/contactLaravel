<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-lg font-semibold mb-6">Add a new person</h3>
            <form action="{{ route('person.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-600" for="firstname">First name</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="text" name="firstname" id="firstname" value="{{ old('firstname') }}">
                    </div>
                    <div>
                        <label class="block text-gray-600" for="lastname">Last name</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="text" name="lastname" id="lastname" value="{{ old('lastname') }}">
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-4">
                    <div>
                        <label class="block text-gray-600" for="email">Email</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="text" name="email" id="email" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label class="block text-gray-600" for="phone">Phone</label>
                        <input class="block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" type="text" name="phone" id="phone" value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end">
                    <a href="{{ route('person.index') }}" class="text-gray-500 hover:text-gray-700 mr-4">Cancel</a>
                    <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Add</button>
                </div>
            </form>
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
