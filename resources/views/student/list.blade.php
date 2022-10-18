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
                <h1 class="display-one m-5">Student Database</h1>
                <div class="text-left"><a href="/student/create" class="btn btn-outline-primary">Add new
                    student</a></div>
    
                <table class="table mt-3  text-left">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col" class="pr-5">Address</th>
                            <th scope="col">Birth</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($student as  $item)
                        <tr>
                            <td>{!! $item->name !!}</td>
                            <td class="pr-5 text-right">{!! $item->address !!}</td>
                            <td>{!! $item->birth !!}</td>
                            <td><a href="student/{!! $item->id !!}/edit"
                                class="btn btn-outline-primary">Edit</a>
                                <button type="button" class="btn btn-outline-danger ml-1"
                                    onClick='showModel({!! $item->id !!})'>Delete</button></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">No students found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    
    <div class="modal fade" id="deleteConfirmationModel" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">Are you sure to delete this record?</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onClick="dismissModel()">Cancel</button>
                    <form id="delete-frm" class="" action="" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    function showModel(id) {
        var frmDelete = document.getElementById("delete-frm");
        frmDelete.action = 'student/'+id;
        var confirmationModal = document.getElementById("deleteConfirmationModel");
        confirmationModal.style.display = 'block';
        confirmationModal.classList.remove('fade');
        confirmationModal.classList.add('show');
    }
    
    function dismissModel() {
        var confirmationModal = document.getElementById("deleteConfirmationModel");
        confirmationModal.style.display = 'none';
        confirmationModal.classList.remove('show');
        confirmationModal.classList.add('fade');
    }
    </script>
</body>
</html>