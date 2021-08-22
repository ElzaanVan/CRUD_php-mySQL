<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Todo List</title>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <center>
                <h1>Todo</h1>
            </center>
            <div class="col-md-10 col-md-offset-1">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#taskModal">Add Task</button>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Task</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td class="col-md-10">Mark</td>
                            <td><a href="" class="btn btn-primary btn-sm">Update</a></td>
                            <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-outline-dark float-right">Print</button>
            </div>
        </div>
    </div>


    <!--ADD TASK MODAL-->
    <div class="modal" tabindex="-1" id="taskModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group">
                            <label for="task">Task Name</label>
                            <input type="text" value="Your Task" name="task" id="task" class="form-control" required>
                            <input type="submit" value="send" name="send" class="btn btn-success btn-small mt-3">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>