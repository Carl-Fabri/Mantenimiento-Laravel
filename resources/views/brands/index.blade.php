@extends('layouts.app')
@section('content')
<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
            {{Session::get('mensaje')}}
        
        </strong>
    
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

<a href="{{url('brands/create')}}" class="btn btn-success">Create</a>
<br/>
<br/>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre comercial</th>
            <th scope="col">Etiquetas</th>
            <th scope="col">*</th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td>{{$brand->commercial_name}}</td>
            <td>{{$brand->keywords}}</td>
            <td> 
                <a href="{{url('/brands/'. $brand->id .'/edit') }}" class="btn btn-warning" >
                    Editar
                </a>

                
                <form action="{{ url('/brands/'.$brand->id)}}" class="d-inline" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('¿Estas de seguro de que quieres borrar la marca?')"></button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>

</div>
@endsection