<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>EMS</title>
</head>

<body>


<div class="container ">

    <div class="row">


        <div class="col-md-12 text-center mt-3">

            <h2>Employee Management System</h2>

        </div>


    </div>

    <div class="row">

        <div class="col-md-12">

            <form method="POST" action="insertdata.php" class="mt-5" >

                <div class="row">


                    <!-- name  label -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Mr.Sarmad" id="name" name="name"   required>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control " placeholder="xyz@email.com" id="email" name="email" required>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control" placeholder="+923042090128" id="phone" name="phone" required>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>National ID</label>
                            <input type="Number" class="form-control" placeholder="4520823733721" id="cnic" name="cnic" required>
                        </div>
                    </div>









                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control" placeholder="Debugger" id="department" name="department" required>
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="number" class="form-control" placeholder="1000000" id="salary" name="salary" required>
                        </div>
                    </div>

                   
                    <div class="col-md-12">
                    <div><label >Gender</label>
                   
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Male" >
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>

                    </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mt-2">Submit</button>
                    </div>
                </div>

            </form>
        </div>


    </div>

    </form>
    </div>

    </div>


    <div class="container">

    <div class="row">

        <div class="col-md-12 mt-5">

            <table class="table table-bordered table-warning table-striped table-hover  ">
                <thead class="thead-dark">
                    <tr>
                        <th>S No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Cnic</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Action</th>

                    </tr>

                </thead>
                <tbody id="tbody">
                </tbody>
                <table>

        </div>
    </div>
</div>
    </div>

    <script>

        fetch('http://localhost/tASK NAV/view.php')
            .then(response => response.json())
            .then(json => {

                let tbody = document.getElementById('tbody')

                let tr = "";
                let sno = 1;
                for (let emp of json) {

                    tr += ` <tr>
                 <td>${sno++}</td>
                 <td>${emp.name}</td>
                 <td>${emp.email}</td>
                 <td>${emp.phone}</td>
                 <td>${emp.gender}</td>
                 <td>${emp.cnic}</td>
                 <td>${emp.department}</td>
                 <td>${emp.salary}</td>
                 <td>

                    <a href="edit.php?id=${emp.id}" class="btn btn-success">Edit</a>
                    <a href="delete.php?id=${emp.id}" class="btn btn-danger">Delete</a>
                 
                    </td>
                </tr>`;

                }
                tbody.innerHTML = tr;
            })
    </script>

</body>


</html>