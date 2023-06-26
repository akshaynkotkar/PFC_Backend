<?php
session_start();
include('../config/dbcon.php');
if(isset($_POST['image1']))
{
    $response=0;
    $image1 = $_FILES['image1']['name'];

    $path= "slider1";
    $image_ext1=pathinfo($image1, PATHINFO_EXTENSION);


    $update_filename1=time().'.'.$image_ext1;
    $response=0;



    $cate_query1= "INSERT INTO slider1  (slide_1)
    VALUES ('$update_filename1')";


    $cate_query_run1=mysqli_query($con, $cate_query1);

if($cate_query_run1)
{
    move_uploaded_file($_FILES['image1']['tmp_name'], $path.'/'.$update_filename1);
 
    $response=1;
    if ($response==1) {
     // echo "<script type='text/javascript'>alert('File sucessfully uploaded');</script>";
      //header( "refresh:5; loaction:video.php" );
      echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='slider1.php'};</script>";
      
  } else {
      echo "<script>if(confirm('Your Record not inserted successfully!please insert again')){document.location.href='slider1.php'};</script>";
  }




}
}
elseif(isset($_POST['image2']))
{
    $response=0;
    $image1 = $_FILES['image2']['name'];

    $path= "slider1";
    $image_ext1=pathinfo($image1, PATHINFO_EXTENSION);


    $update_filename1=time().'.'.$image_ext1;
    $response=0;



    $cate_query1= "INSERT INTO slider1  (slide_2)
    VALUES ('$update_filename1')";


    $cate_query_run1=mysqli_query($con, $cate_query1);

if($cate_query_run1)
{
    move_uploaded_file($_FILES['image2']['tmp_name'], $path.'/'.$update_filename1);
 
    $response=1;
    if ($response==1) {
     // echo "<script type='text/javascript'>alert('File sucessfully uploaded');</script>";
      //header( "refresh:5; loaction:video.php" );
      echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='slider1.php'};</script>";
      
  } else {
      echo "<script>if(confirm('Your Record not inserted successfully!please insert again')){document.location.href='slider1.php'};</script>";
  }




}
}
elseif(isset($_POST['image3']))
{
    $response=0;
    $image1 = $_FILES['image3']['name'];

    $path= "slider1";
    $image_ext1=pathinfo($image1, PATHINFO_EXTENSION);


    $update_filename1=time().'.'.$image_ext1;
    $response=0;



    $cate_query1= "INSERT INTO slider1  (slide_3)
    VALUES ('$update_filename1')";


    $cate_query_run1=mysqli_query($con, $cate_query1);

if($cate_query_run1)
{
    move_uploaded_file($_FILES['image3']['tmp_name'], $path.'/'.$update_filename1);
 
    $response=1;
    if ($response==1) {
     // echo "<script type='text/javascript'>alert('File sucessfully uploaded');</script>";
      //header( "refresh:5; loaction:video.php" );
      echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='slider1.php'};</script>";
      
  } else {
      echo "<script>if(confirm('Your Record not inserted successfully!please insert again')){document.location.href='slider1.php'};</script>";
  }




}
}
elseif(isset($_POST['image4']))
{
    $response=0;
    $image1 = $_FILES['image4']['name'];

    $path= "slider1";
    $image_ext1=pathinfo($image1, PATHINFO_EXTENSION);


    $update_filename1=time().'.'.$image_ext1;
    $response=0;



    $cate_query1= "INSERT INTO slider1  (slide_4)
    VALUES ('$update_filename1')";


    $cate_query_run1=mysqli_query($con, $cate_query1);

if($cate_query_run1)
{
    move_uploaded_file($_FILES['image4']['tmp_name'], $path.'/'.$update_filename1);
 
    $response=1;
    if ($response==1) {
     // echo "<script type='text/javascript'>alert('File sucessfully uploaded');</script>";
      //header( "refresh:5; loaction:video.php" );
      echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='slider1.php'};</script>";
      
  } else {
      echo "<script>if(confirm('Your Record not inserted successfully!please insert again')){document.location.href='slider1.php'};</script>";
  }




}

}
elseif(isset($_POST['add_category_btn']))
{
    $title = $_POST['title'];
    
    $description = $_POST['description'];
    

    $image = $_FILES['image']['name'];
    $path= "uploads";

    $image_ext=pathinfo($image, PATHINFO_EXTENSION);
    $filename=time().'.'.$image_ext;

    $cate_query= "insert into gallery (title,description,image)
    values ('$title','$description','$filename')";

    $cate_query_run=mysqli_query($con, $cate_query);

    if($cate_query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='index.php'};</script>";
   

    }
    else
    {
        echo "not reddy";
    }
}
else if(isset($_POST['update_category_btn']))
{
    $category_id=$_POST['id'];
    $title = $_POST['title'];
    
    $description = $_POST['description'];


    $new_image = $_FILES['image']['name'];
    $old_image=$_POST['old_image'];
    if($new_image!="")
    {
       // $update_filename=$new_image;
        $image_ext=pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename=time().'.'.$image_ext;
    }
    else{
        $update_filename=$old_image;
    }

    $update_query= "UPDATE gallery SET title='$title', description='$description',image=' $update_filename ' where id='$category_id' ";
    $update_query_run= mysqli_query($con,$update_query);
    if($update_query_run)
    {
        if($_FILES['image']['name']!="")
        {
            move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$update_filename);
            if(file_exists("uploads/".$old_image))
            {
                unlink("uploads/".$old_image);
            }
        }
        echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='index.php'};</script>";
        
    }
    echo "done bhawa";


}
else if(isset($_POST['delete_category_btn']))
{
    $category_id=mysqli_real_escape_string($con,$_POST['category_id']);

    $category_query="SELECT * from gallery where id='$category_id'";
    $category_query_run= mysqli_query($con, $category_query);
    $category_data= mysqli_fetch_array($category_query_run);

    $image=$category_data['image'];
    $delete_query="DELETE from gallery where id='$category_id'";
    $delete_query_run= mysqli_query($con, $delete_query);

    if($delete_query_run)
    {
        echo "ok delete";
        if(file_exists("uploads/".$old_image))
            {
                unlink("uploads/".$old_image);
            }
            echo "<script>if(confirm('Your Record Sucessfully Inserted. ')){document.location.href='index.php'};</script>";

    }
}



?>