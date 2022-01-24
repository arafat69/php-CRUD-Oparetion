<?php
$title = 'Edit Student';

include('master/header.php')
?>
<div class="container">
    <?php
    $id = $_GET['id'];
    include('database/connect.php');
    $sql = "SELECT * FROM student WHERE id=$id";
    $query = $conn->query($sql);
    $data = $query->fetch_assoc();
    ?>
    <!-- add student Modal-->
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
            </div>
            <form method="POST" action="<?= $path.'database/student.php?action=edit&id='.$data['id']?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7 border-right">
                            <div class="form-group mb-2">
                                <label for="">Full Name</label>
                                <input type="text" name="name" value="<?=$data['name']?>" class="form-control" required minlength="4">
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Roll Number</label>
                                <input type="number" name="roll" value="<?=$data['roll']?>" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Reg Number</label>
                                <input type="number" name="reg" value="<?=$data['reg']?>" class="form-control" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="">Select Department</label>
                                <select name="department" class="form-select">
                                    <option value="<?=$data['department']?>" selected><?=$data['department']?></option>
                                    <option value="Computer">Computer</option>
                                    <option value="Electrical">Electrical</option>
                                    <option value="Civil">Civil</option>
                                    <option value="Enviroment">Enviroment</option>
                                    <option value="Electronic">Electronic</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="image">
                                <p class="m-0">Selected Student Photo</p>
                                <img src="<?=$path.'uploads/'.$data['photo']?>" width="100%" height="200" id="photoPreview">
                                <input type="file" class="form-control mt-2" name="photo" id="image" accept="image/*" onchange="loadFile(event)">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-light text-center d-block">
                    <button type="submit" class="btn btn-primary">Update Info</button>
                    <a href="<?= $path . 'home' ?>" class="btn btn-danger"><i class="bi bi-arrow-left"></i> Go Back</a>
                </div>
            </form>
        </div>
    </div>

</div>
<?php
include('master/footer.php')
?>