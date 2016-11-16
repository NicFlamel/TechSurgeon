<?php
   require_once('./assets/header.php');
?>

					<div id="page-content">
						<?php
							switch ($currentAction) {
								case "new":
									echo '
<div class="block full">
	<div class="block-title">
		<h2>Create a Customer</h2>
		<div class="block-options pull-right">
			<a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="" style="overflow: hidden; position: relative;" data-original-title="Manage Custom Fields"><i class="fa fa-plus"></i></a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-3">
			<div class="form-group">
				<label for="firstname">First Name</label>
				<input type="text" id="firstname" name="firstname" class="form-control">
			</div>
		</div>
		<div class="col-xs-3">
			<div class="form-group">
				<label for="lastname">Last Name</label>
				<input type="text" id="lastname" name="lastname" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="businessname">Business Name</label>
				<input type="text" id="businessname" name="businessname" class="form-control">
			</div>
		</div>
		
		<div class="col-sm-2">
			<div class="form-group">
				<label for="phonetype">Phone Type</label>
					<select id="phonetype" name="phonetype" class="form-control" style="width: 100%;" data-placeholder="Choose one..">
						<option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
						<option value="Phone">Phone</option>
						<option value="Mobile" selected="selected">Mobile</option>
						<option value="Office">Office</option>
					</select>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="phonenumber">Phone Number</label>
				<input type="text" id="phonenumber" name="phonenumber" class="form-control">
			</div>
		</div>
		<div class="col-sm-1">
			<div class="form-group">
				<label for="extension">Extension</label>
				<input type="text" id="extension" name="extension" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="address">Address</label>
				<input type="text" id="address" name="address" class="form-control">
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" class="form-control">
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="address2">Address 2</label>
				<input type="text" id="address2" name="address2" class="form-control">
			</div>
		</div>
		
		<div class="col-sm-6">
			<div class="form-group">
				<label for="referred">Referred By</label>
					<select id="referred" name="referred" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
						<option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
						<option value="Customer">Customer</option>
						<option value="Google">Google</option>
						<option value="Poster">Poster</option>
						<option value="FaceBook">FaceBook</option>
						<option value="Friend">Friend</option>
						<option value="Other">Other</option>
					</select>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="city">City</label>
				<input type="text" id="city" name="city" class="form-control">
			</div>
		</div>
		<div class="col-xs-6">
			<label class="csscheckbox csscheckbox-info">
				<input type="checkbox"><span></span> SMS Service Enabled
			</label>
			<br />
			<label class="csscheckbox csscheckbox-info">
				<input type="checkbox"><span></span> Opt Out - Email marketing
			</label>
			<br />
			<label class="csscheckbox csscheckbox-info">
				<input type="checkbox"><span></span> Send Portal Invitation
			</label>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="state">State/Country</label>
				<input type="text" id="state" name="state" class="form-control">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label for="zip">Zip/Postal Code</label>
				<input type="text" id="zip" name="zip" class="form-control">
			</div>
		</div>
	</div>
</div>
										 ';
									
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
								break;
									
									
						/*************************************************/
								default:
									echo '
										<div class="row">.
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