<?php
session_start();
require  'dbcon.php';
?>
<body>
<?php include('includes/header.php'); ?>
   

  <div class="container mt-5">
  
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> 
                        Student View Details 
                        <a href="records.php" class="btn btn-danger float-end">Student Details</a>
                    </h4>
                </div>
                <div class="card-body">
  
                    <?php
                    if(isset($_GET['id']))
                    {
                        $student_id = mysqli_real_escape_string($con,$_GET['id'] );
                        $query  = "SELECT * FROM students WHERE id ='$student_id' ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            $student =  mysqli_fetch_array($query_run);
                             ?>

                             <div class="mb-3">
                             <label>Student Name</label>  
                             <p  class="form-control">
                             <?=$student['name'];?>
                             </p> 
                            </div>

                            <div class="mb-3">
                                <label>Gender</label>
                                <p  class="form-control">
                             <?=$student['gender'];?>
                             </p> 
                            </div>

                            

                             <div class="mb-3">
                             <label>Student Email</label>
                             <p  class="form-control">
                             <?=$student['email'];?>
                             </p>     
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <p  class="form-control">
                             <?=$student['password'];?>
                             </p> 
                            </div>


                                <div class="mb-3">
                                <label>Student Mobile</label>
                                <p  class="form-control">
                             <?=$student['mobile'];?>
                             </p> 
                            </div>

                               
                             <?php
                            }
                             else
                            {
                              echo "< h4>No Such ID Found</h4>";
                            }
                         }
                    ?> 
                         <a href="index.php" class="btn btn-dark float-end">Home</a>
                </div>
            </div>
        </div>
    </div>
  </div>


  <?php include('includes/footer.php'); ?>
 </body> 