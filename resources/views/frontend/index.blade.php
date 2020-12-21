@include('../includes/header')


@include('../includes/nav')

<div class="container">
	<h2 class="text-center">Laravel Interview</h2>
    <br/>
    <div class="col-md-3">
		@include('../resources/searchform')
		{{Form::open(['url' => 'searchproducts', 'method' => 'POST','id'=>'categoryForm','class'=>'form-horizontal'])}} 
		<p class="text-center">Select Product Category</p>
		<select class="form-control">
			
		@foreach ($category as $category)
		
			<option value="{{$category->category_id}}">{{$category->category_name}}</option>
		@endforeach
	</select>
	{{Form::close()}}
	<br />
	{{Form::open(['url' => 'filters', 'method' => 'POST','id'=>'filterform','class'=>'form-horizontal'])}} 
	<p class="text-center">Filter Product From</p>
		<select class="form-control">
			<p>Select Product Category</p>
			<option value="0">Low to High</option>
			<option value="1">High to low</option>
			<option value="2">Newest</option>
			<option value="3">Oldest</option>
	</select>
	
	{{Form::close()}}
    </div>
	<div class="col-md-9" id="post-data">
		@include('../resources/data')
	</div>
</div>


<div class="ajax-load text-center" style="display:none">
	<p>Loading More post</p>
</div>
   

@include('../includes/footer')