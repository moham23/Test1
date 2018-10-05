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

                </ul>

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Message From</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Date recieved</th>
                            <th>Status</th>
                            <th>Delete</th>
                            <th>Mark as read</th>
                            
                        </tr>
                    </thead>

                    <tbody>

                    <?php include "messageview.php"; ?>
                        
                    </tbody>
                </table>

            </div>

        </div>
        
    </section>

<?php include "footer.php"; ?>