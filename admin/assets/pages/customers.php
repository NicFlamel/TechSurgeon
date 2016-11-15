<?php
   require_once('./assets/header.php');
?>

					<div id="page-content">
						<?php
							switch ($currentAction) {
								case "new":
									echo "is new";
									break;
						/*************************************************/
								case "view":
									//Checking to see if we have a CID set, if not, set it to 1.
									if (!(isset($_GET['CID']))){
										$_GET['CID'] = 1;
									}
									
									//Checking to see if CID is numeric, if it is not, set it to 1.
									$CID = $_GET['CID'];
									if (!(is_numeric($CID))){
										$CID = 1;
									}
									//CID is sanitized now!
									
									
									echo $CID."is number";
									break
						/*************************************************/
								default:
									echo '
										<div class="row">
										<div class="col-lg-12">
											<div class="block full">
												<div class="block-title">
													<h2>Customers</h2> <button class="btn btn-success" style="float:right"><i class="fa fa-plus"></i> Add User</button>
												</div>
												<div class="table-responsive">
													<table id="example-datatable" class="table table-striped table-bordered table-vcenter">
														<thead>
															<tr>
																<th class="text-center" style="width: 50px;">ID</th>
																<th>Name/Business</th>
																<th>Email</th>
																<th>Phone</th>
																<th>Created</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-center">1</td>
																<td><strong>AppUser1</strong></td>
																<td>app.user1@example.com</td>
																<td>9703095108</td>
																<td>Wed 10-26-16 02:34 PM</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								';
							}
						?>
					</div>
                </div>
            </div>
        </div>
        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        
        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/uiTables.js"></script>
        <script>$(function () {UiTables.init();});</script>
    </body>
</html>