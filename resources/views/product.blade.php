<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <h1>Products</h1>
        @foreach($products as $product)
        <tr>
        	<td> {{$product['name']}} </td>
        	<td> {{$product['price']}} </td>
        	<td> {{$product['tax']}} </td>
        	<td> {{$product['stock']}} </td>
		<td><a href="{{ route('product.index') }}"  
		   onclick="event.preventDefault();
		    document.getElementById(
		      'delete-form-{{$product->id}}').submit();">
		 Delete 
		</a>
		</td>
		<form id="delete-form-{{$product->id}}" 
		  + action="{{ route('product.destroy', $product->id) }}"
		  method="post">
		@csrf @method('DELETE')
		</form>
        </tr>
	</tr>
        @endforeach
                <input type="button" value="Add" onclick="display_add('/product');">
	<form id="/product" method="POST" style="display:none;">
	@csrf
	<br>
		<div>
        		<label for="name">Name :</label>
			<input type="text" id="name" name="name">
		</div>
		<br>
		<div>
        		<label for="name">Price :</label>
			<input type="text" id="price" name="price">
		</div>
		<br>
		<div>
        		<label for="name">Tax :</label>
			<input type="text" id="tax" name="tax">
		</div>
		<br>
		<div>
        		<label for="name">Stock :</label>
			<input type="text" id="stock" name="stock">
		</div>
		<br>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	 

	</body>
</html>
<script type="text/javascript">
function display_add(id)
{
	divInfo = document.getElementById(id);
 
	if (divInfo.style.display == 'none')
		divInfo.style.display = 'block';
	else
		divInfo.style.display = 'none';
 
}
</script>
