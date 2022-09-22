<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in {{ Auth::user()->name }} .
                    <table>
                        <thead>
                            <tr>
                                <th>First name</th>
                                <th>Age</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    {{ Auth::user()->first_name }}
                                </td>
                                <td>
                                    {{ Auth::user()->age }}
                                </td>
                                <td>
                                    {{ Auth::user()->email }}
                                </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
