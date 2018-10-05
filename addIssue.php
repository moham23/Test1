<?php include "admin-header.php"; ?>

<section class="page-template">

    <div class="container">

        <div class="inner-page">

  	<ul class="breadcrumb">

      <li><a href="issuesDashboard.php">Issue dashboard</a></li>

    </ul>

                <form role="form" class='article-view' style="margin-bottom: 20px;" action="issue-process.php" method="POST">
                   <h3>Add a new issue</h3>
                  <b>Use this form to create new issues</b>
                  <div class="form-group">
                    <label for="pwd">Issue Title:</label>
                    <input type="text" name="issuetitle" required class="form-control" placeholder="Issue Title">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Issue Tear:</label>
                    <input type="text" name="issueYear" required class="form-control" placeholder="Issue Year">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>

          </div>

    </div>

</section>

<?php include "footer.php" ?>