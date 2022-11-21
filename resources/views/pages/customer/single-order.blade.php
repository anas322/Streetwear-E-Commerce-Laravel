<x-app-layout>
    <div class="container mx-auto px-4">

        <header class="py-24">
            <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">Order #1735 </h1>
            <span class="text-gray-500 font-medium text-lg pb-8 block">Order #1735 was placed on <span class="font-bold">22/06/2013</span>  and is currently <span class="font-bold">Being prepared</span>.</span>

            <span class="text-gray-500 font-medium text-lg block">If you have any questions, please feel free to <a class="underline" href="">contact us</a>, our customer service center is working for you 24/7.</span>
        </header>
    
        
        <div class="flex lg:flex-row flex-col justify-center gap-4 mb-8">
            <div class="lg:basis-3/5 basis-full flex lg:flex-row flex-col gap-8">
                
                <div class=" w-full">
                    <div class="lg:max-w-sm lg:mx-auto w-full shadow-lg rounded-lg">
                        <livewire:order-summary :active="false"/>
                    </div>
                </div>

                <div class="w-full">
                    <div class="lg:max-w-sm lg:mx-auto w-full shadow-lg rounded-lg h-max">
                        <header class="py-4 px-3 bg-gray-100">
                            <span class="font-bold font-roboto text-xl">Invoive Address</span>
                        </header>
                        
                        <div class="px-3 space-y-4 py-4">
                            <p class="font-roboto font-semibold text-gray-500 ">John Brown</p>
                            <p class="font-roboto font-semibold text-gray-500 ">13/25 New Avenue</p>
                            <p class="font-roboto font-semibold text-gray-500 ">New Heaven</p>
                            <p class="font-roboto font-bold text-gray-500 ">Great Britain</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="lg:basis-2/5 basis-full ">
                
                <livewire:profile-card />

            </div>
        </div>
    </div>

</x-app-layout>
