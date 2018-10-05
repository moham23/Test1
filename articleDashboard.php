<?php include "admin-header.php"; ?>

<script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,r-1.0.7/datatables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"></script>
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

                    <a href="adminsubmit.php">Create New Article</a>

                    <a href="submitOther.php">Create Article for someone</a>

                </ul>


                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Artice Title</th>
                            <th>Description</th>
                            <th>Abstract</th>
                            <th>Full article</th>
                            <th>Status</th>
                            <th>Issue</th>
                            <th>Manage article</th>
                        </tr>
                    </thead>

                    <tbody>

                    <?php include "approvedata.php"; ?>
                        
                    </tbody>

                    
                </table>

            </div>

        </div>

    </section>

<?php include "footer.php"; ?>