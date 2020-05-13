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
                    <div class="card-header">Welcome Section Create</div>
                    <div class="card-body">
                        <form method="post" action="view/back/welcome/store.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Mobile Number:</label>
                                <input name="mobileNumber" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="file2">Choose Logo:</label>
                                        <label class="custom-file">
                                            <input name="logoName" type="file" id="file2" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="file2">Choose Background Image:</label>
                                        <label class="custom-file">
                                            <input name="backgroundImageName" type="file" id="file2" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Welcome Text:</label>
                                <input name="welcomeText" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Text">
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-12">
                                        <label for="exampleInputPassword1">Designation:</label>
                                        <input name="designation" class="form-control" id="exampleInputPassword1" type="text" placeholder="Designation">
                                    </div>

                                </div>
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