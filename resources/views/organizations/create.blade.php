@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Adaugă organizţie</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Adaugă organizţie</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

        <div class="content container">
            <div class="title m-b-md">
                Organizaţii - adaugă 
            </div>



            <div>
             <form method="post" action="{{ route('organizations.store') }}">
              @csrf
              <div class="form-group">
                  
                  <label for="name">Nume</label>
                  <input type="text" class="form-control" name="name"/>
              </div>
                 <!--  <div class="form-group">
                      <label for="operator_id">Id operator:</label>
                      <input type="text" class="form-control" name="operator_id"/>
                  </div> -->
                  <div class="form-group">
                      <label for="details">Detalii:</label>
                      <textarea name="details" class="form-control"></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Adaugă</button>
                  <br>
                  <div class="pt-3">
                    <a href="{{route('organizations.index')}}">
                      <i class="fa fa-chevron-left"></i>
                      Înapoi la list organizaţii
                    </a>
                  </div>
            </form>
        </div>
@endsection