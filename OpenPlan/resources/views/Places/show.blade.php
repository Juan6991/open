
@extends('app')
@section('content')
<table class="table table-bordered" id="tablecategories">
 <thead>
    <tr>
        <th class="text-center"> Nombre </th>
        <th class="text-center">Descripcion</th>
        <th class="text-center">Telefono</th>
        <th class="text-center">Hora apertura</th>
        <th class="text-center">Hora cierre</th>

    </tr>
  </thead>
    <tbody>
        <tr>
            <td class="text-center">{{ $place->id }}</td>
            <td class="text-center">{{ $place->name }}</td>
            <td class="text-center">{{ $place->descripcion }}</td>
            <td class="text-center">{{ $place->hora_apertura }}</td>
            <td class="text-center">{{ $place->hora_cierre }}</td>
           <td>
           <a href="/place" class="btn btn-info">Regresar</a>
           </td>
        </tr>      
    </tbody>
    </table>
        

@stop