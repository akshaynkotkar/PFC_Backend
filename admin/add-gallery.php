
<?php include('includes/header.php');?>




<div class="container" left:300px>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Gallery</h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                   <div class="col-md-12">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter Title" >
                    </div>
               

                </div>
                <div class="col-md-12">
                    <label for="">Description</label>
                    <textarea rows="3"  name="description" placeholder="Enter discription" class="form-control">
                    </textarea>
                </div>
                <div class="col-md-12">
                    <label for="">Upload image</label>
                    <input type="file"  name="image" class="form-control" >

      
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" name="add_category_btn">save</button>
                </div>
            </div>
                   </form>
                  </div>
                
            </div>
        </div>
    </div>
    
</div>
<?php include('includes/footer.php'); ?>

