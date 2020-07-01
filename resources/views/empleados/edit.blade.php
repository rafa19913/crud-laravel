@extends('empleados.layout')

   

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Editar Empleado</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Volver</a>

            </div>

        </div>

    </div>

   

    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Error!</strong> Algunos problemas al editar.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

  

    <form action="{{ route('empleados.update',$empleado->id) }}" method="POST">

        @csrf

        @method('PUT')

   

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nombres:</strong>

                    <input type="text" name="nombres" value="{{ $empleado->nombres }}" class="form-control" placeholder="nombres">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Apellidos:</strong>

                    <input type="text" name="apellidos" value="{{ $empleado->apellidos }}" class="form-control" placeholder="apellidos">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary">Aceptar</button>

            </div>

        </div>

   

    </form>

@endsection