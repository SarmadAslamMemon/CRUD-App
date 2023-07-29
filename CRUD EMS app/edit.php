<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>EMS</title>
</head>

<body>




    <div class="row ">


        <div class="col-md-12 text-center mt-3">

            <h2>Employee Detail</h2>

        </div>


    </div>

    <div class="row">

        <div class="col-md-12">

            <form method="POST" action="update.php" class="p-5">

            <input type="hidden"  id="id"  name="id"/>
                <div class="row">


                    <!-- name  label -->

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control " id="email" name="email">
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control " id="phone" name="phone">
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>National ID</label>
                            <input type="Number" class="form-control " id="cnic" name="cnic">
                        </div>
                    </div>









                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Department</label>
                            <input type="text" class="form-control " id="department" name="department">
                        </div>
                    </div>




                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Salary</label>
                            <input type="number" class="form-control " id="salary" name="salary">
                        </div>
                    </div>


                    <div class="col-md-12">

                    
                    <div >
                            <label >Gender</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
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


   
        </div>
    </div>



    <script>
         let url=window.location.search;
         let param= new URLSearchParams(url);
         let id = param.get('id')

         fetch(`http://localhost/tASK%20NAV/getemp.php?id=${id}`)
         .then(result=>result.json())
            .then(data=>

            {
                document.getElementById('id').value=data[0].id
                document.getElementById('name').value=data[0].name
                document.getElementById('email').value=data[0].email
                document.getElementById('cnic').value=data[0].cnic
                document.getElementById('phone').value=data[0].phone
                document.getElementById('department').value=data[0].department
                document.getElementById('salary').value=data[0].salary
                document.getElementById('gender').value=data[0].gender

            }


            )
    </script>

    </body>
    </html>