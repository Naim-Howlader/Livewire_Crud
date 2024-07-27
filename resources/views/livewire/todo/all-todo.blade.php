<div>
    <section id="createTodo" class="pt-10">
        <div class="">

        <div class="max-w-xl mx-auto bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
            <div class="w-full bg-blue-500 h-[4px]"></div>
            <div class="px-14 py-8">


            <form class="max-w-md mx-auto pb-10">
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="text" wire:model.live.debounce.500ms="search" id="todo-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 "  />
                </div>
            </form>



            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Todo Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($todos as $todo)
                        <tr class="bg-white border-b ">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                {{ $todo->todo }}
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="pt-5">
                    {{ $todos->links(data: ['scrollTo' => false]) }}
                </div>
            </div>

            </div>
        </div>

        </div>
    </section>
</div>
