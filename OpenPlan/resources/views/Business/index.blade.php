@extends('app')
@section('content')


 
<table class="table table-bordered" id="tablebusiness">
  <thead>
    <style>
              th { color: #07fad9; }
    </style>
    <tr>
        <th class="text-center"> Id </th>
        <th class="text-center">Name</th>
        <th class="text-center">Description</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Direccion</th>
    </tr>
  </thead>
   <style type="text/css">
      body {

                font-family:Arial, Verdana, Helvetica, sans-serif;
                font-size: 18px;
                background-image: url('/imagenes/maxresdefault.jpg');
                background-color: #FF0000;
            }
  </style>
  <tbody>
  @foreach($Business as $business)
        <tr>
            <td class="text-center">{{ $business->id }}</td>
            <td class="text-center">{{ $business->name }}</td>
            <td class="text-center">{{ $business->descripcion }}</td>
            <td class="text-center">{{ $business->telefono }}</td>
            <td class="text-center">{{ $business->direccion }}</td>
            <td>
               
 
            </td>
        </tr>
        
    @endforeach
    <h1  class="text-primary">My Business <a href="/business/create" class="btn btn-info">Create</a></h1>

  </tbody>
  
  


@stop