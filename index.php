<!DOCTYPE html>
<html lang="en">

<head>
    <title>School enrollment of clavax</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/index.css" />
    <style>
        .menu-item,
        .studentedit-icon {
            cursor: pointer;
        }
    </style>
</head>


<body>
    <div class="w-100" style="background:#ccc;">
        <div class="row">

            <div class="col-md-2 bg-white shadow-md p-0 pt-3">

                <div class="w-100 bg-white shadow" style="height:100vh;">
                    <ul class="list-group ">

                        <li class="list-group-item menu-item border-0 " data-item="Student List" id="studentlist-leftli"> &nbsp;&nbsp;&nbsp;<i class="fa fa-calendar" aria-hidden="true"></i> &nbsp;Student List</li>
                        <li class="list-group-item menu-item border-0" data-item="New Student" id="newstudent-leftli"> &nbsp;&nbsp;&nbsp;<i class="fa fa-address-card-o" aria-hidden="true"></i> &nbsp;New Student</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 p-5">
                <!-- start studen list -->
                <div class="studentList ">
                    <button class="btn btn-light px-3 mb-3 float-right" id="newstudent-btn">New Student</button>
                    <table class="table table-striped bg-light p-3">
                        <thead>
                            <tr>
                                <th>SNo</th>
                                <th>Student Name</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Mark %</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="studentList-tbody ">


                        </tbody>
                    </table>

                    <!--  start pagination design  -->
                    <div class="w-100 d-flex justify-content-center mt-4">
                        <div class="pagination" id="paginationDiv">
                           
                        </div>
                    </div>
                    <!--  end pagination design  -->
                </div>


                <!-- start new student code design -->
                <div class="newStudent bg-light w-100 p-4 d-none">
                    <h3>register new student</h3><br />
                    <form action="/insert.php" method="POST" id="newStudent_form">
                        <div class="form-group">
                            <label>Student Name</label>
                            <input required type="text" class="form-control" placeholder="Enter student name" name="name">
                        </div>

                        <div class="form-group">
                            <label>Father Name</label>
                            <input required type="text" class="form-control" placeholder="Enter father name" name="father">
                        </div>

                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input required type="date" class="form-control" name="dob">
                        </div>

                        <div class="form-group">
                            <label>Address </label>
                            <input required type="text" class="form-control" placeholder="Enter Address" name="address">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input required type="text" class="form-control" placeholder="Enter City" name="city">
                        </div>

                        <div class="form-group">
                            <label>State</label>
                            <input required type="text" class="form-control" placeholder="Enter State" name="state">
                        </div>
                        <div class="form-group">
                            <label>Pin No</label>
                            <input required type="number" class="form-control" placeholder="Enter pin no" name="pin">
                        </div>

                        <div class="form-group">
                            <label>Phone No</label>
                            <input required type="number" class="form-control" id="phone" placeholder="Enter phone no" name="phone">
                            <small class="phone_small text-danger"></small>
                        </div>


                        <div class="form-group">
                            <label>Email:</label>
                            <input required type="email" class="form-control" placeholder="Enter email" name="email">
                        </div>

                        <div class="form-group">
                            <label>Class</label>
                            <input required type="number" class="form-control" placeholder="Enter class" name="class">
                        </div>
                        <div class="form-group">
                            <label>Mark %</label>
                            <input required type="number" class="form-control" placeholder="60" name="mark">
                        </div>



                        <button type="submit" class="btn btn-primary" id="newStudent_btn">Submit</button>
                    </form>

                </div>

                <!-- start edit studen  -->
                <div class="studentEdit d-none bg-light w-100 p-4">
                    <h3>Student details Edit here</h3>
                    <br />
                    <form id="studentEdit_form">
                        <div class="form-group">
                            <input required type="hidden" class="form-control" id="editid" name="id">
                        </div>
                        <div class="form-group">
                            <label>Student Name</label>
                            <input required type="text" class="form-control" id="editname" placeholder="Enter student name" name="name">
                        </div>

                        <div class="form-group">
                            <label>Father Name</label>
                            <input required type="text" id="editfather" class="form-control" placeholder="Enter father name" name="father">
                        </div>

                        <div class="form-group">
                            <label>Date Of Birth</label>
                            <input required type="date" id="editdob" class=" form-control" name="dob">
                        </div>

                        <div class="form-group">
                            <label>Address </label>
                            <input required type="text" id="editaddress" class=" form-control" placeholder="Enter Address" name="address">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <input required type="text" id="editcity" class="form-control" placeholder="Enter City" name="city">
                        </div>

                        <div class="form-group">
                            <label>State</label>
                            <input required type="text" id="editstate" class="form-control" placeholder="Enter State" name="state">
                        </div>
                        <div class="form-group">
                            <label>Pin No</label>
                            <input required type="number" id="editpin" class=" form-control" placeholder="Enter pin no" name="pin">
                        </div>

                        <div class="form-group">
                            <label>Phone No</label>
                            <input required type="number" id="editphone" class=" form-control" placeholder="Enter phone no" name="phone">
                            <small class="phone_small text-danger"></small>
                        </div>


                        <div class="form-group">
                            <label>Email:</label>
                            <input required type="email" id="editemail" class=" form-control" placeholder="Enter email" name="email">
                        </div>

                        <div class="form-group">
                            <label>Class</label>
                            <input required type="number" id="editclass" class=" form-control" placeholder="Enter class" name="class">
                        </div>
                        <div class="form-group">
                            <label>Mark %</label>
                            <input required type="number" id="editmark" class=" form-control" placeholder="60" name="mark">
                        </div>
                        <button type="submit" class="btn btn-primary" id="studentEdit_btn">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="js/newStudent.js"></script>
    <script src="js/studentList.js"></script>
    <script src="js/index.js"></script>
    <script src="js/edit.js"></script>
    <script src="js/pagination.js"></script>
</body>

</html>