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
                <h2>GRN</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <strong>GRN</strong>
                    </li>
                </ol>
            </div>

            <div class="col-lg-4">
                <div class="title-action">
                    <a href="grn.php" target="_blank" class="btn btn-primary"><i class="fa fa-plus"></i> New GRN </a>
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
                                        <th>GRN Num</th>
                                        <th>Date</th>
                                        <th>Qty</th>
                                        <th>Cost Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX">
                                        <td>Pen</td>
                                        <td>Red Pen</td>
                                        <td>105</td>
                                        <td align="center">05/08/2018</td>
                                        <td align="right">100</td>
                                        <td align="right">25</td>
                                        <td align="center">
                                            <a href="grn.php" class="btn-warning btn btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Pen</td>
                                        <td>Blue Pen</td>
                                        <td>105</td>
                                        <td align="center">05/08/2018</td>
                                        <td align="right">100</td>
                                        <td align="right">20</td>
                                        <td align="center">
                                            <a href="grn.php" class="btn-warning btn btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Pen</td>
                                        <td>Red Pen</td>
                                        <td>105</td>
                                        <td align="center">05/08/2018</td>
                                        <td align="right">100</td>
                                        <td align="right">25</td>
                                        <td align="center">
                                            <a href="grn.php" class="btn-warning btn btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Pen</td>
                                        <td>Blue Pen</td>
                                        <td>105</td>
                                        <td align="center">05/08/2018</td>
                                        <td align="right">100</td>
                                        <td align="right">20</td>
                                        <td align="center">
                                            <a href="grn.php" class="btn-warning btn btn-xs">View</a>
                                        </td>
                                    </tr>
                                    <tr class="gradeX">
                                        <td>Pen</td>
                                        <td>Red Pen</td>
                                        <td>105</td>
                                        <td align="center">05/08/2018</td>
                                        <td align="right">100</td>
                                        <td align="right">25</td>
                                        <td align="center">
                                            <a href="grn.php" class="btn-warning btn btn-xs">View</a>
                                        </tr>
                                        <tr class="gradeX">
                                            <td>Pen</td>
                                            <td>Blue Pen</td>
                                            <td>105</td>
                                            <td align="center">05/08/2018</td>
                                            <td align="right">100</td>
                                            <td align="right">20</td> 
                                            <td align="center">
                                                <a href="grn.php" class="btn-warning btn btn-xs">View</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Item Category</th>
                                            <th>Item</th>
                                            <th>GRN Num</th>
                                            <th>Date</th>
                                            <th>Qty</th>
                                            <th>Cost Price</th>
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

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

        <!-- Page-Level Scripts -->
        <script>
            $(document).ready(function() {
                $('.dataTables-example').DataTable({
                    "dom": 'lTfigt',
                    "tableTools": {
                        "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                    }
                });

                /* Init DataTables */
                var oTable = $('#editable').DataTable();

            });
        </script>
        <script>
        document.getElementById("grns").setAttribute("class", "active"); 
    </script>
    </body>

</body>
</html>
