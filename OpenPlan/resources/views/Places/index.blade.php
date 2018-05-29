@extends('app')
@section('content')


 
<table class="table table-bordered" id="tableplaces">
  <thead>
    <tr>
      <style>
              th { color: #07fad9; }
    </style>
        <th class="text-center"> Name </th>
        <th class="text-center">Description</th>
        <th class="text-center">Telephone</th>
        <th class="text-center">Time Open</th>
        <th class="text-center">Time Close</th>

    </tr>
  </thead>
  <style type="text/css">
      body {

                font-family:Arial, Verdana, Helvetica, sans-serif;
                font-size: 18px;
                background-image: url('/imagenes/maxresdefault.jpg');
                background-color: #0b7bc4;
            }
  </style>
  <tbody>
  @foreach($place as $places)
        <tr>

            <td class="text-center">{{ $places->name }}</td>
            <td class="text-center">{{ $places->descripcion }}</td>
            <td class="text-center">{{ $places->telefono }}</td>
            <td class="text-center">{{ $places->hora_apertura }}</td>
            <td class="text-center">{{ $places->hora_cierre }}</td>

            <td>
                <a href="/Places/{{ $places->id }}" class="btn btn-warning">Watch</a>
 
            </td>

        </tr>
        
    @endforeach
    <h1  class="text-primary">List Of Places </h1>

  </tbody>
  
  


@stop