<x-app-layout >



@php
$src1 =
"//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_460x.jpg?v=1665909901
460w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_540x.jpg?v=1665909901
540w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_720x.jpg?v=1665909901
720w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_900x.jpg?v=1665909901
900w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_1080x.jpg?v=1665909901
1080w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_1296x.jpg?v=1665909901
1296w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_1512x.jpg?v=1665909901
1512w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_1728x.jpg?v=1665909901
1728w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131357_66db39f3-dd27-4ea9-9ec2-cf2e5e647fad_2048x.jpg?v=1665909901
2048w";

$src2 ="//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_460x.jpg?v=1665913362 460w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_540x.jpg?v=1665913362 540w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_720x.jpg?v=1665913362 720w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_900x.jpg?v=1665913362 900w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_1080x.jpg?v=1665913362 1080w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_1296x.jpg?v=1665913362 1296w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_1512x.jpg?v=1665913362 1512w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_1728x.jpg?v=1665913362 1728w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131349_2048x.jpg?v=1665913362 2048w";

$src3 =
"//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_460x.jpg?v=1665913362
460w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_540x.jpg?v=1665913362
540w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_720x.jpg?v=1665913362
720w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_900x.jpg?v=1665913362
900w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_1080x.jpg?v=1665913362
1080w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_1296x.jpg?v=1665913362
1296w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_1512x.jpg?v=1665913362
1512w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_1728x.jpg?v=1665913362
1728w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131358_1e1f9af6-ecb7-45fa-80ee-b3912e0db745_2048x.jpg?v=1665913362
2048w";

$src4 =
"//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_460x.jpg?v=1665913362
460w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_540x.jpg?v=1665913362
540w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_720x.jpg?v=1665913362
720w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_900x.jpg?v=1665913362
900w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_1080x.jpg?v=1665913362
1080w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_1296x.jpg?v=1665913362
1296w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_1512x.jpg?v=1665913362
1512w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_1728x.jpg?v=1665913362
1728w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131315_b0b2c75f-e1ab-4cc6-a1f8-835162f668b9_2048x.jpg?v=1665913362
2048w";

$src5 =
"//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_460x.jpg?v=1665913362
460w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_540x.jpg?v=1665913362
540w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_720x.jpg?v=1665913362
720w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_900x.jpg?v=1665913362
900w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_1080x.jpg?v=1665913362
1080w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_1296x.jpg?v=1665913362
1296w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_1512x.jpg?v=1665913362
1512w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_1728x.jpg?v=1665913362
1728w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131330_a7f0461b-b1b4-41ed-8f75-1814445b3550_2048x.jpg?v=1665913362
2048w";

$src6 =
"//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_460x.jpg?v=1665913362
460w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_540x.jpg?v=1665913362
540w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_720x.jpg?v=1665913362
720w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_900x.jpg?v=1665913362
900w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_1080x.jpg?v=1665913362
1080w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_1296x.jpg?v=1665913362
1296w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_1512x.jpg?v=1665913362
1512w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_1728x.jpg?v=1665913362
1728w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131324_4d843eac-b2cd-45b0-ac4f-cd92537ee5c7_2048x.jpg?v=1665913362
2048w";

$src7 =
"//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_460x.jpg?v=1665913362
460w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_540x.jpg?v=1665913362
540w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_720x.jpg?v=1665913362
720w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_900x.jpg?v=1665913362
900w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_1080x.jpg?v=1665913362
1080w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_1296x.jpg?v=1665913362
1296w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_1512x.jpg?v=1665913362
1512w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_1728x.jpg?v=1665913362
1728w,
//cdn.shopify.com/s/files/1/0553/9148/6061/products/OPIOD131325_e4d2f453-f2e0-4d16-9e27-93b70072666f_2048x.jpg?v=1665913362
2048w";
@endphp

