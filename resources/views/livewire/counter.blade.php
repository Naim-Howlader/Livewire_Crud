<div class="">
    <h2 class="text-center py-5 text-2xl">{{ $title }}</h2>
    <p>{{ $description }}</p>

    {{-- <input wire:model.blur="description" type="text"> --}}
    <div class="flex justify-center py-5 ">
        <form wire:submit="createUser" action="" class="border py-10 px-20 bg-gray-200 rounded-lg">
            @if (session('success'))
            <div class="flex justify-center">
                <div class="py-3 px-3 bg-green-500 text-white rounded w-[300px]">{{ session('success') }}</div>
            </div>
            @endif
            <div>
                <input class="border w-[250px] py-2 border-black px-2 rounded-md my-2" wire:model.live="name" type="text" placeholder="Enter Your Name">
                @error('name')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input class="border w-[250px] py-2 border-black px-2 rounded-md my-2" wire:model.live="email" type="email" placeholder="Enter Your Email">
                @error('email')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <input class="border w-[250px] py-2 border-black px-2 rounded-md my-2" wire:model.live="password" type="password" placeholder="Enter Your Password">
                @error('password')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-400 py-2 px-4 text-white rounded-lg">Create</button>
        </form>
    </div>

    <div class="flex justify-center mb-10">
        <div class="bg-gray-200 px-20 py-10 rounded-lg max-w-[500px]">
            <p>Total Users : {{ count($users) }}</p>
            <h2>User List </h2>
            @foreach ($users as $user)
                <li>Name : {{ $user->name }}</li>
            @endforeach
        </div>
    </div>
    {{ $users->links(data:['scrollTo'=>false]) }}
</div>
