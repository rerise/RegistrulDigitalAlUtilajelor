@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Adaugă depozit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Adaugă depozit</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

        <div class="content container">
            <div class="title m-b-md">
                Depozite - adaugă
            </div>



            <div>
             <form method="post" action="{{ route('deposits.store') }}">
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
                      <label for="lat">Latitudine:</label>
                      <input type="text" class="form-control" name="lat"/>
                  </div>
                  <div class="form-group">
                      <label for="lng">Longitudine:</label>
                      <input type="text" class="form-control" name="lng"/>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Adaugă</button>
                  <br>
                  <a href="{{route('deposits.index')}}">
                    Înapoi la Lista depozite
                </a>
            </form>
        </div>

@endsection
