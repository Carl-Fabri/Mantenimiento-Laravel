<label for="Nombre">Nombre marca:</label>
<input name="name" id="Nombretxt" value="{{$brand->name}}" type="text">
<br>

<label for="OtherName">Commercial name:</label>
<input name="commercial_name" id="OtherNamestxt" value="{{$brand->commercial_name}}" type="text">
<br>

<label for="Keywords">Keywords:</label>
<input name="keywords" id="Keywordstxt" value="{{$brand->keywords}}" type="text">
<br>

<input type="submit" value="Guardar datos">
<br>