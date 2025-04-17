<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="post" >

               <input type="text" name='name'><button> create </button></form>
                 <div class="grid gap-4 grid-cols-[repeat(auto-fit,minmax(200px,1fr))]">
             @foreach ($categories as $item)
                 <div class="card text-yellow p-4 shadow rounded-lg">{{$item->name}} this is card</div>
                                @endforeach
                      </div>          </div>
            </div>
        </div>
    </div>
</x-app-layout>
