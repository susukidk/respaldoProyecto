@extends('layouts/main')
@section('contenido')
    
    <p class="fs-2 text-center mt-4"><img src="{{ asset('img/tec.ico') }}" alt="Icono" style="width: 55px; height: auto;"></td>Creditos alumnos</p>
    <a href="/" class="btn btn-info btn-block mt-3 col-12">
        <td class="icocod">&#9194;</td> Regresar
    </a>
    <div class="card mt-4">
        <div class="card-body">
            <table id="tabla2" class="display nowrap border border-dark mt-2" style="width:100%">
                <thead>
                    <tr>
                        <th>Nombre del alumno</th>
                        <th>Número de control</th>
                        <th>Carrera</th>
                        <th>Horas civicas</th>
                        <th>Ubicación física civica</th>
                        <th>Horas deportivas</th>
                        <th>Ubicación física deportiva</th>
                        <th>Horas culturales</th>
                        <th>Ubicación física cultural</th>
                        <th>Ver archivos</th>
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
                        <td>{{ $item->horaCivica}}</td>
                        <td>{{ $item->ubicacionFisicaCivica}}</td>
                        <td>{{ $item->horaDeportiva}}</td>
                        <td>{{ $item->ubicacionFisicaDeportiva}}</td>
                        <td>{{ $item->horaCultural}}</td>
                        <td>{{ $item->ubicacionFisicaCultural}}</td>
                        <td><a href="{{ route('verArchivos', $item->id) }}" class="btn btn-success">Ver archivos</a></td>
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
        $(document).ready(function() {
            var table = $('#tabla2').DataTable({
                scrollY: 450,
                deferRender: false,
                scroller: true,
                responsive: true,
                
            });
        });
    </script>
@endsection
