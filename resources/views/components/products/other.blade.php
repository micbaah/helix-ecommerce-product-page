<div class="lg:order-1 order-3">
    <h2 class="font-bungee text-blue-550 text-4xl leading-10 mb-2 uppercase">The Sofa</h2>
    <p class="font-raleway font-sm text-sm text-gray-950">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac dui interdum, tincidunt velit sit amet.
    </p>
</div>
<div class="pt-3 lg:order-2 order-4">
    <div>
        <div class="flex flex-wrap justify-around text-center">
            <div class="space-y-2 text-center">
                <p class="capitalize text-base leading-5 text-gray-950">pay now</p>
                <p class="text-3xl leading-5 font-raleway font-bold text-red">$1,250</p>
                <p class="leading-none text-sm line-through text-gray-950">$1,450</p>
                <p class="leading-none text-sm text-gray-950">$200 OFF with code</p>
            </div>
            <div class="block border h-24 border-2 bg-white border-white"></div>
            <div class="space-y-2 text-center">
                <p class="text-base leading-5 text-gray-950">Pay as low as</p>
                <p class="text-4xl leading-5 font-raleway font-bold text-red">
                    $25<span class="text-sm font-bold">/month</span>
                </p>
                <p class="leading-none text-sm text-gray-950">with Klarna</p>
                <p class="underline leading-none text-sm text-gray-950">Learn More</p>
            </div>
        </div>
    </div>
    <div>
        <div class="mt-8 mb-2">
            <button href="#" class="header font-bungee flex items-center justify-center uppercase bg-blue-450 px-8 py-3 w-full rounded-md border-transparent text-white font-medium ">
                Add to cart
            </button>
        </div>
    </div>
    <div class="flex flex-grow text-center justify-center mb-10">
        <h2 class="uppercase text-sm font-bungee text-gray-950 border-b-4 border-blue-450 cursor-pointer"> Save design for later</h2>
    </div>
</div>

<div class="block border w-full mb-5 border-2 bg-white border-white lg:order-3 order-2"></div>

<div class="lg:order-4 mb-10 order-1">
    <h2 class="font-bungee text-blue-550 leading-5">1. Choose a fabric</h2>
    <p class="text-base text-gray-850 mb-8">Choose your choice from fabrics to leather</p>
    <div>
        <p class="text-base font-bold text-gray-850 font-raleway ">Fabric Choices</p>
        <div class="flex justify-between space-x-2 md:space-x-4 mt-4">
            <template x-for="(product,index) in products">
                <div @click="fabric=index" :class="{'w-32 max-w-xs text-center cursor-pointer border-2 rounded-t-md rounded-b-lg':true,'border-blue-450':(index===fabric),'border-gray-150':!(index===fabric)}">
                    <img :src='product.src' alt="title" class="object-contain rounded-t-md h-20">
                    <div :class="{'w-full rounded-b ':true,'bg-blue-450':(index===fabric),'bg-gray-600':!(index===fabric)}">
                        <p :class="{'text-sm py-2 ':true,'text-white':(index===fabric)}" x-text="product.name" class="text-white"></p>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>