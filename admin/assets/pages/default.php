<?php
   require_once('./assets/header.php');
?>

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- First Row -->
                        <div class="row">
                            <!-- Simple Stats Widgets -->
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background">
                                            <i class="gi gi-cardio text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3">
                                            <strong><span data-toggle="counter" data-to="2835"></span></strong>
                                        </h2>
                                        <span class="text-muted">SALES THIS MONTH</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-success">
                                            <i class="gi gi-user text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
                                            <strong>+ <span data-toggle="counter" data-to="2862"></span></strong>
                                        </h2>
                                        <span class="text-muted">OPEN TICKETS</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-warning">
                                            <i class="gi gi-briefcase text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-warning">
                                            <strong>+ <span data-toggle="counter" data-to="75"></span></strong>
                                        </h2>
                                        <span class="text-muted">PROJECTS</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-danger">
                                            <i class="gi gi-wallet text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-danger">
                                            <strong>$ <span data-toggle="counter" data-to="5820"></span></strong>
                                        </h2>
                                        <span class="text-muted">EARNINGS</span>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Quick Additions</h2>
                                    </div>

                                    <div class="block-section">
                                        <button class="btn btn-block btn-info"><i class="fa fa-user"></i> New Customer</button></br>
                                        <button class="btn btn-block btn-info"><i class="fa fa-check-square-o"></i> New Ticket</button></br>
                                        <button class="btn btn-block btn-info"><i class="fa fa-mobile"></i> New Check In</button></br>
                                        <button class="btn btn-block btn-info"><i class="fa fa-shopping-cart"></i> New Invoice</button></br>
                                        <button class="btn btn-block btn-info"><i class="fa fa-clock-o"></i> New Estimate</button></br>
                                    </div>
                                </div>
                            </div>
							
                            <div class="col-lg-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2>Summary - (Month to Date)</h2>
                                    </div>
									<ul class="list-unstyled">
										<div class="row">
											<div class="col-md-6">
												<h3><strong>My Activity</strong></h3>
												<li><strong>Open Tickets:</strong> 0</li>
												<li><strong>My Tickets:</strong> 0</li>
												<li><strong>My Upcoming Appointments:</strong> 0</li>
												<h3><strong>Sales Activity</strong></h3>
												<li><strong>Gross Sales:</strong> </li>
												<li><strong>Net Sales:</strong> </li>
												<li><a href="/administration/pending_ticket_charges">0</a> Pending Ticket Charges (unbilled work)</li>
											</div>
											<div class="col-md-6">
												<h3><strong>New Activity</strong></h3>
												<li><strong>New Tickets Added:</strong> 0</li>
												<li><strong>Customers Added:</strong> 0</li>
											</div>
										</div>
									</ul>
                                </div>
                            </div>
						</div>
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
        <script src="js/pages/readyDashboard.js"></script>
        <script>$(function(){ ReadyDashboard.init(); });</script>
    </body>
</html>