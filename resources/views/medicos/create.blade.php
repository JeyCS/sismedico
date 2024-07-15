@extends('layouts.base')

@section('content')
<!-- Aca se encuentra el create es en donde se llevara el registro de los medicos
se encuentra el div el cual contiene el boton de crear registro y el de volver -->
<div class="row">
    <div class="col-12">
        <div>
            <h2>Medicos</h2>
        </div>
        <div>
            <a href="{{route('medicos.index')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</br>
    <!-- aca se muestra el mensaje de error si algo sale mal 
     o si falta por rellenar un dato -->
    @if ($errors->any())
    <div class="alert alert-danger mt-3">
        <strong>Oh no!</strong> Algo fue mal..<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

     <!-- aca se encuentra el formulario donde se pondran los datos que se crearan  -->

    <form action="{{route('medicos.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su Nombre" >
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Apellido:</strong>
                        <input type="text" name="apellido" class="form-control" placeholder="Ingrese su Apellido" >
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                    <div class="form-group">
                        <strong>Cedula:</strong>
                        <input type="text" name="cedula" class="form-control" placeholder="Cedula" >
                    </div>
                </div>

            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Direccion:</strong>
                    <input type="text" name="direccion" class="form-control" placeholder="Direccion" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Especialidad:</strong>
                    <input type="text" name="especialidad" class="form-control" placeholder="Especialidad" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha de nacimiento:</strong>
                    <input type="date" name="fecha de nacimiento" class="form-control" placeholder="Fecha de Nacimiento" >
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Fecha de ingreso:</strong>
                    <input type="date" name="due_date" class="form-control" id="">
                </div>
            </div>
           
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear Registro</button>
            </div>
        </div>
    </form>
</div>
@endsection