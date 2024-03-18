<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Welcome in contact App!") }}

                    <div class="mx-auto max-w-2xl md:text-center">
<p class="flex justify-center">
                    <img src="https://i.pinimg.com/736x/a1/c4/62/a1c46275c36f1d340bc86b521cfc40d5.jpg" class="w-full rounded-full" alt="">
                    </p>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
