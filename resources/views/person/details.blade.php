<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('People') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-between items-center mb-6">
                <h3 class="text-lg font-semibold">See your contact</h3>
                <a href="{{ route('person.index') }}" class="bg-gray-400 text-white py-2 px-4 rounded-md hover:bg-gray-500 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-50">Back</a>
            </div>
            
            <table class="w-full">
                <tbody>
                    <tr>
                        <td class="py-2 px-4 font-semibold">First name</td>
                        <td class="py-2 px-4">{{ $person->firstname }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Last name</td>
                        <td class="py-2 px-4">{{ $person->lastname }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Email</td>
                        <td class="py-2 px-4">{{ $person->email }}</td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 font-semibold">Phone</td>
                        <td class="py-2 px-4">{{ $person->phonenumber }}</td>
                    </tr>
                </tbody>
            </table>

            <div class="mt-6 flex justify-end">
                <a href="{{ route('person.edit', $person->id) }}" class="bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 mr-4">Edit</a>
                
               <a href="{{ route('person.destroy', $person->id) }}" class="bg-red-600 text-white py-2 px-4 rounded-md hover:bg-red-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50 mr-4">Delete</a>
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
