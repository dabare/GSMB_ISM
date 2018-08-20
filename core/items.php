<!DOCTYPE html>
<html>
    <head>

        <?php require_once("includes/head.php") ?>

        <!-- Data Tables -->
        <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    </head>


    <div id="wrapper">
        <?php require_once("includes/side_menu.php") ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php require_once("includes/header_bar.php") ?>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-8">
                    <h2>Items</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>Items</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4">
                    <div class="title-action">
                        <a href="grn.php" target="_blank" class="btn btn-primary"><i class="fa fa-plus"></i> New Item </a>
                    </div>
                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">

                            <div class="ibox-content">
                                <table class="table table-striped table-bordered table-hover " id="editable" >
                                    <thead>
                                        <tr>
                                            <th>Item Category</th>
                                            <th>Item</th>
                                            <th>Date</th>
                                            <th>On Hand</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="gradeX">
                                            <td>Pen</td>
                                            <td>Red Pen</td>
                                            <td align="center">05/08/2018</td>
                                            <td align="right">80</td>
                                            <td align="center">
                                                <a href="grn.php" class="btn-info btn btn-xs">MRNs</a>
                                                <a href="grn.php" class="btn-info btn btn-xs">PRNs</a>
                                                <a href="grn.php" class="btn-info btn btn-xs">POs</a>
                                                <a href="grn.php" class="btn-info btn btn-xs">GRNs</a>
                                                <a href="grn.php" class="btn-info btn btn-xs">MTNs</a>
                                                <a href="items_transactions.php" class="btn-info btn btn-xs">Transactions</a>
                                                <a href="items_transactions.php" class="btn-warning btn btn-xs pull-right">View</a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Item Category</th>
                                            <th>Item</th>
                                            <th>Date</th>
                                            <th>On Hand</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <?php require_once("includes/footer.php") ?>	
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <!-- Data Tables -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
           
            /* Init DataTables */
            var oTable = $('#editable').DataTable( {
        "columnDefs": [{
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]],
        "aLengthMenu": [[25, 50, 75, 100, 200, 1000, -1], [25, 50, 75, 100, 200, 1000, "All"]],
        "iDisplayLength": 100
    } );
        });
    </script>

    <script>
        document.getElementById("items").setAttribute("class", "active"); 
    </script>
</body>

</html>
