<nav x-data="{ open: false }" class="bg-white">
    <!-- Primary Navigation Menu -->
    <div class="border-b border-coral ">
        <div class="flex items-center">
            
            <div class='pl-6 py-2 flex-1 font-bold text-2xl flex items-baseline gap-2 bg-coral-500 text-white'>
                <div class=''>
                    <i class="fa-solid fa-utensils text-coral-300"></i> {{ env("APP_NAME") }}
                </div>
                <div class='text-coral-200 text-sm'>
                    {{ env("APP_SUBNAME") }}
                </div>
                <div class='text-black text-xs'>
                    <div class='sm:hidden'>
                        xs
                    </div>
                    <div class='hidden sm:block md:hidden'>
                        sm
                    </div>
                    <div class='hidden md:block lg:hidden'>
                        md
                    </div>
                    <div class='hidden lg:block xl:hidden'>
                        lg
                    </div>
                    <div class='hidden xl:block 2xl:hidden'>
                        xl
                    </div>
                </div>
            </div>
            <div class='self-stretch bg-coral-500 w-5 angle'>
            </div>

            <div class="flex-none hidden md:block">
                <!-- Navigation Links -->
                <div class="p-6 py-2 active:text-white flex gap-1">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('taskboard')" :active="request()->routeIs('taskboard')">
                        {{ __('Taskboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('receipe.index')" :active="request()->routeIs('receipe.*')">
                        {{ __('Recette') }}
                    </x-nav-link>
                    <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.*')">
                        {{ __('Users') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden" x-cloak>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="">
                            @auth
                                <div>{{ Auth::user()->name }}</div>    
                            @else
                                <div>Guest</div>
                            @endauth

                            <div class="">
                                <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>


                    @auth
                        <x-slot name="content">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    @else
                        <x-slot name="content">
                            <a href="{{ route("login") }}">Login</a>
                        </x-slot>
                    @endauth
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="px-4 md:px-0 md:pr-6 py-2 flex-none flex justify-between items-center">
                <button @click="open = ! open" class="">
                    <svg class="h-6 w-6 text-coral" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="" x-cloak>
        <div class="md:hidden">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('taskboard')" :active="request()->routeIs('dashboard')">
                {{ __('Taskboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('receipe.index')" :active="request()->routeIs('dashboard')">
                {{ __('Recette') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('dashboard')">
                {{ __('Users') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="" x-cloak>
            @auth
                <div class="">
                    <div class="">{{ Auth::user()->name }}</div>
                    <div class="">{{ Auth::user()->email }}</div>
                </div>  
            @else
                <div class="">
                    <div class="">Name</div>
                    <div class="">Mail</div>
                </div>  
            @endauth
            

            <div class="">
                @auth
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @else
                    <a href="{{ route("login") }}">Login</a>
                @endif
            </div>
        </div>
    </div>
</nav>
