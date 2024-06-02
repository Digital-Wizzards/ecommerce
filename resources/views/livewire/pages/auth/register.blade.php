<div>
    <div class="h-[80vh] flex justify-center items-center">
        <form action="" class="w-[600px]">
            <div class="mb-5 w-full">
                <label for="">Name <b>*</b></label>
                <input type="name" class="border block rounded py-2 px-3 w-full">
            </div>
            <div class="mb-5 w-full">
                <label for="">Email <b>*</b></label>
                <input type="email" class="border block rounded py-2 px-3 w-full">
            </div>
            <div class="mb-5 w-full">
                <label for="">Password <b>*</b></label>
                <input type="password" class="border block rounded py-2 px-3 w-full">
            </div>
            <div class="mb-5 w-full">
                <label for="">Confirm Password <b>*</b></label>
                <input type="password" class="border block rounded py-2 px-3 w-full">
            </div>
            <button class="bg-blue-700 px-4 py-2 rounded w-full text-white fold-bold">Register</button>
            <div class="mt-5 text-center">
                <span>Already Registered? </span><a wire:navigate href="{{ route('login') }}"
                    class="text-blue-600">Login</a>
            </div>
        </form>
    </div>
</div>
