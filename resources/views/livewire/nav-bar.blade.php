<header class="relative flex-shrink-0 bg-white dark:bg-darker">
    <div class="flex items-center justify-between p-2 border-b dark:border-primary-darker h-14">

        <div class="flex items-center">


            <div>
                <!-- Mobile menu button -->
                <button @click="toggleSidbarMenu"
                    class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark lg:hidden focus:outline-none focus:ring">
                    <span class="sr-only">Open main manu</span>
                    <span aria-hidden="true">
                        <i class="bx bx-menu text-3xl"></i></i>
                    </span>
                </button>


            </div>

            <!-- Brand -->
            <a href="{{ route('dashboard') }}"
                class="inline-block text-2xl font-bold tracking-wider uppercase text-primary-dark dark:text-light">
                Test
            </a>
        </div>


        <nav aria-label="Secondary" class=" space-x-2 flex items-center">

            <!-- Toggle dark theme button -->
            <button aria-hidden="true" class="relative focus:outline-none" x-cloak @click="toggleTheme">
                <div class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-lighter"></div>
                <div class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-150 transform scale-110 rounded-full shadow-sm"
                    :class="{ 'translate-x-0 -translate-y-px  bg-white text-primary-dark': !isDark, 'translate-x-6 text-primary-100 bg-primary-darker': isDark }">
                    <i x-show="!isDark" class="bx bx-moon"></i>
                    <i x-show="isDark" class="bx bx-star"></i>
                </div>
            </button>

            <!-- Notification button -->

            <button
                class="mt-1 relative mx-2 text-primary-lighter  hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark focus:outline-none focus:bg-primary-100 dark:focus:bg-primary-dark focus:ring-primary-darker"
                @click="openNotificationsPanel">
                <i class="bx bx-bell text-xl text-gray-600"></i>
                <span aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"></span>
            </button>


            <!-- User avatar button -->
            <div class="relative" x-cloak x-data="{ open: false }">
                <button @click="open = !open; $nextTick(() => { if(open){ $refs.userMenu.focus() } })" type="button"
                    aria-haspopup="true" :aria-expanded="open ? 'true' : 'false'"
                    class="transition-opacity duration-200 rounded-full dark:opacity-75 dark:hover:opacity-100 focus:outline-none focus:ring dark:focus:opacity-100">
                    <span class="sr-only">User menu</span>
                    <img class="w-10 h-10 rounded-full" src="../img/avatar.jpg" alt="Ahmed Kamel" />
                </button>

                <!-- User dropdown menu -->
                <div x-show="open" x-ref="userMenu" x-transition:enter="transition-all transform ease-out"
                    x-transition:enter-start="translate-y-1/2 opacity-0"
                    x-transition:enter-end="translate-y-0 opacity-100"
                    x-transition:leave="transition-all transform ease-in"
                    x-transition:leave-start="translate-y-0 opacity-100"
                    x-transition:leave-end="translate-y-1/2 opacity-0" @click.away="open = false"
                    @keydown.escape="open = false"
                    class="absolute right-0 w-48 py-1 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                    tabindex="-1" role="menu" aria-orientation="vertical" aria-label="User menu">
                    <x-nav-link route="{{route('profile.show')}}">Profile</x-nav-link>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-nav-link route="{{route('profile.show')}}" href="{{ route('logout') }}"
                            @click.prevent="$root.submit();">Logout</x-nav-link>


                    </form>
                </div>
            </div>
        </nav>


    </div>

</header>