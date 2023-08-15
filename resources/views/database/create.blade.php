<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nuevo registro') }}
        </h2>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900">

                    <form action="{{ route('database.store') }}" method="POST">
                        @csrf

                        <div class="space-y-12">
                            <div class="border-b border-gray-900/10 pb-12">
                                <h2 class="text-base font-semibold leading-7 text-gray-900">Base de datos</h2>
                                <p class="mt-1 text-sm leading-6 text-gray-600">Datos para almacenar en el registro de base de datos</p>

                                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-4">
                                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                                <input type="text" name="nombre" id="nombre" autocomplete="" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="siscoembex">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sm:col-span-4">
                                        <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Servidor</label>
                                        <div class="mt-2">
                                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm"></span>
                                                <input type="text" name="servidor" id="servidor" autocomplete="" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="192.168.20.40">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="estado" value="1" class="form-radio text-indigo-600 h-4 w-4">
                                            <span class="ml-2 text-sm text-gray-900">Activo</span>
                                        </label>
                                        <label class="inline-flex items-center">
                                            <input type="radio" name="estado" value="0" class="form-radio text-indigo-600 h-4 w-4">
                                            <span class="ml-2 text-sm text-gray-900">Inactivo</span>
                                        </label>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Gestor</label>
                                        <div class="mt-2">
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="gestor" value="PostgreSql" class="form-radio text-indigo-600 h-4 w-4">
                                                <span class="ml-2 text-sm text-gray-900">PostgreSql</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="gestor" value="MySql" class="form-radio text-indigo-600 h-4 w-4">
                                                <span class="ml-2 text-sm text-gray-900">MySql</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="gestor" value="mariaDb" class="form-radio text-indigo-600 h-4 w-4">
                                                <span class="ml-2 text-sm text-gray-900">mariaDb</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="gestor" value="SqlServer" class="form-radio text-indigo-600 h-4 w-4">
                                                <span class="ml-2 text-sm text-gray-900">SqlServer</span>
                                            </label>
                                            <label class="inline-flex items-center">
                                                <input type="radio" name="gestor" value="SqlInformix" class="form-radio text-indigo-600 h-4 w-4">
                                                <span class="ml-2 text-sm text-gray-900">SqlInformix</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900" onclick="window.history.back()">Cancel</button>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div>
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>





</x-app-layout>
