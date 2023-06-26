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
                            <th> Email</th>
                            <th> Phone</th>
                            <th> Password</th>
                            <th> Created At</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          include('assets/function/myfunction.php');
                          $contact= getAll("users");
                          if(mysqli_num_rows($contact)>0)
                          {
                            foreach($contact as $item)
                            {
                                ?>
                                    <tr>
                                        <td><?=$item['id']; ?></td>
                                        <td><?=$item['name']; ?></td>
                                        <td><?=$item['email']; ?></td>
                                        <td><?=$item['phone']; ?></td>
                                        <td><?=$item['password']; ?></td>
                                        <td><?=$item['created_at']; ?></td>
                                       




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