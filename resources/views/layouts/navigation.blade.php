<div class="h-screen bg-jumbo-home bg-cover mb-10">
    <nav x-data="{ open: false }" class="bg-transparent">
        <!-- Primary Navigation Menu -->
        <div class="max-w-3/4 mx-auto px-4 sm:px-6 lg:px-8 h-24 flex items-center bg-transparent">
            <div class="flex justify-between">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                        </a>
                    </div>
    
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex items-center">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link >
                            {{ __('Restaurants') }}
                        </x-nav-link>
                        <x-nav-link >
                            {{ __('About Us') }}
                        </x-nav-link>
                        <x-dropdown-link href="{{ url('/dashboard') }}" :active="request()->routeIs('dashboard')">
                                    {{ __('Dashboard') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                                @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                        <x-nav-link >
                        @if (Route::has('login'))
                            <div class="hidden absolute top-0 right-0 px-6 sm:block">
                                @auth
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-yellow font-semibold"><p>Log in<i class="fas fa-sign-in-alt pl-2"></i></p></a>
    
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-sm text-yellow font-semibold underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
    
                        </x-nav-link>
                    </div>
                </div>
    
                <!-- Settings Dropdown -->
                @if (Auth::check())
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center text-sm font-medium text-yellow hover:text-yellow hover:border-gray-300 focus:outline-none focus:text-orange focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
    
                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                                <x-dropdown-link href="{{ url('/dashboard') }}">
                                    {{ __('Dashboard') }}
                                </x-dropdown-link>
    
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endif
    
                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>
    
            <!-- Responsive Settings Options -->
    
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    @if (Auth::check())
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    @endif
                </div>
    
                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    
    </nav>
    {{-- jumbo content --}}
    <div class="w-full h-full">
        <div class="mt-44 ml-10 lg:ml-96 text-white text-7xl">
            <h1>Choose it</h1>
            <h1>Click it</h1>
            <h1>Eat it</h1>
        </div>
    </div>
</div>


