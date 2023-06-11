@extends('layouts/main')

@section('contenido')
    <div class="container">
        <div class="row">
            <a href="/misArchivos/tabla" class="btn btn-info btn-block mt-3 col-12">
                <td class="icocod">&#9194;</td> Regresar
            </a>
            <div class="col-md-6">
                <br>
                <h2>Moocs Civicos</h2>
                @if ($existeMoocCivico)
                    <iframe src="{{ asset($moocCivicapdf) }}" width="100%" height="300px"></iframe>
                @else
                    <p class="alert alert-warning d-flex align-items-center" role="alert" >No existe el archivo Mooc Cívico.
                        <a href="{{ route('datos_A', $items->id) }}" class="btn btn-success">Subir archivos</a>
                    </p>
                    
                @endif
            </div>
            <div class="col-md-6">
                <br>
                <h2>Evidencias Civicas</h2>
                @if ($existeEvidenciasCivicas)
                    <iframe src="{{ asset($evidenciaCivicapdf) }}" width="100%" height="300px"></iframe>
                @else
                    <p class="alert alert-warning d-flex align-items-center" role="alert">No existe el archivo Evidencia Cívica.
                        <a href="{{ route('datos_A', $items->id) }}" class="btn btn-success">Subir archivos</a>
                    </p>
                    
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Moocs Deportivos</h2>
                @if ($existeMoocDeportivas)
                    <iframe src="{{ asset($moocDeportivaspdf) }}" width="100%" height="300px"></iframe>
                @else
                    <p class="alert alert-warning d-flex align-items-center" role="alert" >No existe el archivo Mooc Deportivos.
                        <a href="{{ route('datos_A', $items->id) }}" class="btn btn-success">Subir archivos</a>
                    </p>
                    
                @endif
            </div>
            <div class="col-md-6">
                <h2>Evidencias Deportivas</h2>
                @if ($existeEvidenciasDeportivas)
                    <iframe src="{{ asset($evidenciaDeportivaspdf) }}" width="100%" height="300px"></iframe>
                @else
                    <p class="alert alert-warning d-flex align-items-center" role="alert" >No existe el archivo Evidencia Deportiva.
                        <a href="{{ route('datos_A', $items->id) }}" class="btn btn-success">Subir archivos</a>
                    </p>
                    
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h2>Moccs Culturales</h2>
                @if ($existeMoocCulturales)
                    <iframe src="{{ asset($moocCulturalespdf) }}" width="100%" height="300px"></iframe>
                @else
                    <p class="alert alert-warning d-flex align-items-center" role="alert" >No existe el archvo Mooc Culturales.
                        <a href="{{ route('datos_A', $items->id) }}" class="btn btn-success">Subir archivos</a>
                    </p>
                    
                @endif
            </div>
            <div class="col-md-6">
                <h2>Evidencias Culturales</h2>
                @if ($existeEvidenciasCulturales)
                    <iframe src="{{ asset($evidenciaCulturalespdf) }}" width="100%" height="300px"></iframe>
                @else
                    <p class="alert alert-warning d-flex align-items-center" role="alert" >No existe el archvo Evidencia Culturales.
                        <a href="{{ route('datos_A', $items->id) }}" class="btn btn-success">Subir archivos</a>
                    </p>
                    
                @endif
            </div>
        </div>
    </div>
@endsection
