    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-0 col-lg-5 col-md-0">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            
                            <div class="col-lg-12">
                                <div class="p-4">
                                        <div class="text-center">
                                            <h1 class="h3 text-gray-900 mb-0"><strong>Sistem Informasi Antrian</h1>
                                            <h1 class="h3 text-gray-900 mb-3"><strong>BPKAD Way Kanan</h1>
                                        </div>
                                        <div class="text-center mb-3">
                                            <div id="logo">
                                                <img src="<?php echo base_url('assets/img/logo_login.png'); ?>" class="img">
                                            </div>
                                        </div>
                                    <hr>
                                    <form class="user" method="POST" action="<?php echo site_url('welcome/validasi'); ?>" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="username" pattern="[0-9A-Za-z .,-]{3,50}" placeholder="Username" maxlength="50">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                name="password" pattern="[0-9A-Za-z .,-]{3,50}" placeholder="Password" required="" maxlength="50">
                                        </div>
                                        <br>
                                        <a href="" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                         
                                    </form>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
