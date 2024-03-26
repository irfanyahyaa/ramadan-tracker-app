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


                    <form action="{{ route('recite.store') }}" method="POST">
                        @csrf
                        <table class="max-w-sm mx-auto">
                            <tbody>
                            <tr>
                                <td class="px-4 py-2">
                                    <label class="text-white">Juz</label>
                                </td>
                                <td class="px-4 py-2">
                                    <input type="number" name="juz" min="1" max="30" class="w-full border-2 border-white rounded-md p-2 text-black">
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2">
                                    <label class="text-white">Page</label>
                                </td>
                                <td class="px-4 py-2">
                                    <input type="number" name="page" min="1" class="w-full border-2 border-white rounded-md p-2 text-black">
                                </td>
                            </tr>
                            <tr>
                                <td class="px-4 py-2">
                                    <label class="text-white">Description</label>
                                </td>
                                <td class="px-4 py-2">
                                    <textarea name="description" cols="30" rows="5" class="w-full border-2 border-white rounded-md p-2 text-black"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" class="px-4">
                                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 w-full">Submit</button>
                                </td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
