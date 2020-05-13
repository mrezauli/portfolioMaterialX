<?php

include_once("includes/header.php");

?>

<?php
include_once ("../../vendor/autoload.php");

$_allData = new \App\back\Welcome\Welcome();

$_index = $_allData->index();

$_allDataOne = new \App\back\AboutMe\AboutMe();

$_indexOne = $_allDataOne->index()


?>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="view/back/index.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Index Page</li>
        </ol>
        <div class="row">
            <div class="col-12">
                <h1>Index of Contents</h1>
                <div class="card-columns">
                    <?php

                    /*echo '<pre>';
                    var_dump($_index);
                    echo '</pre>';*/
                    ?>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
                        <a href="#">
                            <img height="100" width="100" class="card-img-top img-fluid w-25" src="src/uploads/<?php echo $_index['0']['logoName']?>" alt="not found!">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Logo</h6>
                            <p class="card-text small">pretty good!
                            
                            </p>
                        </div>
                        
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
                        <a href="#">
                            <img height="300" width="300" class="card-img-top img-fluid w-25" src="src/uploads/<?php echo $_index['0']['backgroundImageName']?>" alt="not found!">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Background Image</h6>
                            <p class="card-text small">pretty good!
            
                            </p>
                        </div>
    
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Mobile Number</h6>
                            <p class="card-text small"><?php echo $_index['0']['mobileNumber']?>
            
                            </p>
                        </div>
    
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
                        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Welcome Text</h6>
                            <p class="card-text small"><?php echo $_index['0']['welcomeText']?>
            
                            </p>
                        </div>
    
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Designation</h6>
                            <p class="card-text small"><?php echo $_index['0']['designation']?>
            
                            </p>
                        </div>
    
                    </div>
                    
                    
                </div>
    
                <div class="card-columns">
                    <?php
        
                    /*echo '<pre>';
                    var_dump($_indexOne);
                    echo '</pre>';*/
                    ?>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">My Story</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['myStory']?>
            
                            </p>
                        </div>
    
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
                        <a href="#">
                            <img height="100" width="100" class="card-img-top img-fluid w-25" src="src/uploads/<?php echo $_indexOne['0']['portfolioImage']?>" alt="not found!">
                        </a>
                        <div class="card-body">
                            <h6 class="card-title mb-1">Portfolio Image</h6>
                            <p class="card-text small">pretty good!
                
                            </p>
                        </div>
        
                    </div>
                    
                    <!-- Example Social Card-->
                    <div class="card mb-3">
            
                        <div class="card-body">
                            <h6 class="card-title mb-1">Portfolio Name</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['portfolioName']?>
                
                            </p>
                        </div>
        
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
            
                        <div class="card-body">
                            <h6 class="card-title mb-1">Graduate In</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['graduateIn']?>
                
                            </p>
                        </div>
        
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
            
                        <div class="card-body">
                            <h6 class="card-title mb-1">Address</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['address']?>
                
                            </p>
                        </div>
        
                    </div>
    
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Email</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['email']?>
            
                            </p>
                        </div>
    
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Website</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['website']?>
            
                            </p>
                        </div>
    
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Facebook</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['facebook']?>
            
                            </p>
                        </div>
    
                    </div>
    
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Linked In</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['linkedin']?>
            
                            </p>
                        </div>
    
                    </div>
                    <!-- Example Social Card-->
                    <div class="card mb-3">
        
                        <div class="card-body">
                            <h6 class="card-title mb-1">Github</h6>
                            <p class="card-text small"><?php echo $_indexOne['0']['github']?>
            
                            </p>
                        </div>
    
                    </div>
                    
    
    
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website 2017</small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
</div>
      
      
      <?php

      include_once("includes/footer.php");
      ?>
