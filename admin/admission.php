<?php include('includes/header.php');?>

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
               <h4> Admission Details</h4>
            </div>
            <div class="card-body">
                <table class="table" table-bordered table-striped>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> Name</th>
                            <th> Course</th>
                            <th> Branch</th>
                            <th> College Name</th>
                            <th> Address</th>
                            <th>Contact No</th>
                            
                            <th>Email</th>
                           
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('assets/function/myfunction.php');
                          $contact= getAll("admission");
                          if(mysqli_num_rows($contact)>0)
                          {
                            foreach($contact as $item)
                            {
                                ?>
                                    <tr>
                                        <td><?=$item['id']; ?></td>
                                        <td><?=$item['fname']; ?></td>
                                        <td><?=$item['course']; ?></td>
                                        <td><?=$item['branch']; ?></td>
                                        <td><?=$item['college']; ?></td>
                                        <td><?=$item['address']; ?></td>
                                        <td><?=$item['phone']; ?></td>
                                        <td><?=$item['email']; ?></td>
                                        <td><?=$item['feedback']; ?></td>




                                    </tr>

                                 <?php

                            }
                            
                                 
                                
                            
                          }
                          else
                          {
                                 echo "record not found";
                          }



                        ?>

                        
                    </tbody>

                </table>
            </div>

        </div>
    </div>
    
</div>
<?php include('includes/footer.php');?>