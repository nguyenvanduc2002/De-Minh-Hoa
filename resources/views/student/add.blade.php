<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form id="add-frm" method="POST" action="" class="border p-3 mt-2">
        <div class="control-group col-6 text-left">
            <label for="title">Name</label>
            <div>
                <input type="text" id="name" class="form-control mb-4" name="name"
                    placeholder="Enter Name" required>
            </div>
        </div>
        <div class="control-group col-6 text-left mt-2">
            <label for="body">Address</label>
            <div>
                <textarea id="address" class="form-control mb-4" name="address"
                    placeholder="Enter Address" rows="" required></textarea>
            </div>
        </div>
        <div class="control-group col-6 text-left mt-2">
            <label for="body">Birth</label>
            <div>
                <input type="text" id="birth" class="form-control mb-4" name="birth"
                    placeholder="Enter Birth" required>
            </div>
        </div>

        @csrf

        <div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Add New</button></div>
    </form>
</div>
</div>
</div>

</body>
</html>