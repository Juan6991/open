@extends('app')
@section('content')

<style type="text/css">
      body {

                font-family:Arial, Verdana, Helvetica, sans-serif;
                font-size: 18px;
                background-image: url('/imagenes/fondo2.jpg');
                background-color: #FF0000;
            }
</style>
            <form action="/Categorias" method="post">
                <input type="text" placeholder="Nombre" name="name" class="form-control">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <textarea name="descripcion" placeholder="Descripcion" class="form-control">
                </textarea>
                <td>
                <input type="submit" class="btn btn-success" value="guardar">
                </td>
            </form>
            <td>
           <a href="/Categorias" class="btn btn-info">Regresar</a>
           </td>
@stop