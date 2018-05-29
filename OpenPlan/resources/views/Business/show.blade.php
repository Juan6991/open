
@extends('app')
@section('content')
<table class="table table-bordered" id="tablebusiness">
 <thead>
    <tr>
        <th class="text-center"> Id </th>
        <th class="text-center">Nombre</th>
        <th class="text-center">Descripción</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Direccion</th>

    </tr>
  </thead>
    <tbody>
        <tr>
            <td class="text-center">{{ $business->id }}</td>
            <td class="text-center">{{ $business->name }}</td>
            <td class="text-center">{{ $business->descripcion }}</td>
            <td class="text-center">{{ $business->telefono }}</td>
            <td class="text-center">{{ $business->direccion }}</td>

           <td>
           <a href="/Business" class="btn btn-info">Regresar</a>
           </td>
        </tr>      
    </tbody>
    </table>
        

@stop