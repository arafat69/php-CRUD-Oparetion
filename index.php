<?php
$title = 'Student List';

include('master/header.php')
?>

<div class="container mt-2 mt-md-5">

  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title float-start">All Student List</h3>
          <a href="addStudent" class="btn btn-success float-end"> Add New Student</a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="myTable">
              <thead class="table-success">
                <tr>
                  <th style="width: 15px">#</th>
                  <th>Name</th>
                  <th>Roll</th>
                  <th>Reg</th>
                  <th>Department</th>
                  <th style="width: 20px">Photo</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                include('database/connect.php');
                $sql= "SELECT * FROM student ORDER BY id DESC";
                $query = $conn->query($sql);
                $i=1;
                while($data = $query->fetch_assoc()) :
                ?>
                <tr>
                  <td><?= $i?></td>
                  <td><?= $data['name']?></td>
                  <td><?= $data['roll']?></td>
                  <td><?= $data['reg']?></td>
                  <td><?= $data['department']?></td>
                  <td><img src="<?=$path.'uploads/'.$data['photo']?>" width="46"></td>
                  <td>
                    <a href="<?= $path.'editStudent/'.$data['id']?>" class="btn btn-info text-light btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <a href="<?= $path.'database/student.php?action=delete&id='.$data['id']?>" onclick="return confirm('Are You Sure Delete This !')" 
                     class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                  </td>
                </tr>
                  <?php $i++; endwhile ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php
include('master/footer.php')
?>