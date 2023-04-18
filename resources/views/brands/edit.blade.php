

<form action="{{url('/brands/'.$brand->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}

    @include('brands.form',['modo' =>'Editar']);
</form>

