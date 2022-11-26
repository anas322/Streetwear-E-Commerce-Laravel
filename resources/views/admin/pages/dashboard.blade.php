<x-admin.app-layout>
    <div>
        <h1 class="font-roboto font-semibold text-2xl py-4 text-gray-800">E-commerce</h1>

        <div class="flex flex-wrap xl:flex-nowrap justify-between gap-4">
            @for ($i = 0; $i < 4; $i++) <div
                class="xl:basis-1/5 md:basis-1/3 basis-full flex-1 min-w-[15rem] bg-white p-4 rounded-md shadow-sm">
                <div class="card-header flex justify-between items-start">
                    <div class="space-y-4">
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">CLIENTS</h2>
                        <span class="block font-bold text-lg">6,328</span>
                    </div>

                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 text-[#00b8c5] transition duration-75 dark:text-gray-400 group-hover:dark:text-gray-400 dark:group-hover:text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </div>
                </div>

                <hr class="my-3">

                <div class="card-footer flex justify-between">
                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">TODAY CLIENTS</h2>
                        <span class="block font-bold text-lg">57</span>
                    </div>

                    <div>
                        <h2 class="font-roboto text-xs tracking-wide font-light text-gray-400">MONTHLY CLIENTS</h2>
                        <span class="block font-bold text-lg">681</span>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>


    
</x-admin.app-layout>
