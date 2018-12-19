@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Adaugă operator</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Adaugă operator</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

        <div class="content container">
            <div class="title m-b-md">
                Operatori - adaugă 
            </div>



            <div>
             <form method="post" action="{{ route('operators.store') }}">
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
                      <label for="preparation_details">Detalii nivel de pregatire</label>
                      <input type="text" class="form-control" name="preparation_details"/>
                  </div>
                  <div class="form-group">
                      <label for="preparation_level_id">Nivel de pregatire</label>
                      <input type="text" class="form-control" name="preparation_level_id"/>
                  </div>
                  <div class="form-group">
                      <label for="contact">Contact</label>
                      <input type="text" class="form-control" name="contact"/>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Adaugă</button>
                  <br>
                  <div class="pt-3">
                    <a href="{{route('operators.index')}}">
                      <i class="fa fa-chevron-left"></i>
                      Înapoi la lista operatori
                    </a>
                  </div>
            </form>
        </div>
    
@endsection