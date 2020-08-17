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
        </div>
    </div>
</div>
@endsection