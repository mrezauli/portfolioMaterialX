<?php

include_once("../includes/header.php");
?>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Create Page</li>
            </ol>
            <div class="container">
                <div class="card card-register mx-auto mt-5">
                    <div class="card-header">About Me Section Create</div>
                    <div class="card-body">
                        <form method="post" action="view/back/aboutMe/store.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Mobile Number:</label>
                                <input name="mobileNumber" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">My Story:</label>
                                <input name="myStory" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter My Story">
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="file2">Choose Portfolio Iamge :</label>
                                        <label class="custom-file">
                                            <input name="portfolioImage" type="file" id="file2" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Portfolio Name:</label>
                                <input name="portfolioName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Portfolio Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Graduate In:</label>
                                <input name="graduateIn" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Graduation">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address:</label>
                                <input name="address" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Address">
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email:</label>
                                <input name="email" class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website:</label>
                                <input name="website" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Website">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook:</label>
                                <input name="facebook" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Facebook Link">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin:</label>
                                <input name="linkedin" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Linkedin Link">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Github:</label>
                                <input name="github" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Github Link">
                            </div>
                            
                            <button type="submit" class="btn btn-default">Create</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->


<?php

include_once("../includes/footer.php");
?>