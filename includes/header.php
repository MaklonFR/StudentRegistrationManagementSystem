<header class="navbar page-header darkHeader border0 navbar-expand-lg">
                    <div class="container">
                         <img src="images/logo1.ico" width="35" alt="" class=" img-fluid rounded-circle">
                         <a class="navbar-brand d-inline-flex align-items-center" href="#">                           
                        
                         <span class="text-white fs-1x font500">PPDB SMKN 1 KUWUS</span>
                        </a>
                        <ul class="nav flex-row order-lg-2 ml-auto nav-icons">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" id="dropdown-notify" data-toggle="dropdown">
                                    <i class="icon-Envelope"></i>
                                    <span class="badge badge-primary d-block text-white"><span id="jj"> </span> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right no-padding" aria-labelledby="dropdown-notify">
                                    <div class="dropdown-header-top flex d-flex align-items-center">
                                        <span class="d-flex flex text-dark dropdown-title">Informasi</span>
                                        <a class="d-flex d-inline-flex text-primary">
                                            <i class="fas fa-check fs10 mr-2 d-flex d-inline-flex align-self-center"></i> 
                                            Update sampai saaat ini
                                        </a>
                                    </div>
                                    <div style="height: 300px">
                                        <div class="slim-scroll">
                                            <ul class="list">

                                               <li class="list-item align-items-center">
                                                    <a href="#" class="list-link"></a>
                                                    <div class="list-thumb avatar avatar50 bg-teal text-white rounded-circle">
                                                        <i class="icon-Paypal"></i>
                                                    </div>
                                                    <div class="list-body">
                                                        <span class="list-title">
                                                        Total Pendaftar
                                                        </span>
                                                        <span class="list-content fs15">
                                                        <b> <span id="jj1"> </span> </b>
                                                        </span>
                                                        <span class="list-meta">
                                                            18 Hours ago
                                                        </span>
                                                    </div>
                                                </li><!--item-->
                                                <li class="list-item align-items-center unread">
                                                    <a href="#" class="list-link"></a>
                                                    <div class="list-thumb avatar avatar50 bg-info text-white rounded-circle">
                                                        <i class="icon-User"></i>
                                                    </div>
                                                    <div class="list-body">
                                                        <span class="list-title">
                                                            Laki-Laki
                                                        </span>
                                                        <span class="list-content fs15">
                                                           <b> <span id="oo"> </span> </b>
                                                        </span>
                                                        <span class="list-meta">
                                                            new update
                                                        </span>
                                                    </div>
                                                </li><!--item-->
                                                <li class="list-item align-items-center unread">
                                                    <a href="#" class="list-link"></a>
                                                    <div class="list-thumb avatar avatar50 bg-warning text-white rounded-circle">
                                                        <i class="icon-User"></i>
                                                    </div>
                                                    <div class="list-body">
                                                        <span class="list-title">
                                                            Perempuan
                                                        </span>
                                                        <span class="list-content fs15">
                                                            <b> <span id="pp"> </span></b>
                                                        </span>
                                                        <span class="list-meta">
                                                            new update
                                                        </span>
                                                    </div>
                                                </li><!--item-->
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown user-dropdown align-items-center">
                                <a class="nav-link" href="#" id="dropdown-user" role="button" data-toggle="dropdown">
                                    <span class="user-states states-online">
                                        <img src="images/avatar4.png" width="35" alt="" class=" img-fluid rounded-circle">
                                    </span>
                                    <span class="ml-2 h-lg-down dropdown-toggle">
                                        Hi, <?php echo $user['Level']; ?>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                                    <div class="text-center p-3 pt-0 b-b mb-5">
                                        <span class="mb-0 d-block font300 text-title fs-1x">Hi! <span class="font700"><?php echo $user['Email']; ?></span></span>
                                        <span class="fs12 mb-0 text-muted">Administrator</span>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="icon-User"></i>My Profile</a>
                                    <a class="dropdown-item" href="#"><i class="icon-Gear"></i> Settings<span class="badge badge-text text-danger-active bg-danger-light ml-2">Update</span></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="logout"><i class="icon-Power"></i> logout</a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </header>