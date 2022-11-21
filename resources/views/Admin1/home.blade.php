@extends('Admin1.Layouts.layout')

@section('content')
<div class="content-viewport">

    <div class="row">
        <div class="col-12 py-5">
            <h4>Inicio</h4>
            <p class="text-gray">Welcome aboard, Allen Clerk</p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="grid">
                <p class="grid-header">Resumen Personal</p>

                <div class="item-wrapper">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>IdPersonal</th>
                                    <th>Nombres</th>
                                    <th>Apellido_Materno</th>
                                    <th>Apellido_Paterno</th>
                                    <th>Departamento</th>
                                    <th>Activo</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listar as $list)
                                <tr>
                                    <td>{{ $list->IdPersonal}}</td>
                                    <td>{{ $list->Nombres}}</td>
                                    <td>{{ $list->Apellido_Materno}}</td>
                                    <td>{{ $list->Apellido_Paterno}}</td>
                                    <td>{{ $list->Departamento}}</td>
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
