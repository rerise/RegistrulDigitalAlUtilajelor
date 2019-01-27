@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Newsletter</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Administrare</a></li>
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Email-uri - newsletter</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <ul>
            @foreach($newsletters as $newsletter)
                <li>{{ $newsletter->email }}</li>
            @endforeach
        </ul>

    </div>
@endsection