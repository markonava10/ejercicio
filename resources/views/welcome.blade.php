<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
      <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">Buscar</a>
        <form action= "/search" method="GET" class="form-inline">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
      </nav>
           
        <div class="content">
          @extends('layouts.app')
            @section('content')
            <div class="container">
              <div class="row">
                <div class="col">
                  <label>Menu del Usuario {{ Auth::user()->name }} </label>
                  <nav class="nav flex-column">
                    <a class="nav-link active" href="/crear">Crear Post</a>
                    
                    <a class="nav-link" href="/post">Consulta de Post</a>
                    <a class="nav-link" href="/country">Paises</a>
                  </nav>
                </div>
                <div class="col-6">
                  <nav class="nav flex-column">
                    <a class="nav-link active" href="#">Paises</a>
                  </nav>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Pais</th>
                        <th colspan="2">&nbsp;</th>
                      </tr>
                    </thead>
                  <tbody>
                   
                    @foreach ($countries as $pos)
                      <tr>
                        <td> {{ $pos->id }}</td>
                        <td> {{ $pos->country }}</td>
                      </tr> 
                    @endforeach    
                  </tbody>
                </table> 
                </div>
                <div class="col">
                  <h1>  Listado de Posts del usuario {{ Auth::user()->name }} </h1>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Titulo</th>
                        <th>Fecha</th>
                        <th colspan="2">&nbsp;</th>
                      </tr>
                    </thead>
                  <tbody>
                    
                    @foreach ($posts as $pos)
                      <tr>
                        <td> {{ $pos->post }}</td>
                        <td> {{ $pos->created_at }}</td>
                      </tr> 
                    @endforeach    
                  </tbody>
                </table> 
                </div>
              </div>           
            </div>
          @endsection
        </div>
        </div>
    </body>
</html>
