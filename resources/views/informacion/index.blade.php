<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sistema') }}
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
            .button-group form {
                display: inline;
                margin-right: 5px; /* Ajusta el margen según sea necesario */
            }
            @keyframes parpadeo {
                0% {
                    background-color: green;
                }
                50% {
                    background-color: transparent;
                }
                100% {
                    background-color: green;
                }
            }

            .parpadear-verde {
                animation-name: parpadeo;
                animation-duration: 1s;
                animation-iteration-count: infinite;
            }
            td a {
                max-width: 200px; /* Puedes ajustar el valor según tus necesidades */
                display: inline-block;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        </style>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end">
                        <x-primary-button class="mb-2 ml-auto">
                            <a href="{{ route('informacion.create') }}" style="color: white; text-decoration: none;">Nuevo</a>
                        </x-primary-button>
                    </div>
                    @if ($informacions->isEmpty())
                        <p>No hay datos en la tabla.</p>
                    @else
                        <table class="table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Link</th>
                                <th>Estado</th>
                                <th>Lenguaje</th>
                                <th>Base de datos</th>
                                <th>Servidor</th>
                                <th>Framework</th>
                                <th>Publicado</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($informacions as $informacion)
                                <tr>
                                    <td>{{ $informacion->id }}</td>
                                    <td>{{ $informacion->nombre }}</td>
                                    <td><a href="{{ $informacion->link }}">{{ $informacion->link }}</a></td>
                                    <td>
                                        @if($informacion->estado === 'produccion')
                                            <span class="parpadear-verde"></span>
                                        @endif
                                        {{ $informacion->estado }}
                                    </td>
                                    <td>{{ $informacion->lenguaje }}</td>
                                    <td>{{ $informacion->db }}</td>
                                    <td>{{ $informacion->servidor }}</td>
                                    <td>{{ $informacion->version }}</td>
                                    <td>{{ $informacion->fecha_instalacion }}</td>
                                    <!-- Otros campos de la tabla -->
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
