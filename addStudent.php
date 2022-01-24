<?php 
$title='Add New Student';

include('master/header.php')
?>
    <div class="container">

     <!-- add student Modal-->
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
                </div>
                <form method="POST" action="database/student.php?action=add" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7 border-right">
                                <div class="form-group mb-2">
                                    <label for="">Full Name</label>
                                    <input type="text" name="name" placeholder="Student Full Name" class="form-control" required minlength="4">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Roll Number</label>
                                    <input type="text" name="roll" placeholder="Roll Number" class="form-control" required minlength="4">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Reg Number</label>
                                    <input type="text" name="reg" placeholder="Registration Number" class="form-control" required minlength="6">
                                </div>
                                <div class="form-group mb-2">
                                    <label for="">Select Department</label>
                                    <select name="department" class="form-select">
                                        <option value="Computer" selected>Computer</option>
                                        <option value="Electrical">Electrical</option>
                                        <option value="Civil">Civil</option>
                                        <option value="Enviroment">Enviroment</option>
                                        <option value="Electronic">Electronic</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="image">
                                    <p class="m-0">Select Student Photo</p>
                                    <img src="image/previewImage.jpg" width="100%" height="200" id="photoPreview">
                                    <input type="file" class="form-control mt-2" name="photo" id="image" accept="image/*" onchange="loadFile(event)" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer bg-light text-center d-block">
                        <button type="submit" class="btn btn-primary">Submit Info</button>
                        <a href="<?= $path.'home'?>" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Go Back</a>
                    </div>
                </form>
            </div>
        </div>

</div>
<?php 
include('master/footer.php')
?>

   