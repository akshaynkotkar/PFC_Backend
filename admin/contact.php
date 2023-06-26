<?php include('includes/header.php');?>

<div class="container" >
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
               <h4> customer Details</h4>
            </div>
            <div class="card-body">
                <table class="table" table-bordered table-striped>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Contact no</th>
                            <th>Email</th>
                            <th>Place Of Residence</th>
                            <th>Select Branch</th>
                            <th>Select Course</th>
                            <th>Remarks</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('assets/function/myfunction.php');
                          $contact= getAll("contact_us");
                          if(mysqli_num_rows($contact)>0)
                          {
                            foreach($contact as $item)
                            {
                                ?>
                                    <tr>
                                        <td><?=$item['id']; ?></td>
                                        <td><?=$item['fname']; ?></td>
                                        <td><?=$item['lname']; ?></td>
                                        <td><?=$item['phone']; ?></td>
                                        <td><?=$item['email']; ?></td>
                                        <td><?=$item['place']; ?></td>
                                        <td><?=$item['branch']; ?></td>
                                        <td><?=$item['course']; ?></td>
                                        <td><?=$item['remark']; ?></td>




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