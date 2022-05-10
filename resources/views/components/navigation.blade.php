<nav class="w-11/12 py-4 font-bungee">
    <div class="flex justify-between items-center ">
        <div class="text-left hidden lg:block   items-center ">
            <a href="#" class="uppercase leading-5 block mt-4 mr-4
               lg:inline-block lg:mt-0 border-solid border-b-4
               border-transparent hover:border-blue-450 cursor-pointer
               border-solid border-b-4 border-blue-450 font-bungee text-gray-850">The Sofa</a>
            <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block  text-gray-850 ">Reviews</a>
            <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block  text-gray-850">About Us</a>
        </div>
        <div class="text-center lg:w-auto  items-center w-2/3">
            <img src="https://helixsleep-code-challenge.s3.amazonaws.com/logo.svg" alt="all-day-logo">
        </div>
        <div class="text-right  items-center lg:block hidden  justify-items-end ">
            <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block  text-gray-850">Showroom</a>
            <a href="#" class="uppercase leading-5 block mt-4 mr-4 lg:inline-block  text-gray-850">Swatches</a>
        </div>

        <div class="items-center flex lg:hidden block">
            <button type="button" @click="open = !open" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="open" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
                </svg>
            </button>
        </div>
    </div>
    <div :class="{'px-2 pb-4 flex lg:hidden block flex flex-col text-center':true,'hidden':!open,'block':open}">
        <a href="#" class="sm_nav_item active">The sofa</a>
        <a href="#" class="sm_nav_item">Review</a>
        <a href="#" class="sm_nav_item">About us</a>
        <a href="#" class="sm_nav_item">Showroom</a>
        <a href="#" class="sm_nav_item">Swatches</a>
    </div>
</nav>