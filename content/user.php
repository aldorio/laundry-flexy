<?php 
  $query = mysqli_query($config, "SELECT level.level_name, users.* FROM users  LEFT JOIN level ON level.id = users.id_level ORDER BY users.id ASC");
  $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>
<style>
.card {
  padding-left: 40px; 
  padding-top: 10px;
}
</style>
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data User</h5>
          <div class="mb-3" align="right">
            <a href="?page=add-user" class="btn btn-primary">Add User</a>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered datatable">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                      foreach($rows as $index => $row): ?>
                <tr>
                  <td><?php echo $index += 1;  ?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['level_name']?></td>
                  <td>
                        <a href="?page=tambah-user&add-user-role=<?php echo $row['id'] ?>" class="btn btn-success">Add User Role</a>
                        <a href="?page=add-user&edit=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                        <a onclick="return confirm('Are u Sure wanna delete this?')" href="?page=add-user&delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>

                  </td>
                </tr>
                 <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>