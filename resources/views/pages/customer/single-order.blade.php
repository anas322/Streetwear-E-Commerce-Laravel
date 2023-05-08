<x-app-layout>
    <div class="container mx-auto px-4">

        <header class="py-24">
            <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">Order #{{ $order->id }} </h1>
            <span class="text-gray-500 font-medium text-xl pb-8 block">Order #{{ $order->id }} was placed on <span
                    class="font-bold">{{ $order->created_at->calendar() }}</span> and is currently <span
                    class="font-bold">{{ $order->status }}</span>.</span>

            <span class="text-gray-500 font-medium text-lg block">If you have any questions, please feel free to <a
                    class="underline" href="{{ route('contact') }}">contact us</a>, our customer service center is working
                for you 24/7.</span>
        </header>


        <div class="flex lg:flex-row flex-col justify-center gap-4 mb-8">
            <div class="lg:basis-3/5 basis-full flex lg:flex-row flex-col gap-8">

                <div class=" w-full">
                    <div class="lg:max-w-sm lg:mx-auto w-full shadow-lg rounded-lg">
                        <livewire:order-summary :order="$order" />
                    </div>
                </div>

                <div class="w-full">
                    <div class="lg:max-w-sm lg:mx-auto w-full shadow-lg rounded-lg h-max">
                        <header class="py-4 px-3 bg-gray-100">
                            <span class="font-bold font-roboto text-xl">Invoive Address</span>
                        </header>

                        <div class="px-3 space-y-4 py-4">
                            <p class="font-roboto font-semibold text-gray-500 ">
                                {{ auth()->user()->address->first_name }} {{ auth()->user()->address->last_name }} </p>
                            <p class="font-roboto font-semibold text-gray-500 ">
                                {{ auth()->user()->address->address_line_1 }} </p>
                            <p class="font-roboto font-semibold text-gray-500 ">
                                {{ auth()->user()->address->country }} {{ auth()->user()->address->city }}
                                {{ auth()->user()->address->region }} </p>
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
