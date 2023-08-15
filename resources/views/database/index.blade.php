<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Base de Datos') }}
        </h2>
        <style>
            .table {
                width: 100%;
                border-collapse: collapse;

            }
            .table th,
            .table td {
                padding: 10px;
                border: 1px solid #ddd;
                text-align: center;

            }
            .table th {
                background-color: #f2f2f2;
                text-align: center;
            }
            .table tbody tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            .button-group {
                display: inline-block;
            }
            .button-group form {
                display: inline;
                margin-right: 5px; /* Ajusta el margen según sea necesario */
            }
        </style>
    </x-slot>




    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end">
                        <x-primary-button class="mb-2 ml-auto">
                            <a href="{{ route('database.create') }}" style="color: white; text-decoration: none;">Nuevo</a>
                        </x-primary-button>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Estado</th>
                            <th>Servidor</th>
                            <th>Gestor</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($databases as $database)
                            <tr>
                                <td>{{ $database->id }}</td>
                                <td>{{ $database->nombre }}</td>
                                <td>{{ ($database->estado==1) ? 'Activo' : 'Inactivo' }}</td>
                                <td>{{ $database->servidor }}</td>
                                <td>{{ $database->gestor }}</td>
                                <td>
                                    <div class="button-group">
{{--                                        <form action="{{ route('database.edit', $database->id) }}" method="GET">--}}
{{--                                            @csrf--}}
{{--                                            <button type="submit" class="custom-button">Editar</button>--}}
{{--                                        </form>--}}
                                        <form action="{{ route('database.destroy', $database->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button type="submit" onclick="return confirm('¿Estás seguro de que deseas eliminar este elemento?')">
                                                Eliminar
                                            </x-danger-button>
                                        </form>
                                    </div>
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
