@include('../includes/header')
@include('../includes/nav')
<div class="container">
	<h2 class="text-center">Laravel Search Display Page</h2>
    <br/>
    <div class="col-md-3">
        @include('../resources/searchform')
    </div>
	<div class="col-md-9" id="post-data">

   @if (!empty($searchResult))
   @foreach($searchResult as $product)
   <div>
       <h3><a href="">{{ $product->product_name }}</a></h3>
       <p>{{ str_limit($product->description, 100) }}</p>
   
   
       <div class="text-right">
           <button class="btn btn-success">Read More</button>
       </div>
   
   
       <hr style="margin-top:5px;">
   </div>
   
   @endforeach
   @else
       No product has been founded matching the name you have typed!
   @endif


</div>
</div>


<div class="ajax-load text-center" style="display:none">
<p>Loading More post</p>
</div>
@include('../includes/footer')