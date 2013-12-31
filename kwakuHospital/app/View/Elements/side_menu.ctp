<div class="leftmenu" id="left-menu">        
    <ul class="nav nav-tabs nav-stacked">
        <li class="nav-header">Menus</li>
        <li id="dashboard"><a href="../Dashboard"><span class="iconfa-laptop"></span> Dashboard</a></li>
        <li id="opd" class="dropdown"><a href=""><span class="iconfa-user"></span> OPD</a>
            <ul>
                <li class="dropdown"><a href="#">Process Patients Record</a>
                    <ul>
                        <li><?php echo $this->Html->link('Register First Time Visit', array('controller'=>'Dashboard', 'action' => 'form2') ,array('target' => '_self', 'escape' => false));?></li>
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