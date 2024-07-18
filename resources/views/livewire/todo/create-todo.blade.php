<div>
    <section id="createTodo">
        <div class="">

        <form class="max-w-xl mx-auto bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
            <div class="w-full bg-blue-500 h-[4px]"></div>
            <div class="flex justify-center pt-2 h-[60px]">
                @if (session('success'))
                <div class="p-4  text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                    <span class="font-medium">{{ session('success') }}
                  </div>
                @endif
            </div>
            <div class="px-14 pb-14">
                <div class="mb-5">
                    <label for="todo" class="block mb-2 text-xl font-medium text-gray-900 dark:text-white">Todo Name</label>
                    <input type="text" wire:model="todo" id="toto" name="todo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "/>
                    @error('todo')
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    @enderror
                    </div>


                    <button type="submit" wire:click.prevent="create" class="text-white bg-blue-700  font-medium rounded-md text-sm w-full sm:w-auto px-5 py-2.5 text-center">Create</button>
            </div>

        </form>

        </div>
    </section>
</div>
