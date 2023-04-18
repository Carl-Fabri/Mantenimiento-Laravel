<h1>{{$modo}} marca</h1>


<label for="Nombre">Nombre marca:</label>
<input name="name" id="Nombretxt" value="{{isset($brand->name)?$brand->name:''}}" type="text">
<br>

<label for="OtherName">Commercial name:</label>
<input name="commercial_name" id="OtherNamestxt" value="{{isset($brand->commercial_name)?$brand->commercial_name :''}}" type="text">
<br>

<label for="Keywords">Keywords:</label>
<input name="keywords" id="Keywordstxt" value="{{isset($brand->keywords)?$brand->keywords:''}}" type="text">
<br>

<input type="submit" value="{{$modo}} datos">

<a href="{{url('brands/')}}">Home</a>
<br>