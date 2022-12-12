<div class="min-h-screen bg-[#0E2238]">
    {{-- aside menu in medium screen and above  --}}
    <aside class="md:block hidden w-64 z-40 min-h-screen" aria-label="Sidebar">
        <div class="overflow-y-auto py-4 rounded dark:bg-gray-800">
            <a href="{{ route('home')}}" class="flex items-center pr-4 pb-8">
                <x-application-logo class="mr-3 h-16 w-16 fill-slate-50" alt="street wear Logo" />
                <span class="self-center text-2xl font-moda font-semibold whitespace-nowrap text-white">Street Wear</span>
            </a>
            <livewire:admin.components.sidebar-content />
        </div>
    </aside>
    
    {{-- aside menu for smaller than medium screen  --}}
    <!-- drawer component -->
    <div id="drawer-navigation"
        class="md:hidden  block fixed z-40 min-h-screen p-4 bg-[#0E2238] overflow-y-auto w-80 dark:bg-gray-800" tabindex="-1"
        aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase dark:text-gray-400">Menu
        </h5>
        <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <livewire:admin.components.sidebar-content />
        </div>
    </div>

</div>
