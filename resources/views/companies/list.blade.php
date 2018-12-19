@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Companii</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Companii</li>
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
                                    Registrul comerţului
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->trade_register }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('companies.create')}}" class="btn btn-warning">
                       + Adaugă firmă 
                    </a>
                </div>
@endsection