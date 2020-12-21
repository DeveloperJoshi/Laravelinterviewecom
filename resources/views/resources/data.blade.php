@foreach($products as $product)
<div>
	<h3><a href="">{{ $product->product_name }}</a></h3>
	<p>{{ str_limit($product->description, 100) }}</p>
	<div class="text-left">
		Rs {{$product->price}}
	</div>
	<div class=" text-right">
		<p class="btn-holder"><a href="{{ url('add-to-cart/'.$product->product_id) }}" class="btn btn-warning btn-block add-to-cart text-center" role="button">Add to cart</a> </p>
	</div>
	<hr style="margin-top:5px;">
</div>
@endforeach