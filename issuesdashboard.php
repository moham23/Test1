<?php include "admin-header.php"; ?>

<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,r-1.0.7/datatables.min.js"></script>
<link rel="stylesheet" type="text/CSS"  src="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.css"></script>
<script type="text/JavaScript">


$(document).ready(function() {
$('#example').DataTable();
  
});

</script>

    <section class="page-template">

        <div class="container">

            <div class="inner-page">

                <ul class="breadcrumb">

                    <li><a href="admin.php">Admin dashboard</a></li>
                    
                    <a id="linkStyling" href="addIssue.php">Create New Issue</a>

                </ul>

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

                    <thead>
                        <tr>
                            <th>Issue Name</th>
                            <th>Manage issue</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php 

                    include "issue-view.php";

                    ?>
                        
                    </tbody>

                </table>

            </div>

        </div>

    </section>

<?php include "footer.php"; ?>