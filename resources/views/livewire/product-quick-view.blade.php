  <!-- Main modal -->
  <div wire:click.self="$emit('closeModal')"
      class="flex justify-center items-center bg-black/30 overflow-y-auto overflow-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-screen">
      <div class="relative w-full max-w-7xl md:h-5/6 h-auto" wire:ignore>
          <!-- Modal content -->
          <div class="mt-[31rem] md:mt-0 relative bg-white rounded-sm shadow dark:bg-gray-700 h-full">
              <!-- Modal header -->
              <div class="absolute top-4 right-4">
                  <button type="button" wire:click="$emit('closeModal')"
                      class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg aria-hidden="true" class="w-5 h-5 " fill="currentColor" viewBox="0 0 20 20"
                          xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <div class="h-full md:block flex flex-col">

                  <div class="p-6  md:w-1/2 w-full md:h-full h-[49rem] md:float-left">
                      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                          class="w-full h-4/5 mx-auto swiper product-view-carousel">
                          <div class="swiper-wrapper">

                              @foreach ($product->productImages as $productImage)
                              <div class="swiper-slide flex justify-center items-center">
                                  <img src="{{ asset('/storage/'.$productImage->image) }}"
                                      class="object-contain block w-full h-full" />
                              </div>
                              @endforeach

                          </div>
                          <div class="swiper-button-next !text-gray-500"></div>
                          <div class="swiper-button-prev !text-gray-500"></div>
                      </div>
                      <div thumbsSlider="" class="w-full h-1/5 py-3 mx-auto swiper product-view !pt-4">
                          <div class="swiper-wrapper">

                              @foreach ($product->productImages as $productImage)
                              <div class="swiper-slide flex justify-center items-center ho hover:cursor-pointer">
                                  <img src="{{ asset('/storage/'.$productImage->image) }}"
                                      class="object-contain block h-full w-full" />
                              </div>
                              @endforeach

                          </div>
                      </div>
                  </div>
                  <div class="p-6  md:w-1/2 w-full h-full md:float-right">
                      <div class="flex flex-col justify-start gap-y-12">
                          <h1 class="text-3xl font-bold ">{{ $product->name }}</h1>
                          <span class="block text-2xl font-medium">LE
                              {{ number_format($product->price,2,'.','') }}</span>

                          <div>
                              <label for="large"
                                  class="block mb-2 text-xl font-bold text-gray-900 dark:text-white uppercase">size</label>
                              <select id="large"
                                  class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-sm dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
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

                          <div>
                              <span class="block text-xl font-bold pb-4"> Quantity </span>

                              <div class="flex">
                                  <input type="number" id="phone" autocomplete="off" min="1" value="1"
                                      class=" basis-1/5 px-3 h-12 focus:ring-0 focus:border-gray-300 border-gray-300 text-gray-900 text-lg block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                      required>
                                  <button type="button"
                                      class="hover:text-white hover:bg-[#24292F] border border-[#24292F] text-black focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium text-sm px-5 h-12 w-full text-center inline-flex items-center justify-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30  mb-2 transition duration-500">
                                      <svg aria-hidden="true" class="mr-2 -ml-1 w-5 h-5" fill="currentColor"
                                          viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                          <path
                                              d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                          </path>
                                      </svg>
                                      <span class="md:text-lg text-base font-medium uppercase ">add to cart</span>
                                  </button>
                              </div>

                              <button type="button"
                                  class="text-white bg-[#24292F] hover:bg-[#24292F]/90 focus:ring-4 focus:outline-none focus:ring-[#24292F]/50 font-medium text-sm px-5 h-12 w-full text-center inline-flex items-center justify-center dark:focus:ring-gray-500 dark:hover:bg-[#050708]/30 mr-2 mb-2 transition">
                                  <span class="md:text-lg text-base font-medium uppercase">buy now</span>
                              </button>
                          </div>


                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
