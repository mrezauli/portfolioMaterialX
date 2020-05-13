<?php

include_once("../../includes/header.php");
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
                    <div class="card-header">Skills Subsection Create</div>
                    <div class="card-body">
                        <form method="post" action="view/back/resume/skills/store.php" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Your Mobile Number:</label>
                                <input name="mobileNumber" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Mobile Number">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Text:</label>
                                <input name="skillsText" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Text">
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="file2">Choose Skills Image:</label>
                                        <label class="custom-file">
                                            <input name="skillsImage" type="file" id="file2" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills One Name:</label>
                                <input name="skillsOneName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills One Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills One Percentage:</label>
                                <input name="skillsOnePercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills One Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Two Name:</label>
                                <input name="skillsTwoName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Two Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Two Percentage:</label>
                                <input name="skillsTwoPercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Two Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Three Name:</label>
                                <input name="skillsThreeName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Three Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Three Percentage:</label>
                                <input name="skillsThreePercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Three Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Four Name:</label>
                                <input name="skillsFourName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Four Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Four Percentage:</label>
                                <input name="skillsFourPercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Four Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Five Name:</label>
                                <input name="skillsFiveName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Five Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Five Percentage:</label>
                                <input name="skillsFivePercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Five Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Six Name:</label>
                                <input name="skillsSixName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Six Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Six Percentage:</label>
                                <input name="skillsSixPercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Six Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Seven Name:</label>
                                <input name="skillsSevenName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Seven Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Seven Percentage:</label>
                                <input name="skillsSevenPercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Seven Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Eight Name:</label>
                                <input name="skillsEightName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Eight Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Eight Percentage:</label>
                                <input name="skillsEightPercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Eight Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Nine Name:</label>
                                <input name="skillsNineName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Nine Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Nine Percentage:</label>
                                <input name="skillsNinePercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Nine Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Ten Name:</label>
                                <input name="skillsTenName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Ten Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Ten Percentage:</label>
                                <input name="skillsTenPercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Ten Percentage">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Eleven Name:</label>
                                <input name="skillsElevenName" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Eleven Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Skills Eleven Percentage:</label>
                                <input name="skillsElevenPercentage" class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Enter Skills Eleven Percentage">
                            </div>

                            
                            <button type="submit" class="btn btn-default">Create</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid-->


<?php

include_once("../../includes/footer.php");
?>