<?php
session_start();
require  'dbcon.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration Form</title>

</head> 

<style>
    body{
        background-image:url("Purple.jpg");
    }
</style>
    <body>
        <div class="container  mt-5">
            <div class="row"> 
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4> 
                                Student Registration Form
                                <a href="records.php" class="btn btn-success float-end">Student Details</a>
                            </h4>
                        </div> 
                        <div class="card-body">
                            <form name="myform" action="code.php" method="POST"  onsubmit="return validateform()">
                            
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input type="text" name="name"   id="studentName"   required="" class="form-control">
                                </div>
                                
                                <div class="mb-3">
                                    <label> Gender</label>
                                    <input type="text" id="gender" name="gender" required="" class="form-control"> 
                                </div>

                                <div class="mb-3">
                                    <label> Email</label>
                                    <input type="text" id="email" name="email"  required="" class="form-control"> 
                                </div>
                              
                                <div class="mb-3">
                                    <label> Password</label>
                                    <input type="password" id="password" name="password" required="" class="form-control"> 
                                </div>


                                <div class="mb-3">
                                    <label> Mobile</label>
                                    <input type="text" name="mobile" id="mobile_no" maxlength="10" class="form-control" required=""> 

                                </div>
                                    
                                <div class="mb-3">
                                    <button type="submit"  name="save_student" class="btn btn-primary">submit</button>
                                </div>
                            </form> 
                            <a href="index.php" value="" class="btn btn-dark float-end">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function validateform() {
               var name = document.myform.studentName.value;
               var password = document.myform.password.value;
               var mobile_no = document.myform.mobile_no.value;
               var email = document.getElementById('email');
      
               var str = /^([a-zA-Z\.]+)$/;
               var pat = /^([a-zA-Z0-9\.-_]+)@([a-zA-Z0-9]+)\.([a-z]{2,20})$/;
               var phoneno = /^\d{10}$/;
               if (!name.match(str)) {
                  alert("Name must be in characters");
                  return false;
               } else if (password.length < 6) {
                  alert("Password must be at least 6 characters long.");
                  return false;
               }
               else if (!mobile_no.match(phoneno)) {
                  alert("Mobile number must be Integer");
                  return false;
               } else if (!email.value.match(pat)) {
                  alert("Invalid mail format");
                  return false;
               }
            }  
         </script>
    </body>
</html>