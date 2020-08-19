@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="width: 50rem;">
                <div class="card-header">{{ __('Lista de Posts') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Contenido</th>
                            <th>Fecha</th>
                            <th colspan="2">&nbsp;</th>
                          </tr>
                        </thead>
                      <tbody>
                        
                        @foreach ($Post as $pos)
                          <tr>
                            <td> {{ $pos->id }}</td>
                            <td> {{ $pos->post }}</td>
                            <td> {{ $pos->body }}</td>
                            <td> {{ $pos->created_at }}</td>
                          </tr> 
                        @endforeach    
                      </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection