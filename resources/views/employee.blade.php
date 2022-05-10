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
        <h1>Employees</h1>
        @foreach($employees as $employee)
        <tr>
        	<td> {{$employee['name']}} </td>
        	<td> {{$employee['birthday']}} </td>
        	<td> {{$employee['country']}} </td>
        	<td> {{$employee['first_day_in_company']}} </td>
		<td><a href="{{ route('employee.index') }}"  
		   onclick="event.preventDefault();
		    document.getElementById(
		      'delete-form-{{$employee->id}}').submit();">
		 Delete 
		</a>
		</td>
		<form id="delete-form-{{$employee->id}}" 
		  + action="{{ route('employee.destroy', $employee->id) }}"
		  method="post">
		@csrf @method('DELETE')
		</form>
        </tr>
	</tr>
        @endforeach
	<input type="button" value="Add" onclick="display_add('/company');">
	<form id="/company" method="POST" style="display:none;">
	@csrf
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
 
