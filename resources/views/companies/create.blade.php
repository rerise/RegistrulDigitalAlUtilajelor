@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Adaugă firmă</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Adaugă firmă</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

        <div class="content container">
            <div class="title m-b-md">
                Firme - adaugă 
            </div>



            <div>
             <form method="post" action="{{ route('companies.store') }}">
              @csrf

              <div class="form-group">
                  <label for="name">Nume:</label>
                  <input type="text" class="form-control" name="name"/>
              </div>

              <div class="form-group">
                  <label for="contact_details">Detalii de contact: </label>
                  <textarea name="contact_details" class="form-control"></textarea>
              </div>

             <!--  <div class="form-group">
                  <label for="operator_id">Id operator:</label>
                  <input type="text" class="form-control" name="operator_id"/>
              </div> -->
              <div class="form-group">
                  <label for="trade_register">Nr. registrul comerţului:</label>
                  <input type="text" class="form-control" name="trade_register"/>
              </div>

              <hr>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lat">Latitudine: </label>
                    <input type="text" class="form-control" name="lat"/>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lng">Longitudine: </label>
                    <input type="text" class="form-control" name="lng"/>
                  </div>
                </div>
              </div>
              
              
                  
                  <button type="submit" class="btn btn-primary">Adaugă</button>
                  <br>
                  <div class="pt-3">
                    <a href="{{route('companies.index')}}">
                      <i class="fa fa-chevron-left"></i>
                      Înapoi la list firme
                    </a>
                  </div>
            </form>
        </div>
      </div>
    </div>
@endsection