<div class="wow fadeInUp xl:basis-1/3 basis-1/2 md:pl-4 p-2 md:p-0">
    <div class="image-wrapper relative ">
        <div class="inner-image-wrapper relative">
            <a href="#" class="block relative overflow-hidden" >
                <div class="relative pt-[150%]">
                    <img class="inline-block object-contain object-center absolute top-0 left-0 h-full w-full transition-all duration-700"
                        src="{{$src1}}" />
                    <img class="inline-block object-contain object-center absolute top-0 left-0 h-full w-full transition-opacity duration-700 opacity-0 hover:opacity-100"
                        src="{{$src2}}" />
                </div>
            </a>
            <span
                class="absolute top-4 left-4 uppercase py-1 px-3.5 font-roboto bg-red-400 text-white text-sm">HOT</span>
            <span
                class="expand absolute top-4 right-4 px-2 py-2 rounded-full bg-white opacity-0 transition-opacity duration-700 hover:cursor-pointer hover:bg-gray-50"
                data-tooltip-target="tooltip-left" data-tooltip-placement="left">
                <button type="button" data-modal-toggle="defaultModal">
                    <x-svgs.expand class="w-6 h-6 inline-block" />
                </button>
                <div id="tooltip-left" role="tooltip"
                    class="inline-block absolute invisible font-light z-10 py-2 px-3 whitespace-nowrap text-sm text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                    quick view
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </span>
        </div>
        <div class="space-y-3 my-4 ">
            <p class="font-normal">THE EVERYDAY HOODIE FOR HIM - MINT GREEN</p>
            <p class="font-semibold">LE 680.00</p>
        </div>
    </div>
</div>
