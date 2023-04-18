@if(Session::has('mensaje'))
    {{Session::get('mensaje')}}
@endif

<a href="{{url('brands/create')}}">Create</a>

<table>
    <thead>
        <tr>
            <th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Nombre comercial</th>
                <th>Etiquetas</th>
                <th>*</th>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td>{{$brand->commercial_name}}</td>
            <td>{{$brand->keywords}}</td>
            <td> 
                <a href="{{url('/brands/'. $brand->id .'/edit') }}">
                    Editar
                </a>

                
                <form action="{{ url('/brands/'.$brand->id)}}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" value="Delete" onclick="return confirm('¿Estas de seguro de que quieres borrar la marca?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>