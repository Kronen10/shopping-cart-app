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
                    {{ __("You're logged in! Run to the store for shopping!") }}
                    @auth
                    @if(Auth::user()->isAdmin())
                    <br><br><br>
                    <img src="https://sun9-5.userapi.com/impg/2iHit2wLqji_uPuTfNP_MgHbhRgGxDoxIQGARQ/ZkPUvKb7E0s.jpg?size=600x220&quality=96&sign=f3bebbc0e95b5833bb2bbb9daf0cea56&type=album"> 
                    @endif
                @endauth
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
