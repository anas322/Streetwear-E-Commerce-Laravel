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

        <div class="flex lg:flex-row flex-col justify-start gap-4 mb-8">
            <div class="lg:basis-3/5 basis-full">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Product
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Price
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Quantity
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="p-4 w-20">
                                        <img src="{{ asset('/storage/' . $item->product->productImages[0]->image) }}"
                                            alt="Apple Watch">
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                        {{ $item->product->name }} -
                                        @foreach ($item->productSkuValues as $skuValue)
                                            <span>
                                                {{ $skuValue->optionValue->name }}
                                            </span>

                                            @if ($loop->remaining > 0)
                                                \
                                            @endif
                                        @endforeach
                                    </td>
                                    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
                                        ${{ $item->pivot->price }}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $item->pivot->quantity }}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


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
                        @if (auth()->user()->address)
                            <div class="px-3 space-y-4 py-4">
                                <p class="font-roboto font-semibold text-gray-500 ">
                                    {{ auth()->user()->address->first_name }} {{ auth()->user()->address->last_name }}
                                </p>
                                <p class="font-roboto font-semibold text-gray-500 ">
                                    {{ auth()->user()->address->address_line_1 }} </p>
                                <p class="font-roboto font-semibold text-gray-500 ">
                                    {{ auth()->user()->address->country }} {{ auth()->user()->address->city }}
                                    {{ auth()->user()->address->region }} </p>
                            </div>
                        @endif
                    </div>
                </div>

            </div>

            <div class="lg:basis-2/5 basis-full ">

                <livewire:profile-card />

            </div>
        </div>
    </div>

</x-app-layout>
