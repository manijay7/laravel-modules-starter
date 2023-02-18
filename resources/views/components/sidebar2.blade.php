@props(['header' => $header])

<div x-show="isSidebar2Open" x-cloak @click="isSidebar2Open = false" class="fixed inset-0 z-10 bg-indigo-800 lg:hidden"
    style="opacity: 0.5" aria-hidden="true">
</div>


<button @click="toggleSidbar2Menu"
    class="p-1 transition-colors duration-200 rounded-md text-primary-lighter bg-primary-50 hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark dark:bg-dark lg:hidden focus:outline-none focus:bg-none">
    <span class="sr-only">Open sidebar2 manu</span>
    <span aria-hidden="true">
        <i class="bx bx-chevron-right text-3xl"></i></i>
    </span>
</button>


<section x-cloak class="
    fixed 
    z-10 
    flex-shrink-0 
    w-64 
    bg-white 
    dark:border-primary-darker 
    dark:bg-darker 
    lg:static 
    lg:transform-none 
    lg:opacity-100 
    lg:block
    "
    :class="{'translate-x-0 ease-in opacity-100':isSidebar2Open === true, '-translate-x-full ease-out opacity-0': isSidebar2Open === false}">
    <div class="flex flex-col h-screen">



        <!-- Panel header -->
        <div
            class="flex justify-between flex-shrink-0 items-center border-b dark:border-primary-darker dark:shadow-md ">
            {{$header}}
            <!-- Mobile menu button -->
            <button @click="isSidebar2Open = false"
                class="p-1 transition-colors duration-300 rounded-md text-primary-lighter  hover:text-primary hover:bg-primary-100 dark:hover:text-light dark:hover:bg-primary-dark  lg:hidden focus:outline-none focus:ring">
                <span class="sr-only">Close sidebar</span>
                <i class='bx bx-x'></i>

            </button>


        </div>

        <!-- Panel content -->
        <div class="flex-1 pt-4 overflow-y-hidden hover:overflow-y-auto">
            <div class="space-y-4">
                {{$slot}}
            </div>
        </div>
    </div>
</section>