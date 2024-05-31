<div class="grid grid-cols-5 py-7 px-4 gap-y-8">
    @foreach (range(0, 9) as $index)
        <div class="mx-auto">
            <div class="bg-[#EEEBE6] p-3 rounded-lg h-[200px] w-[200px]">
                <img class="w-full h-full object-cover object-top" src="{{ asset('images/dog.png') }}" alt="Dog">
            </div>

            <div class="mt-5 text-2xl">
                Grey hoodie
            </div>

            <div class="mt-2">
                <i class="fa-solid fa-star text-[#926838]"></i>
                <i class="fa-solid fa-star text-[#926838]"></i>
                <i class="fa-solid fa-star text-[#926838]"></i>
                <i class="fa-solid fa-star text-[#926838]"></i>
                <i class="fa-solid fa-star text-[#926838]"></i>
                <span>5.0</span>
            </div>

            <div class="mt-2">
                $18.00
            </div>

            <div class="mt-3">
                <button class="border px-5 py-3 rounded">Add to Cart</button>
            </div>
        </div>
    @endforeach
</div>
