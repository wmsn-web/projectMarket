<div class="col-lg-3 col-md-4 sideblock">
        <div id="sidebar-wrapper" class="d-none d-md-block">
            <div id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <!-- <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-icon dropicon"><i class="fa fa-angle-down"></i></span>
                            <span class="sidebar-title droptext">Management</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="#"><i class="fa fa-caret-right"></i>Users</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Roles</a></li>
                        </ul>
                    </li> -->
                    <li>
                        <a href="<?php echo base_url()."campaign"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Campaign</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."advertisement"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-audio-description" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Advertisement</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-icon dropicon"><i class="fa fa-angle-down"></i></span>
                            <span class="sidebar-title droptext">Items</span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="<?php echo base_url()."items"; ?>"><i class="fa fa-archive" aria-hidden="true"></i>Items Upload</a></li>
                            <li><a href="<?php echo base_url()."items_review"; ?>"><i class="fa fa-commenting" aria-hidden="true"></i>Items Review</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="<?php echo base_url()."store"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."product_inventory"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-product-hunt" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Product</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="<?php echo base_url()."subscription"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-diamond" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Subscription</span>
                        </a>
                    </li>
                </ul>
            </div>            
        </div>



        <!--Mobile For Navigation-->

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-md-none">
              <a class="navbar-brand" href="#">D Market</a>
                <div class="profile probtn">
                    <img src="assets/images/1.jpg"/>
                </div>     
                <span class="logblock"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</span>           
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li> -->
                    <li>
                        <a href="<?php echo base_url()."campaign"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Campaign</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."advertisement"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-audio-description" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Advertisement</span>
                        </a>
                    </li>
                    <li>
                        <a class="accordion-toggle collapsed toggle-switch" data-toggle="collapse" href="#submenu-2">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            
                            <span class="sidebar-title droptext">Items</span>
                            <span class="sidebar-icon dropicon"><i class="fa fa-angle-down"></i></span>
                            <b class="caret"></b>
                        </a>
                        <ul id="submenu-2" class="panel-collapse collapse panel-switch" role="menu">
                            <li><a href="<?php echo base_url()."items"; ?>"><i class="fa fa-archive" aria-hidden="true"></i>Items Upload</a></li>
                            <li><a href="<?php echo base_url()."items_review"; ?>"><i class="fa fa-commenting" aria-hidden="true"></i>Items Review</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."product_inventory"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-product-hunt" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."store"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-shopping-basket" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Store</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."subscription"; ?>">
                            <span class="sidebar-icon"><i class="fa fa-diamond" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Subscription</span>
                        </a>
                    </li>
                </ul>
              </div>
            </nav>

        <!--End Navigation-->

    </div>
