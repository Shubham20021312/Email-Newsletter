<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex">
            <!-- Sidebar -->
            <div class="w-1/4 bg-white overflow-hidden shadow-lg sm:rounded-lg mr-4">
                <div class="p-6 text-gray-900">
                    <h3 class="text-xl font-semibold mb-4">Actions</h3>
                    <ul class="list-none p-0">
                        @auth
                            @if(auth()->user()->role == 'user')
                                <li class="mb-4">
                                    <a href="{{ route('subscriptions.create') }}" class="btn btn-primary w-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.94 10.69a8 8 0 1114.12 0l.7.73A10 10 0 102 11.42l.72-.73z"/>
                                            <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                        </svg>
                                        Subscribe to Newsletter
                                    </a>
                                </li>
                            @endif
                            @if(auth()->user()->role == 'admin')
                                <li>
                                    <a href="{{ route('announcements.create') }}" class="btn btn-secondary w-full flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M8 2a4 4 0 00-4 4v1.268a2 2 0 00-.44 1.67L4.305 14h11.39l.745-5.062a2 2 0 00-.44-1.67V6a4 4 0 00-4-4H8zm6 9H6v4h8v-4zM4 4a4 4 0 014-4h4a4 4 0 014 4v1H4V4z" clip-rule="evenodd" />
                                        </svg>
                                        Create Announcement
                                    </a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </div>
            </div>

            <!-- Main Content -->
            <div class="w-3/4 bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-center">
                        <h3 class="text-xl font-semibold mb-4">{{ __("You're logged in!") }}</h3>
                        <p class="text-gray-600">{{ __('Welcome back to your dashboard. You can manage your subscriptions or create new announcements from the sidebar.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
