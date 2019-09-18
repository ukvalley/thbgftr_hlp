
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="index.html">The Big Future</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">
                            <img src="{{url('/')}}/customer/assets/images/users/avatar.jpg" alt="John Doe"/>
                        </a>
                        <div class="profile">
                            <div class="profile-image">
                                <img src="{{url('/')}}/customer/assets/images/users/avatar.jpg" alt="John Doe"/>
                            </div>
                            <div class="profile-data">
                                 <?php
            $user = Sentinel::check();
          ?>
                                <div class="profile-data-name">{{$user->user_name or 'User'}}</div>
                                <div class="profile-data-title">Online</div>
                            </div>
                            <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div>
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="active">
                        <a href="{{url('/')}}/admin/dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>                        
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">My Profile</span></a>
                        <ul>
                            <li><a href="{{url('/')}}/admin/profile_edit"><span class="fa fa-image"></span>Change Profile</a></li>
                            <li><a href="{{url('/')}}/admin/bank_edit"><span class="fa fa-user"></span>Change Bank Details</a></li>
                            <li><a href="{{url('/')}}/admin/change_password"><span class="fa fa-users"></span> Change Password</a></li>
                            <li class="xn-openable">
                                <a href="{{url('/')}}/admin/change_trans_password"><span class="fa fa-clock-o"></span>Change Transaction Pin</a>
                                <ul>
                                    
                                    <li><a href="{{url('/')}}/admin/forgot_tpin"><span class="fa fa-align-justify"></span>Forget Transaction Pin</a></li>
                                </ul>
                            </li>
                                                      
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Team & Network</span></a>
                        <ul>
                            <li><a href="{{url('/')}}/admin/self_team">My Team</a></li>
                            <li><a href="{{url('/')}}/admin/level_tree?id={{$user->email}}"> Geneology Tree</a></li>
                        </ul>
                    </li>
                   
                    <li class="xn-title">Components</li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">Provide Help</span></a>                        
                        <ul>
                            <li><a href="{{url('/')}}/admin/user_transaction_"><span class="fa fa-heart"></span>Provide help history</a></li>                            
                          </ul>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Get Help</span></a>
                        <ul>
                           
                            <li><a href="{{url('/')}}/admin/withdrawl"><span class="fa fa-file-text-o"></span>  Get Help</a></li>
                            <li><a href="{{url('/')}}/admin/user_transaction"><span class="fa fa-list-alt"></span> Get help history</a></li>
                            
                        </ul>
                    </li>
                    <li class="xn-openable">
                        <a href="{{url('/')}}/admin/u_work_income"><span class="fa fa-table"></span> <span class="xn-text"> Accept payments</span></a>
                      
                    </li>
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Epin Management</span></a>
                        <ul>
                            <li><a href="{{url('/')}}/admin/unused_pin"><span class="xn-text">Activate user</span></a></li>
                            <li><a href="{{url('/')}}/admin/transfer_epin"><span class="xn-text">Transfer Epin</span></a></li>
                           
                        </ul>
                    </li>                    
                         <li class="xn-openable">
                        <a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Income Repor</span></a>
                        <ul>
                            <li><a href="{{url('/')}}/admin/u_daily_income"><span class="xn-text">Growth Income</span></a></li>
                            <li><a href="{{url('/')}}/admin/user_level_income"><span class="xn-text"> Level Income</span></a></li>
                           
                        </ul>
                    </li>                     
                 <li class="xn-openable">
                        <a href="{{url('/')}}/admin/u_support"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Support</span></a>
                    </li>                     
                <li class="xn-openable">
                        <a href="{{url('/')}}/admin/logout"><span class="fa fa-bar-chart-o"></span> <span class="xn-text"> Logout</span></a>
                    </li>   
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->