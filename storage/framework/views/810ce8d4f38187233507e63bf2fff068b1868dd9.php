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
        <h1>Employees</h1>
        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        	<td> <?php echo e($employee['name']); ?> </td>
        	<td> <?php echo e($employee['birthday']); ?> </td>
        	<td> <?php echo e($employee['country']); ?> </td>
        	<td> <?php echo e($employee['first_day_in_company']); ?> </td>
		<td><a href="<?php echo e(route('employee.index')); ?>"  
		   onclick="event.preventDefault();
		    document.getElementById(
		      'delete-form-<?php echo e($employee->id); ?>').submit();">
		 Delete 
		</a>
		</td>
		<form id="delete-form-<?php echo e($employee->id); ?>" 
		  + action="<?php echo e(route('employee.destroy', $employee->id)); ?>"
		  method="post">
		<?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
		</form>
        </tr>
	</tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<input type="button" value="Add" onclick="display_add('/company');">
	<form id="/company" method="POST" style="display:none;">
	<?php echo csrf_field(); ?>
	<br>
		<div>
        		<label for="name">Name :</label>
			<input type="text" id="name" name="name">
		</div>
		<br>
		<div>
        		<label for="name">Birthday :</label>
			<input type="text" id="birthday" name="birthday">
		</div>
		<br>
		<div>
        		<label for="name">Country :</label>
			<input type="text" id="name" name="country">
		</div>
		<br>
		<br>
		<div>
        		<label for="name">First day in company :</label>
			<input type="text" id="first_day_in_company" name="first_day_in_company">
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
 
<?php /**PATH /home/mc/Documents/projet_erp/resources/views/employee.blade.php ENDPATH**/ ?>