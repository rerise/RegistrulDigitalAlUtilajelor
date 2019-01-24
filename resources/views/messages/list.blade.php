@extends('layouts.admin_layout')

@section('breadcrumbs')
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Mesaje</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <!-- <li><a href="#">Administrare</a></li> -->
                    <!-- <li><a href="#">Table</a></li> -->
                    <li class="active">Mesaje</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')

<h3>Mesaje noi:</h3>
    @foreach($newmessages as $message)

        <div class="card">
            <div class="card-header">
              Autor: {{ $message->author }}
            </div>
            <div class="card-body">
            
              <p class="bold" style="color: green">{{ $message->message }}</p>
              <small class="text-muted">Primit la <b>{{ $message->created_at }}</b></small>
              <hr>
              <form action="/message-change-status/{{$message->id}}" 
                method="post" class="inline-display-form">
              @csrf

                <button href="" class="btn btn-success" type="submit"><span><i class="fa fa-envelope"></i></span>&nbsp;Marcheaza ca citit</button>
                
              </form>
               <form action="/messages/{{$message->id}}" method="POST" class="inline-display-form">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn" value="submit" type="submit">
                            <i class="fa fa-trash"></i>
                        Şterge</button>
                    </form>
                        
            </div>
          </div>
    @endforeach

<hr class="mb-5">
<h3>Mesaje citite</h3>
    @foreach($oldmessages as $message)

        <div class="card">
            <div class="card-header">
              Autor: {{ $message->author }}
            </div>
            <div class="card-body">
            
              <p class="bold" style="color: black">{{ $message->message }}</p>
              <small class="text-muted">Primit la <b>{{ $message->created_at }}</b></small>
              <hr>
              <form action="/message-change-status/{{$message->id}}" 
                method="post" class="inline-display-form">
              @csrf

                <button href="" class="btn btn" type="submit"><span><i class="fa fa-envelope"></i></span>&nbsp;Marcheaza ca necitit</button>
            </form>
                
                <form action="/messages/{{$message->id}}" method="POST" class="inline-display-form">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn" value="submit" type="submit">
                            <i class="fa fa-trash"></i>
                        Şterge</button>
                    </form>
                
                        
            </div>
          </div>
    @endforeach
               
@endsection