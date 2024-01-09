<div class="z-10 bg-gray-500 bg-opacity-40 overflow-hidden absolute top-0 left-0 bottom-0 right-0 ">
    <form
        class="flex flex-col items-end justify-end gap-8 bg-gray-100 p-8 max-w-[800px] w-full max-h-[800px] h-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"
        action="{{route('rented.car', $car)}}"
        method="get">
        <figure>
            <img src="{{$car['img']}}" alt="">
        </figure>
        <div class="flex flex-col gap-8 w-full">
            <div class="flex items-center justify-center gap-12">
                <div class="flex flex-col gap-2 w-full">
                    <label for="" class="text-lg font-light">First Name</label>
                    <input class="p-3" type="text" placeholder="Enter your first name" required>
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <label for="" class="text-lg font-light">Last Name</label>
                    <input class="p-3" type="text" placeholder="Enter your last name" required>
                </div>
            </div>

            <div class="flex items-center justify-center gap-12">
                <div class="flex flex-col gap-2 w-full"> 
                    <label for="" class="text-lg font-light">Phone number</label>
                    <input class="p-3" type="text" placeholder="Enter your phone number" required>
                </div>
                <div class="flex flex-col gap-2 w-full">
                    <label for="" class="text-lg font-light">Age</label>
                    <input class="p-3" type="number" placeholder="18" required>
                </div>
            </div>

            <div class="flex flex-col gap-2 w-full">
                <label for="" class="text-lg font-light">Email</label>
                <input class="p-3" type="email" placeholder="Enter your email address" required>
            </div>
        </div>
        <button type="submit" class="w-[150px] h-[60px] p-2 bg-yellow-600 text-md font-bold text-white">Rent now!</button>
    </form>
</div>
