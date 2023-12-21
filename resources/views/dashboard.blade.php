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
                    <div class="flex flex-row">
                        <div class="basis-1/4 mx-auto bg-blue-700">
                            <form method="POST" action="{{route('messages.store')}}">
                                <div class="mb-6">
                                    <input name="content" type="text" id="large-input" class="block w-full p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Submit</button>
                                    <input type="hidden" name="from" value="1">
                                    <input type="hidden" name="to" value="2">
                                </div>
                                @method('POST')
                                @csrf
                            </form>
                        </div>
                        <div class="basis-1/1 mx-auto">
                        @foreach($messages->sortByDesc('created_at') as $message)
                                <div class="border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                                    <p class="font-bold">{{\App\Models\User::find($message->from)->name}} {{\App\Models\User::find($message->from)->created_at}}</p>
                                    <p>{{$message->content}}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
