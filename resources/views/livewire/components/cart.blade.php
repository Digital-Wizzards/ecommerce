<div x-cloak x-show="cartOpen" @click.outside="cartOpen = false"
    class="fixed right-0 top-0 z-10 w-[400px] bg-[#EEEBE6] h-screen overflow-y-auto px-4 ">
    <div class="text-center py-4">
        <i class="fa-solid fa-xmark" @click.prevent="cartOpen=false"></i>
    </div>
    <div class="flex justify-between">
        <strong>Your Cart</strong>
        <strong>3</strong>
    </div>
    <div class="mt-4">
        <div class="flex justify-between items-center border border-gray-300 py-2 px-3 text-gray-500">
            <div>
                <div>Grey Hoodie</div>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div>
                $12
            </div>
        </div>
        <div class="flex justify-between items-center border border-gray-300 py-2 px-3 text-gray-500">
            <div>
                <div>Grey Hoodie</div>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div>
                $12
            </div>
        </div>
        <div class="flex justify-between items-center border border-gray-300 py-2 px-3 text-gray-500">
            <div>
                <div>Grey Hoodie</div>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div>
                $12
            </div>
        </div>
        <div class="flex justify-between items-center border border-gray-300 py-2 px-3 text-gray-500">
            <div>
                <div>Grey Hoodie</div>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div>
                $12
            </div>
        </div>
        <div class="flex justify-between items-center border border-gray-300 py-2 px-3 text-gray-500">
            <div>
                <div>Grey Hoodie</div>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div>
                $12
            </div>
        </div>
    </div>
    <div class="mt-4">
        <button class="bg-[#cdab74] rounded text-white font-bold px-4 py-3 border w-full">Checkout</button>
    </div>
</div>
