<header>
      <div class="container">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
               
              </ul>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo"  style="margin-top: -52px">
              <a href="index.html"><img src="<?php echo base_url()?>template/img/KUDUS.jpeg" alt="" class="logo" width="70" width="100" /></a>
              <h5 style="text-shadow:2px 2px 4px #777; color:#009432">&nbsp;&nbsp;Jaringan Dokumentasi & Informasi Hukum</h5>
              <h1 class="span6" style="font-size: 17pt; font-weight: 'bold'; text-shadow:2px 2px 4px #777"><span style="color:#EE5A24; font-weight: bold"><b style="font-size: 20pt; color:#009432">J</b>DIH&nbsp;</span><span style="color:#2c3e50">Kabupaten Kudus</span></h1>
            </div>
          </div>
          <div class="span12" style="margin-top: -35px">
            <div class="navbar navbar-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="<?php echo base_url('home')?>">Beranda</a>
                    </li>
                    <li class="dropdown">
                      <a href="#">Tentang Kami <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('visimisi')?>">Visi Misi</a></li>
                        <li><a href="<?php echo base_url('struktur')?>">Struktur Organisasi</a></li>
                        <li><a href="components.html">Tupoksi</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Himpunan Pertaturan <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('himpunan_perundangan')?>">Himpunan Perundangan </a></li>
                        <li><a href="pricingbox.html">Prodak Hukum </a></li>
                      </ul>
                    </li>
                   <!--  <li class="dropdown">
                      <a href="#">Direktori Hukum <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="portfolio-2cols.html">Tatacara Penyusuanan Daerah</a></li>
                        <li><a href="portfolio-2cols.html">Tatacara Penyusuanan Daerah</a></li>
                        <li><a href="portfolio-2cols.html">Tatacara Penyusuanan Daerah</a></li>
                        <li><a href="portfolio-2cols.html">Tatacara Penyusuanan Daerah</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Berita <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="blog-right-sidebar.html">Perjanjian Kerjasama</a></li>
                      </ul>
                    </li> -->
                     <li class="dropdown">
                      <a href="<?php echo base_url('galery') ?> ">Galery <i></i></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url('contact') ?>">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>