<x-app-layout>
    <div class="container mx-auto px-4">

        <header class="py-24">
            <h1 class="font-bold text-7xl block font-roboto pb-8 text-gray-800">Your orders</h1>
            <span class="text-gray-500 font-medium text-lg">Your orders in one place.</span>
        </header>
    
        
        <div class="flex lg:flex-row flex-col justify-center gap-4 mb-8">
            <div class="lg:basis-3/5 basis-full">
                
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Order #
                                </th>
                                <th scope="col" class="py-3 px-6">
                                   Date
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Total
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Status
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($orders as $order)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        # {{ $order->id  }}
                                    </th>
                                    <td class="py-4 px-6">
                                        {{ $order->created_at->calendar(); }}
                                    </td>
                                    <td class="py-4 px-6">
                                       ${{ $order->total_price }}
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="py-1 px-2 bg-green-100 text-green-800 rounded-lg">
                                            {{ $order->status }}
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right flex">
                                        <form action="{{ route('orders.show', $order ) }}">
                                            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                                <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                    View
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>

            <div class="lg:basis-2/5 basis-full ">
                
                <livewire:profile-card />

            </div>
        </div>
    </div>

</x-app-layout>
