
<h1>Creacion de datos</h1>
<form action="{{url('/brands/')}}" method="post" enctype="multipart/form-data">

    @csrf
    @include('brands.form');

</form>