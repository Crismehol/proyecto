{{--TODO: mostrar los detalles de un cliente--}}
@extends('template')
@section('content')
    {{-- Tools --}}
    <section id='tools'>
        <ul class='breadcrumb' id='breadcrumb'>
            <li class='title'>Empleados</li>
            <li><a href="{{ url('customers/records/list') }}">Historiales</a></li>
            <li><a href="{{ url('customers/records/details/'. $record_details->customer_id) }}">Ficha clínica {{ $record_details->name .' '. $record_details->surname }}</a></li>
        </ul>
    </section>
    {{-- Content --}}
    <div id='content'>
        <div class='panel panel-default'>
            <div class='panel-heading'>
                <i class='icon-edit icon-large'></i>
                Registro de empleado
            </div>
            <div class='panel-body'>
                <fieldset>
                    <ul>
                        <li><strong>Nombre: </strong>{{$record_details->name}}</li>
                        <li><strong>Apellidos: </strong>{{$record_details->surname}}</li>
                        <li><strong>DNI: </strong>{{$record_details->dni}}</li>
                        <li><strong>E-mail: </strong>{{$record_details->email}}</li>
                        <li><strong>Contacto: </strong>{{$record_details->phone_number}}</li>
                    </ul>
                    <br>
                    <table class="table">
                        <tr>
                            <td></td>
                            <th>Eje</th>
                            <th>Cilindro</th>
                            <th>Esfera</th>
                            <th>Adición</th>
                            <th>Prisma</th>
                        </tr>
                        <tr>
                            <th>Ojo derecho</th>
                            <td>{{ $record_details->axis_right.'º' }}</td>
                            <td>{{ $record_details->astigmatism_right }}</td>
                            <td>{{ $record_details->diopters_right }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Ojo izquierdo</th>
                            <td>{{ $record_details->axis_left.'º' }}</td>
                            <td>{{ $record_details->astigmatism_left }}</td>
                            <td>{{ $record_details->diopters_left }}</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
        </div>
    </div>
@stop