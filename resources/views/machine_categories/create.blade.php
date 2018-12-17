@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Adauga Categorie Utilaj</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Setări</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Adaugă categorie utilaj</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

  <div class="content container">
    <div>
      <form method="post" action="{{ route('machine-categories.store') }}">
        @csrf
        <div class="form-group">
          <label for="name">Nume</label>
          <input type="text" class="form-control" name="name"/>
        </div>

        <div class="form-group">
          <label for="description">Descriere</label>
          <textarea class="form-control" name="description"></textarea>
        </div>

        <button type="submit" class="btn btn-primary"> Adaugă</button>
        <br>
        <div class="pt-3">
          <a href="{{route('machine-categories.index')}}">
            <i class="fa fa-chevron-left"></i>
            Înapoi la lista categorii utilaje
          </a>
        </div>
      </form>
    </div>
  </div>
<!-- </div> -->
@endsection