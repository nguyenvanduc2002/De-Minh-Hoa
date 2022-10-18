<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
	<div class="row">
		<div class="col-12 text-center pt-5">
			<h1 class="display-one mt-5">Student Database</h1>
			<div class="text-left"><a href="/student" class="btn btn-outline-primary">Student List</a></div>

			<form id="edit-frm" method="POST" action="" class="border p-3 mt-2">
				<div class="control-group col-6 text-left">
					<label for="name">Name</label>
					<div>
						<input type="text" id="name" class="form-control mb-4" name="name"
							placeholder="Enter Name" value="<?php echo $student->name; ?>"
							required>
					</div>
				</div>
				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Address</label>
					<div>
						<textarea id="address" class="form-control mb-4" name="address"
							placeholder="Enter Address" rows="" required><?php echo $student->address; ?></textarea>
					</div>
				</div>

				<div class="control-group col-6 mt-2 text-left">
					<label for="body">Birth</label>
					<div>
						<input type="text" id="birth" class="form-control mb-4" name="birth"
							placeholder="Enter Birth" value="<?php echo $student->birth; ?>"
							required>
					</div>
				</div>
				<?php echo method_field('PATCH'); ?>
				<div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save Update</button></div>
			</form>
		</div>
	</div>
</div>  

</body>
</html><?php /**PATH C:\Laravel\project03\resources\views/student/edit.blade.php ENDPATH**/ ?>