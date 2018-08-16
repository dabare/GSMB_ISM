<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 10:47:34 GMT -->


<head>
<?php require_once("includes/head.php") ?>

    <!-- Data Tables -->
    <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">


</head>
<body>
    <div id="wrapper">
        <?php require_once("includes/side_menu.php") ?>
		
        <div id="page-wrapper" class="gray-bg dashbard-1">
			<?php require_once("includes/header_bar.php") ?>
			
			<div class="row  border-bottom white-bg dashboard-header">
			
			 <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-sm-8">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted small pull-right">Last modification: <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                            <h2>Categories</h2>
                            
							
							<div class="wrapper wrapper-content animated fadeInRight">
								 <div class="row">
									<div class="col-lg-12">
									<div class="ibox float-e-margins">
									
									<div class="ibox-content">
									<div class="">
									<a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary ">Add a new row</a>
									</div>
									<table class="table table-striped table-bordered table-hover " id="editable" >
									<thead>
									<tr>
										<th>Categor ID</th>
										<th>Categor Discription</th>
									</tr>
									</thead>
									<tbody>
									<tr class="gradeX">
										<td><a data-toggle="tab" href="#contact-1" class="client-link">1</a></td>
										<td><a data-toggle="tab" href="#contact-1" class="client-link">TV</a></td>
									</tr>
									<tr class="gradeC">
										<td><a data-toggle="tab" href="#contact-2" class="client-link">2</a></td>
										<td><a data-toggle="tab" href="#contact-2" class="client-link">Foods</a></td>
									</tr>
									
									<tr class="gradeA">
										<td><a data-toggle="tab" href="#contact-3" class="client-link">3</a></td>
										<td><a data-toggle="tab" href="#contact-3" class="client-link">drink</a></td>
									</tr>
								
									
									</tfoot>
									</table>

									</div>
									</div>
									</div>
								</div>
      
							</div>
							
							
                               </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="ibox ">

                        <div class="ibox-content">
                            <div class="tab-content">
                                <div id="contact-1" class="tab-pane active">
                                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Items</th>
                       
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                       
                    </tr>
                    <tr class="gradeC">
                        <td>Trident</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>Trident</td>
                        
                    </tr>
                    </tbody>
   
                    </table>
                        </div>

                    </div>
               
                                
                                </div>
                                <div id="contact-2" class="tab-pane">
                                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Items</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>Trident</td>
                        
                    </tr>
                    <tr class="gradeC">
                        <td>Tsdgsdgent</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>Trdsgdssnt</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>Trdgsdgdst</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>Tfhdfhdfdent</td>
                        
                    </tr>
                    </tbody>
                    
                    </table>
                        </div>

                    </div>
               
                                    
                                        
                                </div>
                                <div id="contact-3" class="tab-pane">
									<div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>Items</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="gradeX">
                        <td>vddgdnt</td>
                        
                    </tr>
                    <tr class="gradeC">
                        <td>3fsdident</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>ghkent</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>bcxcbft</td>
                        
                    </tr>
                    <tr class="gradeA">
                        <td>cbxcbcxbt</td>
                        
                    </tr>
                    </tbody>
                  
                    </table>
                        </div>

                    </div>
               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
				
			</div>
			
			<?php require_once("includes/footer.php") ?>	
        </div>
    </div>

       
		
</body>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var polarOptions = {
                scaleShowLabelBackdrop: true,
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                scaleBeginAtZero: true,
                scaleBackdropPaddingY: 1,
                scaleBackdropPaddingX: 1,
                scaleShowLine: true,
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-4625583-2', 'webapplayers.com');
        ga('send', 'pageview');

    </script>
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

            /* Apply the jEditable handlers to the table */
           


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>


</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Oct 2015 10:48:29 GMT -->
</html>
