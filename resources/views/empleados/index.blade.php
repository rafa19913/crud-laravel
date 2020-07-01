@extends('empleados.layout')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>CRUD de empleados con laravel</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('empleados.create') }}"> Crear nuevo empleado</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Nombres</th>

            <th>Apellidos</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($empleados as $empleado)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $empleado->nombres }}</td>

            <td>{{ $empleado->apellidos }}</td>

            <td>

                <form action="{{ route('empleados.destroy',$empleado->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('empleados.show',$empleado->id) }}">Ver</a>

    

                    <a class="btn btn-primary" href="{{ route('empleados.edit',$empleado->id) }}">Editar</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Eliminar</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $empleados->links() !!}

      

@endsection