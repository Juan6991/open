
@extends('app')
@section('content')
<table class="table table-bordered" id="tablecategories">
 <thead>
    <tr>
        <th class="text-center"> Id </th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
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
        <tr>
            <td class="text-center">{{ $Categorias->id }}</td>
            <td class="text-center">{{ $Categorias->name }}</td>
            <td class="text-center">{{ $Categorias->descripcion }}</td>
           <td>
           <a href="/Categorias" class="btn btn-info">Regresar</a>
           </td>
        </tr>      
    </tbody>
    </table>
        

@stop