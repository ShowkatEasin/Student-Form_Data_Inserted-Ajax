<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    

<div class="container mt-5">
    <div class="row">
        <div class="col-md-5 border border-info rounded p-3">
            <div class="msg">
               
            </div>
            <h4>Add Student Form</h4>
            <div class="form-group mt-2">
                <label for="studentName">Student Name</label>
                <input type="text" id="studentName" class="studentName form-control">
            </div>

            <div class="form-group mt-2">
                <label for="fName">Father's Name</label>
                <input type="text" id="fName" class="fName form-control">
            </div>

            <div class="form-group mt-2">
                <label for="fName">Mother's Name</label>
                <input type="text" id="mName" class="mName form-control">
            </div>

            <div class="form-group mt-2">
                <label for="email">Email Address</label>
                <input type="text" id="email" class="email form-control">
            </div>

            <div class="form-group mt-2">
                <label for="status">Status</label>
               <select id="status" class="status form-control">
               <option value="">--Select Status--</option>
               <option value="1">Active</option>
               <option value="2">Inactive</option>
               </select>
            </div>
            <button class="addStudent btn btn-info mt-3">Add Student</button>
            
        </div>
        <div class="col-md-7 border border-info rounded">
            <h4 class="mt-3">Student Data</h4>
            <button class="addNewStudent btn btn-success mt-3">Add New Student</button>
            <table class="table">
                <thead>
                    <tr>
                        <th>SL No.</th>
                        <th>Student Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Email Address</th>
                        <th>Status</th>
                        <th colspan ="2">Action</th>
                    </tr>
                </thead>
                <tbody class="tdata">
                    
                </tbody>
            </table>
        </div>
    </div>
</div>








<script src="jquery.3.6.1.js"></script>
<script src="app.js"></script>
</body>
</html>

