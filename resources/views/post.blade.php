@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>{{ config('app.name', 'Laravel') }}</h1>
                <table class="table">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Post</th>
                        <th>Body</th>
                        <th>Fecha de Creacion</th>
                        <th>Nombre del usuario</th>
                        <th colspan="2">&nbsp;</th>
                      </tr>
                    </thead>
                  <tbody>
                   
                    @foreach ($posts as $post)
                      <tr>
                        <td> {{ $post->id }}</td>
                        <td> {{ $post->post }}</td>
                        <td> {{ $post->body }}</td>
                        <td> {{ $post->created_at }}</td>
                        <td>{{ Auth::user()->name }}</td>
                      </tr> 
                    @endforeach    
                  </tbody>
                </table> 
            </div>
        </div>
    </div>
</div>
@endsection