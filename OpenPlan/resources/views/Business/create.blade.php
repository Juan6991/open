@extends('app')
@section('content')


            <form action="/Business" method="post">
                <input type="text" placeholder="Nombre" name="name" class="form-control">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <textarea name="descripcion" placeholder="Descripcion" name="Descripcion" class="form-control">
                </textarea>
                <td>
                <input type="submit" class="btn btn-success" value="guardar">
                </td>
            </form>
            <td>
           <a href="/business" class="btn btn-info">Regresar</a>
           </td>
@stop