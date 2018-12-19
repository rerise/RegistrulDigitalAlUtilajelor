@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Depozite</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Depozite</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
                <div>
                    <table class="table table-bordered simple-data-table">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    Nume
                                </th>
                                <th>
                                    Detalii locaţie
                                </th>
                                <th>
                                    Latitudine
                                </th>
                                 <th>
                                    Longitudine
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($deposits as $deposit)
                                <tr>
                                    <td>{{ $deposit->name }}</td>
                                    <td>{{ $deposit->location_details }}</td>
                                    <td>{{ $deposit->lat }}</td>
                                    <td>{{ $deposit->lng }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('deposits.create')}}" class="btn btn-warning">
                       + Adaugă depozit
                    </a>
                </div>
            </div>
        </div>
@endsection