<?php include "admin-header.php"; ?>

<section class="page-template">

    <div class="container">

        <div class="inner-page">

          <ul class="breadcrumb">

              <li><a href="admin.php">Admin Dashboard</a></li>

              <li><a href="articleDashboard.php">Article Dashboard </a></li>

          </ul>

          <div class='admin-form-template'>

                <form role="form" style="margin-bottom: 20px;" enctype="multipart/form-data" action="adminarticle-process.php" method="POST">
                    
                      <h3>Submit a new article</h3>
                      
                      <b>Only upload files with .pdf</b>

                      <div class="form-group">
                          <label for="pwd">Article Title:</label>
                          <input type="text" required name="title" class="form-control" placeholder="Title">
                          <input type="hidden" name="From" value="<?php echo $FROM; ?>">
                          <input type="hidden" name="Date" value="<?php echo date("Y-m-d"); ?>">
                          <input type="hidden" name="Email" value="<?php echo $email; ?>">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Choose Issue:</label>
                          <select name="issue" required class="form-control" name="brand">
                          <option value="none">Please select....</option>
                          <?php include "chooseIssues.php"; ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="pwd">Article Description:</label>
                          <input type="text" required name="description" class="form-control" placeholder="Description">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Article Abstract:</label>
                          <input type="file" required name="abstract" class="form-control" placeholder="Absrtact">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Full Article:</label>
                          <input type="file" required name="full" class="form-control" placeholder="Full">
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                  
                </form>

            </div>

      </div>

  </div>    

</section>

<?php include "footer.php" ?>