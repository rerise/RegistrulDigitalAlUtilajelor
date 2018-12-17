@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Adauga Utilaj</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Adauga utilaj</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

        <div class="content container">

            <div>
             <form method="post" action="{{ route('machines.store') }}">
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
                      <label for="location_details">Locaţie:</label>
                      <input type="text" class="form-control" name="location_details"/>
                  </div>
                  <div class="form-group">
                      <label for="level_equipment">Nivel echipament:</label>
                      <input type="text" class="form-control" name="level_equipment"/>
                  </div>
                  <div class="form-group">
                      <label for="type">Tip:</label>
                      <input type="text" class="form-control" name="type"/>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Adaugă</button>
        
                  <br>
                  <div class="pt-3">
                    <a href="{{route('machines.index')}}">
                      <i class="fa fa-chevron-left"></i>
                      Înapoi la lista utilaje
                    </a>
                  </div>
            </form>
        </div>
      </div>
    
<!-- </div> -->
@endsection