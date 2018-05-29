@extends('app')
@section('content')


 
<table class="table table-bordered" id="tablecategories">
  <thead>
    <style>
              th { color: #07fad9; }
    </style>
    <tr>
        <th class="text-center"> Id </th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
    </tr>
  </thead>
  <style type="text/css">
      body {

                font-family:Arial, Verdana, Helvetica, sans-serif;
                font-size: 18px;
                background-image: url('/imagenes/fondo1.jpg');
                background-color: #FF0000;
            }
  </style>
  <tbody>
  @foreach($Categorias as $categories)
        <tr>
           <style>
              td { color: #2fb41f; }
          </style>
            <td class="text-center">{{ $categories->id }}</td>
            <td class="text-center">{{ $categories->name }}</td>
            <td class="text-center">{{ $categories->descripcion }}</td>
            <td>
                <a href="/Categorias/{{ $categories->id }}" class="btn btn-warning">Watch</a></td>
            <td></td>
        </tr>
        
    @endforeach
    <h1  class="text-primary">List Of Categories <a href="/Categorias/create" class="btn btn-info">Create</a></h1>

  </tbody>
  
  


@stop