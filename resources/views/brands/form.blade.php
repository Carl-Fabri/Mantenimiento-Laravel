<h1>{{$modo}} marca</h1>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group">

<label for="Nombre">Nombre marca:</label>
<input name="name" class="form-control" id="Nombretxt" value="{{isset($brand->name)?$brand->name:old('name') }}" type="text">
</div>
<div class="form-group">

<label for="OtherName">Commercial name:</label>
<input name="commercial_name" class="form-control" id="OtherNamestxt" value="{{isset($brand->commercial_name)?$brand->commercial_name:''}}" type="text">
</div>
<div class="form-group">

<label for="Keywords">Keywords:</label>
<input name="keywords" class="form-control" id="Keywordstxt" value="{{isset($brand->keywords)?$brand->keywords:''}}" type="text">
</div>

<br/>

<input type="submit" class="btn btn-success" value="{{$modo}} datos">

<a href="{{url('brands/')}}" class="btn btn-primary">Home</a>
<br>
