    @extends('layouts/main')
    @section('contenido')
        <p class="fs-2 text-center mt-4"><img src="{{ asset('img/LOGOTEC.png') }}" alt="Icono" style="width: 54px; height: auto;"></td> Agregar archivo</p>
        <div class="mt-4 fs-4">
            <li>El nombre del estudiante:<span style="color: rgb(201, 2, 2);"> {{ $items->nombre_alumno }}</span> </li>
            <li>El número de control es:<span style="color: rgb(201, 2, 2);"> {{ $items->numero_control }}</span> </li>
            <li>Nombre de la carrera:<span style="color: rgb(201, 2, 2);"> {{ $items->carrera->nombre_carreras }}</span> </li>
        </div>
        
        <form class="row g-3 mt-4 fs-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Evento o taller</label>
                <input type="text" class="form-control" id="nombre_evento" aria-describedby="emailHelp" placeholder="Nombre del evento o taller">
            </div>
            <div class="col-md-6 mt-4">
                <label for="formFile" class="form-label">Evidencias y constancias</label>
                <input class="form-control" type="file" id="formFile" required>
            </div>
            <div class="col-md-6 mt-4">
                <label for="inputCity"  class="form-label">Ubicación física</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" required></textarea>
            </div>

            <div class="col-md-6">
                <label for="formFile" class="form-label">Mooc</label>
                <input class="form-control" type="file" id="formFile" required>
            </div>
            <div class="form-group row">
                <label for="credito" class="col-md-4 col-form-label text-md-right">Crédito:</label>

                <div class="col-md-6">
                    <select id="credito" name="credito" class="form-control" required>
                        <option value="">Seleccionar crédito</option>
                        @foreach ($creditos as $credito)
                            <option value="{{ $credito->id }}">{{ $credito->nombre_credito }}</option>
                        @endforeach
                    </select>
                </div>
            </div>


            
            
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
        
    @endsection
