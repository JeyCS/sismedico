@extends('welcome')

@section('content')
<div class="row">
    <div class="col-12">
        <div>
            <h2>Crear Registro</h2>
        </div>
        <div>
            <a href="{{route('historia.create')}}" class="btn btn-primary">Crear</a>
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
                <th scope="col">Column 1</th>
                <th scope="col">Column 2</th>
                <th scope="col">Column 3</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <td scope="row">R1C1</td>
                <td>R1C2</td>
                <td>R1C3</td>
            </tr>
            <tr class="">
                <td scope="row">Item</td>
                <td>Item</td>
                <td>Item</td>
            </tr>
        </tbody>
    </table>
</div>
 



@endsection