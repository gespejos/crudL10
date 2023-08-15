@php
    $databaseCount = \App\Models\Database::count();
    $informacionCount = \App\Models\Informacion::count();
    $userCount = \App\Models\User::count();
@endphp
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Inicio') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <div class="bg-white py-24 sm:py-32">
                        <div class="mx-auto max-w-7xl px-6 lg:px-8">
                            <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-3">
                                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600">Sistemas</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $informacionCount}}</dd>
                                </div>
                                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600">Base de Datos</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $databaseCount}}</dd>
                                </div>
                                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                                    <dt class="text-base leading-7 text-gray-600">Usuarios</dt>
                                    <dd class="order-first text-3xl font-semibold tracking-tight text-gray-900 sm:text-5xl">{{ $userCount}}</dd>
                                </div>
                            </dl>
                        </div>
                    </div>


                    <ul role="list" class="divide-y divide-gray-100">
                        <li class="flex justify-between gap-x-6 py-5">
                            <div class="flex gap-x-4">
                                <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="min-w-0 flex-auto">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ Auth::user()->name }}</p>
                                    <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">CEO</p>
                                <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
                            </div>
                        </li>
                    </ul>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
