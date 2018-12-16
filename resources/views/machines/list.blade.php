@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Utilaje</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Dashboard</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Utilaje</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div>               
    <table  class="table table-striped table-bordered simple-data-table">
        <thead class="thead-dark">
            <tr>
                <th>
                    Nume (Marca/Model)
                </th>
                <th>
                    Detalii locaţie
                </th>
                <!-- Hidden - afisate doar pe harta -->
                <!-- <th>
                    Coordonate (lng, lat)
                </th> -->
                <th>
                    Nivel echipament
                </th>
                 <th>
                    Tip (Grup de produse, Categorie)
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($machines as $machine)
                <tr>
                    <td>{{ $machine->name }}</td>
                    <td>{{ $machine->location_details }}</td>
                    <!-- Hidden - afisate doar pe harta -->
                    <!-- <td>
                        @if($machine->lng)
                            {{ $machine->lng }}, 
                        @endif
                        {{ $machine->lat }}</td> -->
                    <td>{{ $machine->level_equipment }}</td>
                    <td>{{ $machine->type }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('machines.create')}}" class="btn btn-warning">
       + Adaugă utilaj
    </a>
</div>
       

@endsection
