<?php include('includes/header.php');?>

<body>
    <div class="container mt-2" >
    <form action="code.php" method="POST" enctype="multipart/form-data">
        <h3 class="mb-1">Slider </h3>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#Image1">Image1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Image2">image2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Image3"> Image3</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#Image4"> Image4</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="Image1">
                <div class="row border g-0 rounded shadow-sm">
                <div class="col-md-5" >
        <label for="">Upload image</label>
        <input type="file"  name="image1" class="form-control" >
        <br>
            <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary" name="image1">upload</button>
                </div>

    </div>
                </div>
            </div>
            <div class="tab-pane" id="Image2">
                <div class="row border g-0 rounded shadow-sm">
                <div class="col-md-5" >
                       <label for="">Upload image</label>
                       <input type="file"  name="image2" class="form-control" >
                       <br>
                    <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary" name="image2">upload</button>
                    </div>

                </div>
                </div>
            </div>
            <div class="tab-pane" id="Image3">
                <div class="row border g-0 rounded shadow-sm">
                <div class="col-md-5" >
                       <label for="">Upload image</label>
                       <input type="file"  name="image3" class="form-control" >
                       <br>
                    <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary" name="image3">upload</button>
                    </div>
                    

                </div>
                </div>
            </div>
            <div class="tab-pane" id="Image4">
                <div class="row border g-0 rounded shadow-sm">
                <div class="col-md-5" >
                       <label for="">Upload image</label>
                       <input type="file"  name="image4" class="form-control" >
                       <br>
                    <div class="col-md-12 ">
                    <button type="submit" class="btn btn-primary" name="image4">upload</button>
                    </div>
                    

                </div>
                </div>
            </div>
        </div>
    </form>
    </div>
    

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script


</body>
<?php include('includes/footer.php'); ?>