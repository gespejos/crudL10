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

                    <div class="isolate  px-2 py-4 sm:py-16 lg:px-5">
                        <div class="mx-auto max-w-2xl text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl">Registro</h2>
                        </div>
                        <form action="{{ route('informacion.store') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                            @CSRF
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div class="sm:col-span-2">
                                    <label for="nombre" class="block text-sm font-semibold leading-6 text-gray-900">Nombre</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="nombre" id="nombre" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div class="sm:col-span-2">
                                    <label for="link" class="block text-sm font-semibold leading-6 text-gray-900">Link</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="link" id="link" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-3">
                                    <label for="estado" class="block text-sm font-semibold leading-6 text-gray-900">Estado</label>
                                    <div class="mt-2">
                                        <select id="estado" name="estado" autocomplete="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="produccion">Producción</option>
                                            <option value="preproduccion">Preproducción</option>
                                            <option value="desarrollo">Desarrollo</option>
                                            <option value="proyecto">Proyecto</option>
                                        </select>
                                    </div>
                                </div>

                                <div>
                                    <label for="lenguaje" class="block text-sm font-semibold leading-6 text-gray-900">Lenguaje</label>
                                    <div class="mt-2.5">
                                        <select id="lenguaje" name="lenguaje" autocomplete="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="Php">PHP</option>
                                            <option value="Java">Java</option>
                                            <option value="4Gl">4GL</option>
                                            <option value=".NET">.NET</option>
                                            <option value="VB.NET">VB.NET</option>
                                            <option value="Back & Front">Back & Front</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label for="db" class="block text-sm font-semibold leading-6 text-gray-900">Base de Datos</label>
                                    <div class="mt-2.5">
                                        <select id="db" name="db" autocomplete="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                            <option value="PostgreSql">PostgreSQL</option>
                                            <option value="SqlInformix">SqlInformix</option>
                                            <option value="MySql">MySQL</option>
                                            <option value="mariaDb">MariaDB</option>
                                            <option value="SqlServer">SQL Server</option>
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <label for="servidor" class="block text-sm font-semibold leading-6 text-gray-900">Servidor</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="servidor" id="servidor" autocomplete="" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <label for="version" class="block text-sm font-semibold leading-6 text-gray-900">Framework</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="version" id="version" autocomplete="" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                                <div>
                                    <label for="fecha_instalacion" class="block text-sm font-semibold leading-6 text-gray-900">Fecha de Instalación</label>
                                    <div class="mt-2.5">
                                        <input type="date" name="fecha_instalacion" id="fecha_instalacion" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    </div>
                                </div>

                            </div>
                            <div class="mt-10">
                                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
                            </div>
                            @CSRF
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
