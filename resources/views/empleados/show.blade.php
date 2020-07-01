@extends('empleados.layout')

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Mostrar Empleado</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nombres:</strong>

                {{ $empleado->nombres }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Apellidos:</strong>

                {{ $empleado->apellidos }}

            </div>

        </div>

    </div>

@endsection