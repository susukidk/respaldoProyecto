@extends('layouts/main')
@section('contenido')
    
    <p class="fs-2 text-center mt-4"><img src="{{ asset('img/tec.ico') }}" alt="Icono" style="width: 55px; height: auto;"></td> Alumnos</p>
    <div class="card mt-4">
        <div class="card-body">
            <table id="tabla2" class="display nowrap border border-dark mt-2" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre del alumno</th>
                        <th>Número de control</th>
                        <th>Carrera</th>
                        <th>Nombre del crédito</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item->nombre_alumno }}</td>
                        <td>{{ $item->numero_control }}</td>
                        <td>{{ $item->carrera->nombre_carreras }}</td>
                        <td>{{ $item->id_credito }}</td>
                        <td></td>
                        <td>
                            <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                        <td> 
                            <a href="{{ route('show', $item->id) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        $(function() {
            $('#tabla2').DataTable({
                "scrollX": true,
                "responsive": true
                    
            });
        });
    </script>
@endsection
