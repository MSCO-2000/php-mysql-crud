<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>


<main class="container p-4">
<h2>Tables</h2>
  <div class="row">


  


    <div class="col-lg-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Registres</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT table_name AS name, CREATE_TIME AS created_at, TABLE_ROWS as registres 
          FROM information_schema.tables WHERE table_schema = 'php_mysql_crud';";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['registres']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['name']?>" class="btn btn-success">
                Edit <i class="fas fa-marker"></i>
              </a>
              <a href="delete_task.php?id=<?php echo $row['name']?>" class="btn btn-danger">
                Delete<i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
