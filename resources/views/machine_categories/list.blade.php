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
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Categorie Utilaje</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<!-- 
<div class="pb-2">
    <a href="{{route('machine-parameters.create')}}" class="btn btn-warning">
        <i class="fa fa-plus"></i>
        Adaugă categorie utilaj
    </a>
</div> -->
<div>               

    
    <table  class="table table-striped table-bordered simple-data-table">
        <thead class="thead-dark">
            <tr>
                <th>
                    Nume categorie
                </th>
                <th>
                    Descriere
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($machineCategories as $machineCategory)
                <tr>
                    <td>{{ $machineCategory->name }}</td>
                    <td>{{ $machineCategory->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <a href="{{route('machine-categories.create')}}" class="btn btn-warning">
       + Adaugă categorie utilaj
    </a>
</div>
       

@endsection
