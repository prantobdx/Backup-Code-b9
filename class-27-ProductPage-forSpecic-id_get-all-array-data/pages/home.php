
<?php include'pages/header.php'?>
  <section class="py-5">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <h1 class="text-center">All Student Info</h1>
                      </div>
                      <div class="card-body">
                          <table class="table table-bordered table-hover text-center">
                              <thead>
                                  <tr>
                                      <th>id</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>Phone</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php foreach ( $students as $student) {?>
                                  <tr>
                                     <td><?php echo $student['id']?></td>
                                     <td><?php echo $student['name']?></td>
                                     <td><?php echo $student['email']?></td>
                                     <td><?php echo $student['phone']?></td>
                                  </tr>
                                <?php } ?>
                              </tbody>

                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
<?php include'pages/footer.php'?>
