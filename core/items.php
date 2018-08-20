<!DOCTYPE html>
<html>
<head>

    <?php require_once("includes/head.php") ?>

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">

    <!-- select menue -->
    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">

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
                 <a data-toggle="modal" class="btn btn-primary" href="#newItemForm"><i class="fa fa-plus"></i> New Item </a>      
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
                                        <a data-toggle="modal" href="#viewItemFormId_1" class="btn-warning btn btn-xs pull-right">View</a>
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



    <div id="newItemForm" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">New Item</h3>
                            <form role="form">
                                <div class="form-group"><label>Item Category</label> 
                                    <select class="select2_demo_3 form-control" style="width: 500px;">
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>Item Code</label> <input type="text" placeholder="Enter item code" class="form-control"></div>


                                <div class="form-group"><label>Description</label> <input type="text" placeholder="Enter description" class="form-control"></div>

                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Add</strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="viewItemFormId_1" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12 b-r"><h3 class="m-t-none m-b">New Item</h3>
                            <form role="form">
                                <div class="form-group"><label>Item Category</label> 
                                    <select class="select2_demo_3 form-control" style="width: 500px;">
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                    </select>
                                </div>
                                <div class="form-group"><label>Item Code</label> <input type="text" placeholder="Enter item code" class="form-control"></div>


                                <div class="form-group"><label>Description</label> <input type="text" placeholder="Enter description" class="form-control"></div>

                                <div>
                                    <button class="btn btn-sm btn-danger  m-t-n-xs" type="submit"><strong>Delete</strong></button>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                </div>
                            </form>
                        </div>
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

<!-- Select2 -->
    <script src="js/plugins/select2/select2.full.min.js"></script>

    <script>
        $(document).ready(function(){

            

            $(".select2_demo_3").select2({ 
                dropdownCssClass: 'custom-dropdown'
            });

            $(".select2_demo_3").on('select2:open', function(e){
                $('.custom-dropdown').parent().css('z-index', 99999);
            });

        });
        
    </script>

<script>
    document.getElementById("items").setAttribute("class", "active"); 
</script>
</body>

</html>