<div class="md:h-[94vh] md:block flex flex-col">
    <div class="p-6  md:w-1/2 w-full md:h-full h-[49rem] md:float-left">
        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
            class="w-full h-4/5 mx-auto swiper product-view-carousel">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ $src1 }}" class="object-contain block w-full h-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ $src2 }}" class="object-contain block w-full h-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ $src3 }}" class="object-contain block w-full h-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ $src4 }}" class="object-contain block w-full h-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ $src5 }}" class="object-contain block w-full h-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ $src6 }}" class="object-contain block w-full h-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center">
                    <img src="{{ $src7 }}" class="object-contain block w-full h-full" />
                </div>
            </div>
            <div class="swiper-button-next !text-gray-500"></div>
            <div class="swiper-button-prev !text-gray-500"></div>
        </div>
        <div thumbsSlider="" class="w-full h-1/5 py-3 mx-auto swiper product-view !pt-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center w-48 h-full opacity-40">
                    <img src="{{ $src1 }}" class="object-contain block h-full w-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center w-48 h-full opacity-40">
                    <img src="{{ $src2 }}" class="object-contain block h-full w-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center w-48 h-full opacity-40">
                    <img src="{{ $src3 }}" class="object-contain block h-full w-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center w-48 h-full opacity-40">
                    <img src="{{ $src4 }}" class="object-contain block h-full w-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center w-48 h-full opacity-40">
                    <img src="{{ $src5 }}" class="object-contain block h-full w-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center w-48 h-full opacity-40">
                    <img src="{{ $src6 }}" class="object-contain block h-full w-full" />
                </div>
                <div class="swiper-slide flex justify-center items-center w-48 h-full opacity-40">
                    <img src="{{ $src7 }}" class="object-contain block h-full w-full" />
                </div>
            </div>
        </div>
    </div>
    <div class="p-6  md:w-1/2 w-full h-full md:float-right">
        <div class="flex flex-col justify-start gap-y-12">
            <h1 class="text-3xl font-bold ">Black blouse</h1>
            <span class="block text-2xl font-medium">$40.00</span>

            <div>
                <label for="large"
                    class="block mb-2 text-xl font-bold text-gray-900 dark:text-white uppercase">size</label>
                <select id="large"
                    class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-sm bg-gray-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                    <option selected disabled>Choose a size</option>
                    <option value="M">M</option>
                    <option value="LG">LG</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                </select>
            </div>

            <div>

                <div class="flex flex-wrap gap-4">
                    <label for="large"
                        class="block mb-2 text-xl font-bold text-gray-900 dark:text-white uppercase basis-full">Color</label>
                    <div class="flex items-center mr-4">
                        <input id="red-radio" type="radio" value="" name="colored-radio"
                            class="w-8 h-8 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="red-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Red</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="green-radio" type="radio" value="" name="colored-radio"
                            class="w-8 h-8 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="green-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Green</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input checked id="purple-radio" type="radio" value="" name="colored-radio"
                            class="w-8 h-8 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="purple-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Purple</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="teal-radio" type="radio" value="" name="colored-radio"
                            class="w-8 h-8 text-teal-600 bg-gray-100 border-gray-300 focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="teal-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Teal</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="yellow-radio" type="radio" value="" name="colored-radio"
                            class="w-8 h-8 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="yellow-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yellow</label>
                    </div>
                    <div class="flex items-center mr-4">
                        <input id="orange-radio" type="radio" value="" name="colored-radio"
                            class="w-8 h-8 text-orange-500 bg-gray-100 border-gray-300 focus:ring-orange-500 dark:focus:ring-orange-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="orange-radio"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Orange</label>
                    </div>
                </div>

            </div>

            <div class="space-y-4">
                <span class="block text-xl font-bold"> Quantity </span>

                <div class="flex">
                    <input type="number" id="phone" autocomplete="off" min="1" value="1"
                        class=" basis-1/5 px-3 h-12 bg-gray-50 border border-gray-300 text-gray-900 text-lg block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        required>
                    <button type="button"
                        class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium text-sm px-5 h-12 w-full text-center inline-flex items-center justify-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2">
                        <svg aria-hidden="true" class="mr-2 -ml-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                            </path>
                        </svg>
                        <span class="md:text-lg text-base font-medium uppercase">add to cart</span>
                    </button>
                </div>
            </div>


        </div>
    </div>
</div>
</x-app-layout>