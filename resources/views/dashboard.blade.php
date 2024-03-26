<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-center text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __("Progress Reciting Qur'an") }}
        </h2>
    </x-slot>
    <div class="py-8 px-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-6 text-gray-900 dark:text-gray-100">

                    <a class="bg-cyan-800 hover:bg-cyan-700 active:bg-cyan-900 py-2 px-4 rounded text-white block mb-4 w-fit" href="{{ route('recite.create') }}">
                        {{ 'Add Progress' }}
                    </a>

                    <table class="table-auto w-full border-2 text-white">
                        <thead>
                        <tr class="bg-cyan-900">
                            <th class="border-2">Juz</th>
                            <th class="border-2">Juz Remaining</th>
                            <th class="border-2">Page</th>
                            <th class="border-2">Description</th>
                            <th class="border-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($recites as $recite)
                            <tr>
                                <td class="border-2 text-center">{{ $recite->juz }}</td>
                                <td class="border-2 text-center">{{ $recite->juz_remaining }}</td>
                                <td class="border-2 text-center">{{ $recite->page }}</td>
                                <td class="border-2 px-2">{{ $recite->description }}</td>
                                <td class="border-2">
                                    <form action="{{ route('recite.destroy', $recite->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-800 hover:bg-red-700 active:bg-red-900 py-2 px-4 rounded text-white m-3">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
