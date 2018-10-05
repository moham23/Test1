<?php include "admin-header.php"; ?>

<section class="page-template">

    <div class="container">

        <div class="inner-page">
          
            <ul class="breadcrumb">

                <li><a href="dashboard.php">Admin Dashboard</a></li>

                <li><a href="articleDashboard.php">Article Dashboard </a></li>

            </ul>

            <div class='admin-form-template'>
                  
                  <h3>Submit a new article for someone else</h3>
                  
                  <form role="form" style="margin-bottom: 20px;" enctype="multipart/form-data" action="articleOther-process.php" method="post">
                         
                          <div class="form-group">
                          <label for="pwd">Title :</label>
                          <input type="text" name="title" placeholder="Title" class="form-control">
                          </div>
                          
                          <div class="form-group">
                          <label for="pwd">From :</label>
                          <input type="text" name="From" placeholder="From" class="form-control">
                          </div>
                          
                          <div class="form-group">
                          <label for="pwd">Email :</label>
                          <input type="text" name="Email" placeholder="Email" class="form-control">
                          <input type="hidden" name="date" value=<?php echo date("Y-m-d"); ?> >
                          </div>
                          
                          <div class="form-group">
                          <label for="pwd">Choose Issue:</label>
                          <select name="issue" required class="form-control" name="brand">
                          <option value="none">Please select....</option>
                          <?php include "chooseIssues.php"; ?>
                          </select>
                          </div>
                          
                          <div class="form-group">
                          <label for="pwd">Description :</label>
                          <input type="text" name="description" placeholder="Description" class="form-control">
                          </div>
                          
                          <div class="form-group">
                          <label for="pwd">Abstract :</label>
                          <input type="file" name="abstract" placeholder="Absrtact" class="form-control">
                          </div>
                          
                          <div class="form-group">
                          <label for="pwd">Full article :</label>
                          <input type="file" name="full" placeholder="Full" class="form-control">
                          </div>
                          <button type="submit" class="btn btn-default">Submit</button>
                  </form>

              </div>

        </div>

      </div>

</section>

<?php include "footer.php" ?>