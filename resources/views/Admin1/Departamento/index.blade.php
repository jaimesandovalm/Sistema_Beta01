@extends('Admin1.Layouts.layout')

@section('content')
<div class="content-viewport">

    <div class="row">
        <div class="col-12 py-5">
            <h4>Departamento</h4>
            <p class="text-gray">Welcome aboard, Allen Clerk</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <a class=" btn btn-success has-icon btn-rounded" href="{{ route('Departamento.create') }}">
                    <i class="mdi mdi-account-plus-outline">
                    </i> Nuevo
                </a>


                <div class="item-wrapper">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>IdDepartamento</th>
                                    <th>Descripcion</th>
                                    <th>Activo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listar as $list)
                                <tr>
                                    <td>{{ $list->IdDepartamento}}</td>
                                    <td>{{ $list->Descripcion}}</td>
                                    <td>{{ $list->Activo}}</td>
                                    <td>53275531</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
