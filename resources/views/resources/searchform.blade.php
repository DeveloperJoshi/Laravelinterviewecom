
{{Form::open(['url' => 'searchproducts', 'method' => 'POST'])}} 
<div class="form-group">
   
{{Form::text('searchItem','',['class'=>'form-control','placeholder'=>'search product by name'])}}
</div>
<div class="form-group">
{{ Form::submit('Search',['class'=>'btn btn-primary']) }}
</div>
{{Form::close()}}