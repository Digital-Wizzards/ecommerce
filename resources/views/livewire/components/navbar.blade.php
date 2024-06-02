<div x-data="{ cartOpen: false }">
    <nav class="flex grid-rows-3 justify-around py-3 items-center">
        <div>
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <div>
            <form class="flex">
                <input type="search" placeholder="Search..."
                    class="p-3 border-s-2 border-t-2 border-b-2 rounded-s text-gray-500 focus:outline-none">
                <button
                    class="p-3 px-4 border-t-2 border-b-2 border-r-2 hover:bg-slate-200 transition duration-700 ease-out rounded-r">
                    <i class="fa-solid fa-search"></i>
                </button>
            </form>
        </div>
        <div>
            <div class="flex grid-rows-2 gap-6">
                <div>
                    <div class="text-right">Phone</div>
                    <i>9820000000</i>
                </div>
                <div>
                    <div class="text-right">Email</div>
                    <i>a@a.com</i>
                </div>
            </div>
        </div>
    </nav>
    <hr>
    <nav class="flex grid-rows-3 justify-around py-3 items-center">
        <div>
            <form action="">
                <select name="" id="" class="p-3 rounded">
                    <option value="">Shop by Category</option>
                    <option value="">Clothes</option>
                    <option value="">Foods</option>
                </select>
            </form>
        </div>
        <div class="flex gap-5">
            <a wire:navigate href="{{ route('home') }}">Home</a>
            <a wire:navigate href="{{ route('shop') }}">Shop</a>
            <a wire:navigate href="">Contact</a>
        </div>
        <div class="flex gap-6">
            <a wire:navigate href="{{ route('login') }}">
                <i class="fa-solid fa-user"></i>
            </a>
            <a href="">
                <i class="fa-solid fa-heart"></i>
            </a>
            <a href="" @click.prevent="cartOpen=true">
                <i class="fa-solid fa-cart-shopping"></i>
            </a>
        </div>
    </nav>

    @livewire('components.cart')
</div>
