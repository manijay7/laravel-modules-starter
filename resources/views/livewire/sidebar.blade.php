<!-- Sidebar -->
<aside class="
    absolute 
    inset-0 
    z-10 
    w-64 
    h-screen 
    border-r 
    transform duration-300  
    lg:relative 
    lg:transform-none 
    lg:opacity-100 
    lg:block
    bg-white 
    dark:border-primary-darker 
    dark:bg-darker"
    :class="{'translate-x-0 ease-in opacity-100':isSidebarOpen === true, '-translate-x-full ease-out opacity-0': isSidebarOpen === false}">
    <div class="flex flex-col h-full">


        <div class="flex justify-between items-center border-b dark:border-primary-darker dark:shadow-md  h-14">

            <div class="flex items-center justify-start p-2 ">

                <!-- circle logo -->
                <div
                    class="h-10 w-10 rounded-full overflow-hidden mr-2 grid place-items-center  bg-primary-lighter dark:text-primary-darker font-bold">
                    {{config('app.short_name')}}
                </div>

                <!-- logo text -->
                <a href="#"
                    class="inline-block text-2xl font-bold tracking-wider uppercase text-primary-dark dark:text-light">
                    Test
                </a>

            </div>
            <!-- Mobile menu button -->
            <button @click="isSidebarOpen = false"
                class="p-1 transition-colors duration-300 rounded-md text-primary-lighter  hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark  lg:hidden focus:outline-none focus:ring">
                <span class="sr-only">Close sidebar</span>
                <i class='bx bx-x'></i>

            </button>
        </div>

        <nav aria-label="Main" class="flex-1 px-2 py-4 space-y-2 overflow-y-hidden hover:overflow-y-auto">
            {{-- <x-nav-link route="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <x-slot name="leftIcon"><i class='bx bx-home-alt-2 text-xl'></i></x-slot>
                Dashboard
            </x-nav-link>

            <x-nav-link route="{{ route('dashboard-2') }}" :active="request()->routeIs('layout-2')">
                <x-slot name="leftIcon"><i class='bx bx-home-alt-2 text-xl'></i></x-slot>
                Dashboard 2
            </x-nav-link> --}}

            <x-nav-linki route="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                <x-slot name="leftIcon"><i class='bx bx-home-alt-2 text-xl'></i></x-slot>
                Dashboard
            </x-nav-linki>

            <x-nav-linki route="{{ route('dashboard-2') }}" :active="request()->routeIs('dashboard-2')">
                <x-slot name="leftIcon"><i class='bx bx-home-alt-2 text-xl'></i></x-slot>
                Dashboard 2
            </x-nav-linki>


            <div x-data="{ isActive: false, open: false}">
                <!-- active & hover classes 'bg-primary-100 dark:bg-primary' -->
                <a href="#" @click="$event.preventDefault(); open = !open"
                    class="flex items-center p-2 text-gray-500 transition-colors rounded-md dark:text-light hover:bg-primary-100 dark:hover:bg-primary"
                    :class="{'bg-primary-100 dark:bg-primary': isActive || open}" role="button" aria-haspopup="true"
                    :aria-expanded="(open || isActive) ? 'true' : 'false'">
                    <span aria-hidden="true">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </span>
                    <span class="ml-2 text-sm"> Dashboards </span>
                    <span class="ml-auto" aria-hidden="true">
                        <!-- active class 'rotate-180' -->
                        <svg class="w-4 h-4 transition-transform transform" :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </span>
                </a>
                <div role="menu" x-show="open" class="mt-2 space-y-2 px-7" aria-label="Dashboards">
                    <!-- active & hover classes 'text-gray-700 dark:text-light' -->
                    <!-- inActive classes 'text-gray-400 dark:text-gray-400' -->
                    <x-nav-linki route="{{ route('dashboard-2') }}" :active="request()->routeIs('dashboard-2')">
                        Dashboard 2
                    </x-nav-linki>
                    <a href="#" role="menuitem"
                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                        Project Mangement (soon)
                    </a>
                    <a href="#" role="menuitem"
                        class="block p-2 text-sm text-gray-400 transition-colors duration-200 rounded-md dark:hover:text-light hover:text-gray-700">
                        E-Commerce (soon)
                    </a>
                </div>
            </div>


        </nav>

        <!-- Sidebar footer -->
        <div class="flex-shrink-0 px-2 py-4 space-y-2">
            <button @click="openSettingsPanel" type="button"
                class="flex items-center justify-center w-full px-4 py-2 text-sm text-white rounded-md bg-primary hover:bg-primary-dark focus:outline-none focus:ring focus:ring-primary-dark focus:ring-offset-1 focus:ring-offset-white dark:focus:ring-offset-dark">
                <span aria-hidden="true">
                    <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                    </svg>
                </span>

                <span>Customize</span>
            </button>
        </div>
    </div>
</aside>