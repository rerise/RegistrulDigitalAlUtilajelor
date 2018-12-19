@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Operatori</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Operatori</li>
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
                                    Detalii nivel de pregatire
                                </th>
                                <th>
                                    Nivel de pregatire
                                </th>
                                 <th>
                                    Contact
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($operators as $operator)
                                <tr>
                                    <td>{{ $operator->name }}</td>
                                    <td>{{ $operator->preparation_details }}</td>
                                    <td>{{ $operator->preparation_level_id }}</td>
                                    <td>{{ $operator->contact }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('operators.create')}}" class="btn btn-warning">
                       + Adaugă operator
                    </a>
                </div>
       
@endsection
