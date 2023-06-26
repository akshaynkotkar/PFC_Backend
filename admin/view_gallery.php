
<?php include('includes/header.php');?>





<div class="container" left:300px>
    <div class="row">
        <div class="col-md-12">
            <?php
            include('assets/function/myfunction.php');
            if(isset($_GET['id']))
            {
                $id= $_GET['id'];
                $category= getByID("gallery",$id);

                if(mysqli_num_rows($category) > 0)
                {
                    $data=mysqli_fetch_array($category);

                
                ?>
                 <div class="card">
                <div class="card-header">
                    <h4>Edit Gallery</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                   <div class="col-md-6">
                    <input type="hidden" name="category_id" value="<?= $data['id'] ?>">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="name" value="<?= $data['title'] ?>" placeholder="enter category name" >
                    </div>
             
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea rows="3"  name="description" placeholder="Enter discription" class="form-control">
                        <?=$data['description'] ?>
                    </textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Upload image</label>
                    <input type="file"  name="image" class="form-control" >
                    <label for="">Current image</label>
                    <input type="hidden" name="old_image" value="<?= $data['image']?>">
                    <img src="uploads/<?=$data['image'] ?>" height="50px" width="50px" alt="">

                </div>
                
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="update_category_btn">Update</button>
                </div>
            </div>
                   </form>
                  </div>
                
            </div>
                


                <?php
                }
                else{
                    echo "category not found";
                }

            }
            else{
                  echo "Id missing from url";
            }

            ?>
           
        </div>
    </div>
    
</div>
<?php include('includes/footer.php'); ?>