<div id="mainwrapper" class="mainwrapper">
	<div class="header">
		<div class="logo">
			<a href="dashboard.html"><?php echo $this->Html->image('logo.png', array( 'border' => '0')) ?></a>
		</div>
		<div class="headerinner">
			<ul class="headmenu">
				<li class="odd">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="count">5</span>
						<span class="head-icon head-message"></span>
						<span class="headmenu-label">Messages</span>
					</a>
					<ul class="dropdown-menu">
						<li class="nav-header">Messages</li>
						<li><a href=""><span class="icon-envelope"></span> New message from <strong>Jack</strong> <small class="muted"> - 19 hours ago</small></a></li>
						<li><a href=""><span class="icon-envelope"></span> New message from <strong>Daniel</strong> <small class="muted"> - 2 days ago</small></a></li>
						<li><a href=""><span class="icon-envelope"></span> New message from <strong>Jane</strong> <small class="muted"> - 3 days ago</small></a></li>
						<li><a href=""><span class="icon-envelope"></span> New message from <strong>Tanya</strong> <small class="muted"> - 1 week ago</small></a></li>
						<li><a href=""><span class="icon-envelope"></span> New message from <strong>Lee</strong> <small class="muted"> - 1 week ago</small></a></li>
						<li class="viewmore"><a href="messages.html">View More Messages</a></li>
					</ul>
				</li>
				
				
				
				<li class="right">
					<div class="userloggedinfo">
						<?php echo $this->Html->image('photos/thumb1.png', array( 'border' => '0')) ?>
						<div class="userinfo">
							<h5>David Klogo <small>- me@davidklogo.com</small></h5>
							<ul>
								<li><a href="editprofile.html">Edit Profile</a></li>
								<li><a href="">Account Settings</a></li>
								<li><a href="../">Sign Out</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul><!--headmenu-->
		</div>
	</div>
	
	<div class="leftpanel">
		
		<div class="leftmenu">        
			<ul class="nav nav-tabs nav-stacked">
				<li class="nav-header">Menus</li>
				<li class="active"><a href="#"><span class="iconfa-laptop"></span> Dashboard</a></li>
				<li class="dropdown"><a href=""><span class="iconfa-user"></span> OPD</a>
					<ul>
						<li class="dropdown"><a href="">Process Patients Record</a>
							<ul>
								<li><a href="">Registration First Time Visit</a></li>
								<li><a href="">Retrieve Records</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Non Refundable Fee</a></li>
						<li class="dropdown"><a href="">Preliminary Exam</a></li>
						<li class="dropdown"><a href="">Assign/ Route to Consulting Room</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href=""><span class="iconfa-folder-open"></span> Clinics</a>
					<ul>
						<li class="dropdown"><a href="">Examination</a>
							<ul>
								<li><a href="">Retrieve Patient Rec</a></li>
								<li><a href="">Diagnosis</a></li>
								<li><a href="">Review Test Results</a></li>
								<li><a href="">Treatment & Prescription</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Routing</a>
							<ul>
								<li><a href="">Request 4 Test/Scan</a></li>
								<li><a href="">Discharge</a></li>
								<li><a href="">Schedule Review/surgery</a></li>
								<li><a href="">Declare Dead</a></li>
								<li><a href="">Pharmacy</a></li>
								<li><a href="">Admission</a></li>
							</ul>
						</li>
						
					</ul>
				</li>
				<li class="dropdown"><a href=""><span class="iconfa-circle-arrow-up"></span> Laboratory</a>
					<ul>
						<li class="dropdown"><a href="">Process Patient</a>
							<ul>
								<li><a href="">Retrieve Patient Record</a></li>
								<li><a href="">Registration New Patient</a></li>
								<li><a href="">Check Payment Cover</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Perform Test</a></li>
						<li class="dropdown"><a href="">Pick Results</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href=""><span class="iconfa-briefcase"></span> Ward</a>
					<ul>
						<li class="dropdown"><a href="">Process & Admit Patient</a>
							<ul>
								<li><a href="">Retrieve Records</a></li>
								<li><a href="">Register For Admission</a></li>
								<li><a href="">Check/Process Payment </a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Care</a>
							<ul>
								<li><a href="">Routine Nurse/Doctor Checkup & Reporting</a></li>
								<li><a href="">Request For Additional Drugs/Test</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Death Declaration</a>
							<ul>
								<li><a href="">Route to Mortuary</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Process Discharge</a>
							<ul>
								<li><a href="">Check/Process Payment</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a href=""><span class="iconfa-calendar"></span> Accounting</a>
					<ul>
						<li class="dropdown"><a href="">Invoicing</a></li>
						<li class="dropdown"><a href="">Payment</a></li>
						<li class="dropdown"><a href="">Receipt(reprints)</a></li>
						<li class="dropdown"><a href="">GL</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href=""><span class="iconfa-picture"></span> Pharmacy</a>
					<ul>
						<li class="dropdown"><a href="">Stock & Inventory Management</a>
							<ul>
								<li><a href="">Stocking/Re-stocking</a></li>
								<li><a href="">Re-order Alert System</a></li>
								<li><a href="">Supplier Management</a></li>
								<li><a href="">Expiry Alert System</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Dispense Drugs</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href=""><span class="iconfa-hand-right"></span> Mortuary</a>
					<ul>
						<li class="dropdown"><a href="">Process and Admit</a>
							<ul>
								<li><a href="">Process Records</a></li>
								<li><a href="">Process Payments</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Body Handing</a>
							<ul>
								<li><a href="">Autopsy</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Picking</a>
							<ul>
								<li><a href="">Review Billing & Payments</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="dropdown"><a href=""><span class="iconfa-th-list"></span> Theatre</a>
					<ul>
						<li class="dropdown"><a href="">Process Patient</a>
							<ul>
								<li><a href="">Check Payment</a></li>
								<li><a href="">Schedule Date</a></li>
								<li><a href="">Assign Surgeon</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Surgery</a>
							<ul>
								<li><a href="">Pre-Surgery Routines</a></li>
								<li><a href="">Post-Surgery Routines</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="">Transfer to Ward</a></li>
					</ul>
				</li>

				
				
			</ul>
		</div><!--leftmenu-->
		
	</div><!-- leftpanel -->

	<div class="rightpanel">
		
		<ul class="breadcrumbs">
			<li><a href="dashboard.html"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
			<li>Dashboard</li>
			
		</ul>
		
		<div class="pageheader">
			<form action="results.html" method="post" class="searchbar">
				<input type="text" name="keyword" placeholder="To search type and hit enter..." />
			</form>
			<div class="pageicon"><span class="iconfa-laptop"></span></div>
			<div class="pagetitle">
				<h5>&nbsp;</h5>
				<h1>Dashboard</h1>
			</div>
		</div><!--pageheader-->
		
		<div class="maincontent">
			<div class="maincontentinner">
				<div class="row-fluid">
					<div id="dashboard-left" class="span11">
						
						<!--<h5 class="subtitle">Recently Viewed Pages</h5>-->
						<ul class="shortcuts">
							<li class="events">
								<a href="">
									<span class="shortcuts-icon iconsi-event"></span>
									<span class="shortcuts-label">OPD</span>
								</a>
							</li>
							<li class="products">
								<a href="">
									<span class="shortcuts-icon iconsi-cart"></span>
									<span class="shortcuts-label">Clinics</span>
								</a>
							</li>
							<li class="archive">
								<a href="">
									<span class="shortcuts-icon iconsi-archive"></span>
									<span class="shortcuts-label">Laboratory</span>
								</a>
							</li>
							<li class="images">
								<a href="">
									<span class="shortcuts-icon iconsi-images"></span>
									<span class="shortcuts-label">Ward</span>
								</a>
							</li>

							<li class="images">
								<a href="">
									<span class="shortcuts-icon iconsi-accounting"></span>
									<span class="shortcuts-label">Accounting</span>
								</a>
							</li>
							<li class="images">
								<a href="">
									<span class="shortcuts-icon iconsi-pharmacy"></span>
									<span class="shortcuts-label">Pharmacy</span>
								</a>
							</li>
							<li class="images">
								<a href="">
									<span class="shortcuts-icon iconsi-mortuary"></span>
									<span class="shortcuts-label">Mortuary</span>
								</a>
							</li>
							<li class="last help">
								<a href="">
									<span class="shortcuts-icon iconsi-help"></span>
									<span class="shortcuts-label">Theatre</span>
								</a>
							</li>
						</ul>
						<br /><br /><br />
					</div><!--span4-->
				</div><!--row-fluid-->
				
				
				
			</div><!--maincontentinner-->
		</div><!--maincontent-->

	</div><!--rightpanel-->

</div><!--mainwrapper-->

