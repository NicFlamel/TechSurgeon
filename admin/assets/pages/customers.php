<?php
   require_once('./assets/header.php');
?>

					<div id="page-content">
						<?php
							switch ($currentAction) {
								/***********CREATE NEW CUSTOMER***************/
								case "new":
								
									if (isset($_POST['createCustomer'])){
										$firstname = $_POST['firstname'];
										$lastname = $_POST['lastname'];
										$date = time();
										$phonetype = $_POST['phonetype'];
										$phonenumber = $_POST['phonenumber'];
										$extension = $_POST['extension'];
										$email = $_POST['email'];
										$referredby = $_POST['referredby'];
										$sms = (isset($_POST['sms'])) ? 1 : 0;
										$emails = (isset($_POST['emails'])) ? 1 : 0;
										$sendinvitation = (isset($_POST['sendinvitation'])) ? 1 : 0;
										$businessname = $_POST['businessname']; 
										$address = $_POST['address'];
										$address2 = $_POST['address2'];
										$city = $_POST['city'];
										$state = $_POST['state'];
										$zip = $_POST['zip'];
										
										$Database->selectPrepare("INSERT INTO customers (ID, firstname, lastname, date, phonetype, phonenumber, extension, email, referredby, sms, emails, businessname, address, address2, city, state, zip, credit)
										 VALUES (Null, :firstname, :lastname, :date, :phonetype, :phonenumber, :extension, :email, :referredby, :sms, :emails, :businessname, :address, :address2, :city, :state, :zip, '0.00')", 
											array(
												':firstname' => strip_tags($firstname),
												':lastname' => strip_tags($lastname),
												':date' => strip_tags($date),
												':phonetype' => strip_tags($phonetype),
												':phonenumber' => strip_tags($phonenumber),
												':extension' => strip_tags($extension),
												':email' => strip_tags($email),
												':referredby' => strip_tags($referredby),
												':sms' => strip_tags($sms),
												':emails' => strip_tags($emails),
												':businessname' => strip_tags($businessname),
												':address' => strip_tags($address),
												':address2' => strip_tags($address2),
												':city' => strip_tags($city),
												':state' => strip_tags($state),
												':zip' => strip_tags($zip)
											));
												echo '<div class="alert alert-info" role="alert">User created! Would you like to create a ticket?</div>';
										   }
										

									
									echo '
											<div class="block full">
												<div class="block-title">
													<h2>Create a Customer</h2>
													<div class="block-options pull-right">
														<a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="" style="overflow: hidden; position: relative;" data-original-title="Manage Custom Fields"><i class="fa fa-plus"></i></a>
													</div>
												</div>
												<div class="row">
													<form method="post" class="form-bordered">
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
																	<select id="referredby" name="referredby" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
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
																<input id="sms" name="sms" type="checkbox"><span></span> SMS Service Enabled
															</label>
															<br />
															<label class="csscheckbox csscheckbox-info">
																<input id="emails" name="emails" type="checkbox"><span></span> Opt Out - Email marketing
															</label>
															<br />
															<label class="csscheckbox csscheckbox-info">
																<input id="sendinvitation" name="sendinvitation" type="checkbox"><span></span> Send Portal Invitation
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
														<div class="form-group form-actions">
															<div class="col-md-9 col-md-offset-3">
																<button type="submit" name="createCustomer" id="createCustomer" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">Submit</button>
																<button type="reset" class="btn btn-effect-ripple btn-danger" style="overflow: hidden; position: relative;">Reset</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										 ';
									break;
						/********************VIEW CUSTOMER INFO*****************************/
								case "view":
									//Checking to see if we have a cid set, if not, set it to 1.
									if (!(isset($_GET['cid']))){
										$_GET['cid'] = 1;
									}
									
									//Checking to see if cid is numeric, if it is not, set it to 1.
									$CID = $_GET['cid'];
									if (!(is_numeric($CID))){
										$CID = 1;
									}
									//CID is sanitized now!
									$query = $Database->selectPrepare("SELECT * FROM `customers` WHERE `ID` = :cid", array(':cid' => strip_tags($CID)));
										while($custInfo = $Database->fetchObject($query))
										{
										//Define user variables
											$ID 				= $custInfo->ID;
											$firstname 			= $custInfo->firstname;
											$lastname 			= $custInfo->lastname;
											$date 				= $custInfo->date;
											$phonetype 			= $custInfo->phonetype;
											$phonenumber 		= $custInfo->phonenumber;
											$extension 			= $custInfo->extension;
											$email 				= $custInfo->email;
											$referredby 		= $custInfo->referredby;
											$sms 				= $custInfo->sms;
											$emails 			= $custInfo->emails;
											$businessname 		= $custInfo->businessname;
											$businessnameaddy 	= $custInfo->businessname;
											$address 			= $custInfo->address;
											$address2 			= $custInfo->address2;
											$city 				= $custInfo->city;
											$state 				= $custInfo->state;
											$zip 				= $custInfo->zip;
											$credit 			= $custInfo->credit;
											
											if (!(empty($businessname))){
												$businessname = ' | '.$businessname;
											}
											
											$name = $firstname.' '.$lastname.$businessname;
										}
										
										$ticketsopen = "0";
										$alltickets = "0";
										$invoicesunpaid = "0";
										$totalinvoiced = "0.00";
										$totalinvoices = "0";
										
										
									echo '

									   <div class="col-md-3">
										  <div class="well tile">
											 <div class="panel-heading">
												<div class="row">
												   <div class="col-xs-3">
													  <i class="fa fa-ticket fa-5x"></i>
												   </div>
												   <div class="col-xs-9 text-right">
													  <div class="huge">'.$ticketsopen.' / '.$alltickets.'</div>
													  <div>Tickets Open / Total</div>
												   </div>
												</div>
											 </div>
										  </div>
										</div>
										<div class="col-md-3">
										  <div class="well tile">
											 <div class="panel-heading">
												<div class="row">
												   <div class="col-xs-3">
													  <i class="fa fa-usd fa-5x"></i>
												   </div>
												   <div class="col-xs-9 text-right">
													  <div class="huge">'.$totalinvoiced.'</div>
													  <div>Total Invoiced</div>
												   </div>
												</div>
											 </div>
										  </div>
										</div>
										<div class="col-md-3">
										  <div class="well tile">
											 <div class="panel-heading">
												<div class="row">
												   <div class="col-xs-3">
													  <i class="fa fa-credit-card-alt fa-5x"></i>
												   </div>
												   <div class="col-xs-9 text-right">
													  <div class="huge">'.$invoicesunpaid.' / '.$totalinvoices.'</div>
													  <div>Invoices Unpaid / Total</div>
												   </div>
												</div>
											 </div>
										  </div>
										</div>
									   <div class="col-md-3">
										  <div class="well tile">
											 <div class="panel-heading">
												<div class="row">
												   <div class="col-xs-3">
													  <i class="fa fa-money fa-5x"></i>
												   </div>
												   <div class="col-xs-9 text-right">
													  <div class="huge">'.$credit.'</div>
													  <div>Credit Balance</div>
												   </div>
												</div>
											 </div>
										  </div>
										</div>
										<div class="row">
											<div class="col-md-12">   
												<div class="block">
													<div class="block-title">
														<div class="block-options pull-right">
															<a href="javascript:void(0)" class="btn btn-effect-ripple btn-danger" data-toggle="tooltip" title="" style="overflow: hidden; position: relative;" data-original-title="Delete User"><i class="fa fa-trash-o"></i></a>
														</div>
														<h3><i class="fa fa-user"></i> Customer Info</h3>
													</div>

													<div class="block-section">
														<div class="row">
															<div class="col-md-6">
																<h2>'.$name.'</h2>
																<p>Customer online profile <a href="#">link</a></p>
																<p>Account created on: '.date("F j, Y, g:i A", $date).'</p>
															</div>
															<div class="col-md-6">
																<h2>Contact Info</h2>
																<h3>Address</h3>
																<ul class="list-unstyled">
																	<li>'.$firstname.' '.$lastname.'</li>
																	<li>'.$businessnameaddy.'</li>
																	<li>'.$address.'</li>
																	<li>'.$city.' '.$state.' '.$zip.'</li>
																	<li>USA</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										
								<div class="col-lg-6">
									<div class="block">
										<div class="block-title">
											<h2>Invoices</h2>
										</div>
										<table class="table table-condensed ">
											<thead>
												<tr>
													<th>ID</th>
													<th>Status</th>
													<th>Date</th>
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><strong><a href="#">#1</a></strong></td>
													<td><strong>Finalized</strong></td>
													<td><strong>02-04-16</strong></td>
													<td><strong>$69.99</strong></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="block">
										<div class="block-title">
											<h2>Payments</h2>
										</div>
										<table class="table table-condensed ">
											<thead>
												<tr>
													<th>Date</th>
													<th>Amount</th>
													<th>Method</th>
													<th>Invoice</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><strong>11-12-16</strong></td>
													<td><strong>$100.00</strong></td>
													<td><strong>Cash</strong></td>
													<td><strong><a href="#">#7162</a></strong></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
                            </div>
							<div class="row">
								<div class="col-lg-6">
									<div class="block">
										<div class="block-title">
											<h2>Assets</h2>
										</div>
										<table class="table table-condensed ">
											<thead>
												<tr>
													<th>Name</th>
													<th>Serial Number</th>
													<th>Type</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><strong>iPhone 5s</strong></td>
													<td><strong>352066060926230</strong></td>
													<td><strong>Phone</strong></td>
													<td><button type="submit" name="viewAsset" id="viewAsset" class="btn btn-effect-ripple btn-primary" style="overflow: hidden; position: relative;">View</button></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="block">
										<div class="block-title">
											<h2>Tickets</h2>
										</div>
										<table class="table table-condensed ">
											<thead>
												<tr>
													<th>ID</th>
													<th>Date Created</th>
													<th>Subject</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><strong><a href="#">#7162</a></strong></td>
													<td><strong>02-02-16</strong></td>
													<td><strong>iPhone 5s Broken Screen</strong></td>
													<td><span class="label label-success">Finalized</span></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
                            </div>
									
									';
								break;
									
									
						/********************DEFAULT CUSTOMER PAGE*****************************/
								default:
									echo '
										<div class="row">.
										<div class="col-lg-12">
											<div class="block full">
												<div class="block-title">
													<h2>Customers</h2> <a href="index.php?page=customers&action=new" style="float:right" class="btn btn-success"><i class="fa fa-plus"></i> Add User</a>
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
																<th>Action</th>
															</tr>
														</thead>
														<tbody>';
															
																$query = $Database->selectPrepare("SELECT * FROM `customers` ORDER BY `ID` DESC", array());
																	while($custInfo = $Database->fetchObject($query))
																	{
																		$ID = $custInfo->ID;
																		$firstname = $custInfo->firstname;
																		$lastname = $custInfo->lastname;
																		$business = $custInfo->businessname;
																		if (!(empty($business))){
																			$business = ' | '.$business;
																		}
																		$name = $firstname.' '.$lastname.$business;
																		$email = $custInfo->email;
																		$phone = $custInfo->phonenumber;
																		$Date = date("F j, Y, g:i A", $custInfo->date);
																		$buttons = '
																		<a href="index.php?page=customers&action=view&id='.$ID.'" class="btn btn-md btn-success"><i class="fa fa-cog"></i> View User</a>';
																		echo '<tr><td>'.$ID.'</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$phone.'</td><td>'.$Date.'</td><td>'.$buttons.'</td></tr>';
																	}
																
															
															echo '

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