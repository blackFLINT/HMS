<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#left-menu li#dashboard").addClass("active");
	jQuery("#left-menu li#opd").removeClass("active");
});
</script>

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
		
		<!-- LEFT MENU -->
		<?php echo $this->element('side_menu'); ?>
		
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

