<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    </head>
    <body>
        <h1>Products</h1>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        	<td> <?php echo e($product['name']); ?> </td>
        	<td> <?php echo e($product['price']); ?> </td>
        	<td> <?php echo e($product['tax']); ?> </td>
        	<td> <?php echo e($product['stock']); ?> </td>
		<td><a href="<?php echo e(route('product.index')); ?>"  
		   onclick="event.preventDefault();
		    document.getElementById(
		      'delete-form-<?php echo e($product->id); ?>').submit();">
		 Delete 
		</a>
		</td>
		<form id="delete-form-<?php echo e($product->id); ?>" 
		  + action="<?php echo e(route('product.destroy', $product->id)); ?>"
		  method="post">
		<?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
		</form>
        </tr>
	</tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <input type="button" value="Add" onclick="display_add('/product');">
	<form id="/product" method="POST" style="display:none;">
	<?php echo csrf_field(); ?>
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
<?php /**PATH /home/mc/Documents/projet_erp/resources/views/product.blade.php ENDPATH**/ ?>