<aside class="bg-gray-400 h-screen w-[270px] fixed">
    <div class="p-3 text-center">
        <a wire:navigate href="{{ route('home') }}" class="text-white text-2xl font-bold">Waggy</a>
    </div>
    <div class="mt-7">
        <a wire:navigate href="{{ route('admin.dashboard') }}"
            class="block mb-4 py-2 px-4 text-white hover:bg-gray-500">Dashboard</a>
        <a href="" class="block mb-4 py-2 px-4 text-white hover:bg-gray-500">Sales</a>
        <a href="" class="block mb-4 py-2 px-4 text-white hover:bg-gray-500">Products</a>
    </div>
</aside>
