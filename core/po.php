<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 10:47:34 GMT -->

<?php require_once("includes/head.php") ?>

<?php require_once("includes/open_body.php") ?>
    <div id="wrapper">
        <?php require_once("includes/side_menu.php") ?>

        <div id="page-wrapper" class="gray-bg dashbard-1">
           <?php require_once("includes/header_bar.php") ?>

           <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-8">
                <h2>Edit PO</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                         <a href="pos.php">PO</a>
                    </li>
                    <li class="active">
                        <strong>Edit PO</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-4">
                <div class="title-action">
                    <a href="po_print.php" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Print PO </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInRight">
                    <div class="ibox-content p-xl">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Supplier's Name & Address:</h5>
                                    <address>
                                        <strong>Marlbo Trading Company</strong><br>
                                        24, Abdul Gaffoor Mawatha,<br>
                                        Colombo - 03<br>
                                    </address>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <h4>pos No.</h4>
                                    <h4 class="text-navy">01</h4>
                                    <span>Delivery To:</span>
                                    <address>
                                        <strong>GSMB Technical Services (Pvt) Ltd</strong><br>
                                        190/A, Ratnaweera Building,<br>
                                        Stanley Thilakaratne Mawatha,<br>
                                        Nugegoda<br>
                                    </address>
                                    <p>
                                        <span><strong>Date:</strong>02/03/2018</span><br/>
                                    </p>
                                </div>
                            </div>

                            <div class="table-responsive m-t">
                                <table class="table invoice-table">
                                    <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Description of Supply</th>
                                        <th>Qty</th>
                                        <th>Unit Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Safty Shoes</td>
                                        <td>Model No. BRSS 1007S, Kultikraf (Low Cut) Size - 10</td>
                                        <td>1 pair</td>
                                        <td>3,500.00</td>
                                        <td>3,500.00</td>
                                    </tr>
                                    <tr>
                                        <td>Rain Suit</td>
                                        <td>Local Dark Green 15% VAT</td>
                                        <td>7 nos</td>
                                        <td>1,250.00</td>
                                        <td>10,587.50</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- /table-responsive -->

                            <table class="table invoice-total">
                                <tbody>
                                <tr>
                                    <td><strong>Sub Total :</strong></td>
                                    <td>12,250.00</td>
                                </tr>
                                <tr>
                                    <td><strong>TAX 15%:</strong></td>
                                    <td>1,837.50</td>
                                </tr>
                                <tr>
                                    <td><strong>Total Value Rs.</strong></td>
                                    <td>14,087.50</td>
                                </tr>
                                </tbody>
                            </table>

                            <div>
                                <button class="btn btn-danger">Delete PO</button>
                                <button class="btn btn-primary pull-right">Save PO</button>
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

    <script>
        document.getElementById("pos").setAttribute("class", "active"); 
    </script>
<?php require_once("includes/close_body.php") ?>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 10:48:29 GMT -->
</html>
