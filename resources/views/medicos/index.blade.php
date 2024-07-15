@extends('welcome')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Medicos</h2>
        </div>
        <div>
            <a href="{{route('medicos.create')}}" class="btn btn-primary">Crear</a>
        </div>
    </div>

<div
    class="table-responsive"
>
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Cedula</th>
                <th scope="col">Edad</th>
                <th scope="col">Telefono</th>
                <th scope="col">Email</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Fecha Ingreso</th>

            </tr>
        </thead>
        <tbody>

            @foreach($medicos as $row)
            <tr class="">
                <td scope="row"> {{$row->nombre}}</td>
                <td>{{$row->apellido}}</td>
                <td>{{$row->telefono}}</td>
                <td>{{$row->especialidad}}</td>
                <td>{{$row->fechaingreso}}</td>
                <td>frast</td>
            </tr>
            @endforeach
            <tr class="">
                <td scope="row"></td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>
 



@endsection