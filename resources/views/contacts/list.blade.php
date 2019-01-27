@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Contacte</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Contacte</li>
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
                                    Detalii de contact
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->contact_details }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{route('contacts.create')}}" class="btn btn-warning">
                       + Adaugă contact
                    </a>
                </div>
@endsection