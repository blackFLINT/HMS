<script type="text/javascript">
jQuery(document).ready(function(){
    // Smart Wizard     
    jQuery('#wizard').smartWizard({onFinish: onFinishCallback});
    jQuery('#wizard2').smartWizard({onFinish: onFinishCallback});
    jQuery('#wizard3').smartWizard({onFinish: onFinishCallback});
    // Active Menu
    jQuery("#left-menu li#dashboard").removeClass("active");
    jQuery("#left-menu li#opd").addClass("active");

    function onFinishCallback(){
        alert('Finish Clicked');
    } 
    jQuery('select, input:checkbox').uniform();
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
            <li><a href="#"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="forms.html">OPD</a> <span class="separator"></span></li>
            <li>Register First Time Visit</li>
            
        </ul>
        
        <div class="pageheader">
            <form action="results.html" method="post" class="searchbar">
                <input type="text" name="keyword" placeholder="To search type and hit enter..." />
            </form>
            <div class="pageicon"><span class="iconfa-pencil"></span></div>
            <div class="pagetitle">
                <!--<h5>Forms</h5>-->
                <h1>Patient Record</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="widgetbox box-inverse">
                    <!-- START OF TABBED WIZARD -->
                    <!--<h4 class="subtitle2">Tabbed Wizard</h4>
                    <br />-->
                    <form class="stdform" method="post" action="">
                        <div id="wizard3" class="wizard tabbedwizard">

                            <ul class="tabbedmenu">
                                <li>
                                    <a href="#wiz3step1">
                                        <span class="h2">FORM 1</span>
                                        <span class="label">Personal Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#wiz3step2">
                                        <span class="h2">FORM 2</span>
                                        <span class="label">Other Information</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#wiz3step3">
                                        <span class="h2">FORM 3</span>
                                        <span class="label">Payment Information</span>
                                    </a>
                                </li>
                            </ul>

                            
                            <div id="wiz3step1" class="formwiz">
                                <h4>Form 1: Personal Information</h4>

                                <p>
                                  <label>First Name</label>
                                  <input type="text" name="firstname" class="input-large" />
                                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                  Middle Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                  <input type="text" name="firstname" class="input-large" />
                              </p>

                              <p>
                                <label>Last Name</label>
                                <input type="text" name="lastname" class="input-large" />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;

                                Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <select name="selection" id="selection" class="uniformselect" style="opacity:1 !important; border: solid 1px #ccc;">
                                    <option value="">Choose One</option>
                                    <option value="1">Female</option>
                                    <option value="2">Male</option>
                                </select>
                            </p>

                            <p>
                                <label>Date of Birth</label>
                                <input type="date" name="lastname" class="input-large" />
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                
                                Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" name="firstname" class="input-large" />
                            </p>

                            <p>
                              <label>Address</label>
                              <input type="text" name="firstname" class="input-large" />
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                              Occupation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                              <input type="text" name="firstname" class="input-large" />
                          </p>


                          <p>

                            <label> Nationality </label>
                            <select name="selection" id="selection" class="uniformselect" style="opacity:1 !important; border: solid 1px #ccc;">
                                <option value="">Choose One</option>
                                <option value="1">Ghanaian</option>
                                <option value="2">Nigerian</option>
                            </select>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            Religion&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" name="firstname" class="input-large" />
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                        </p>


                    </div><!--#wiz13tep1-->

                    <div id="wiz3step2" class="formwiz">
                        <h4>Form 2: Other Information</h4> 
                        <p>
                           <label>Patient Type.</label>
                           <select name="selection" id="selection" class="uniformselect" style="opacity:1 !important; border: solid 1px #ccc;">
                            <option value="">Choose One</option>
                            <option value="1">In-Patient</option>
                            <option value="2">Out-Patient</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        Package Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select name="selection" id="selection" class="uniformselect" style="opacity:1 !important; border: solid 1px #ccc;">
                            <option value="">Choose One</option>
                            <option value="1">Cash and Carry</option>
                            <option value="2">Coporate</option>
                        </select>
                    </p>

                    <p>
                       <label>SSN No.</label>
                       <input type="text" name="firstname" class="input-large" />
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                       Marital Status &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <select name="selection" id="selection" class="uniformselect" style="opacity:1 !important; border: solid 1px #ccc;">
                        <option value="">Choose One</option>
                        <option value="1">Married</option>
                        <option value="2">Single</option>
                    </select>
                </p>

                <p>
                  <label>Area</label>
                  <input type="text" name="firstname" class="input-large" />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  Street Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="firstname" class="input-large" />
              </p>
              <p>
                  <label>City</label>
                  <input type="text" name="firstname" class="input-large" />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  Landmark &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="firstname" class="input-large" />
              </p>

              <p>
                  <label>Emergency Person</label>
                  <input type="text" name="firstname" class="input-large" />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                  Emergency No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="text" name="firstname" class="input-large" />
              </p>
              <p>
               <label>Patient Photo.</label>
               <input type="file" name="firstname" class="input-large" />
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           </p>

       </div><!--#wiz3step2-->

       <div id="wiz3step3">
        <h4>Form 3: Payment Information</h4>
        <p>
            <label> Payment Method </label>
            <select name="selection" id="selection" class="uniformselect" style="opacity:1 !important; border: solid 1px #ccc;">
                <option value="">Choose One</option>
                <option value="1">Cash</option>
                <option value="2">Health Insurance</option>
            </select>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Insurance Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="selection" id="selection" class="uniformselect" style="opacity:1 !important; border: solid 1px #ccc;">
                <option value="">Choose One</option>
                <option value="1">NHIS</option>
                <option value="2">Corporate Insurance</option>
            </select>


        </p>
        <p>
           <label>Insurance No.</label>
           <input type="text" name="firstname" class="input-large" />
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

           Expiring Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="date" name="lastname" class="input-large" />
           


       </p>





   </div><!--#wiz3step3-->

</div><!--#wizard-->
</form>

<!-- END OF TABBED WIZARD -->
</div><!--widgetcontent-->
</div><!--widget-->
</div><!--maincontent-->

</div><!--rightpanel-->

</div><!--mainwrapper-->



