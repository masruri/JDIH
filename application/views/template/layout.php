<?php require "header.php" ?>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>Pelayanan Dan Kepastian adalah Hak Semua Warga Kabupaten Kudus</strong></li>
              <li>Main office: Kominfo center Kudus</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
    <?php require "navbar.php" ?>

    <!-- end header -->
    <style type="text/css">
        input::placeholder {
            color: #009432;
            padding:5px;
        }
        select, option{
            width: 250px; 
            height: 45px;
        }
        .option {
            width: 250px; 
            height: 45px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function() {
        $('#kota').select2({
            tags: true,
            height: 50,
            });
        });
    </script>
    
     <div class="alert" style="margin-bottom: -30px">
         <span class="primary"><marquee style="text-shadow:2px 2px 4px #777; letter-spacing: 0.1em;"><h5>Selamat Datang Di Website Biro Hukum Kudus, Berikut Produk Hukum Terbaru:<span style="color:#d35400">Keputusan Bupati Nomor 243 Tahun 2018</span></h5></marquee></span>
     </div>


    <section id="featured">
      <!-- start slider -->
      <div id="da-slider" class="da-slider">
          <div class="nivo-slider">
          <!-- Slide #1 image -->
          <img src="<?php echo base_url()?>template/img/slides/nivo/bg1.jpg" alt="" title="#caption-1" />
          <!-- Slide #2 image -->
          <img src="<?php echo base_url()?>template/img/slides/nivo/bg-2.jpg" alt="" title="#caption-2" />
          <!-- Slide #3 image -->
          <img src="<?php echo base_url()?>template/img/slides/nivo/bg-3.jpg" alt="" title="#caption-3" />

          <img src="<?php echo base_url()?>template/img/slides/nivo/2.jpg" alt="" title="#caption-4" />
        </div>
        <div class="da-slide">
         <!--  <h2>Easy management</h2> -->
          <div class="search-form wow pulse animated" 
          data-wow-delay="0.8s"style="visibility: visible; animation-delay: 0.8s; animation-name: pulse;">
          <div class="pull-center">
        </div>
        <div class="container">
        <div class="row row-kosong-20" style="border:0px; margin-top:150px"></div>
        
            <div class="col-md-7" style="border:1px solid #bbb;border-radius:10px;padding:20px; background-color: #ffffff">
                <div class="row" style="text-align: center; margin-bottom: -20px; margin-top: 1px">
                    <form class="form-inline">
                          <div class="form-group">
                            <input type="text" class="form-control"  placeholder="NOMOR" style="width: 250px; height: 36px">
                             <input type="text" class="form-control"  placeholder="TAHUN" style="width: 250px; height: 36px">
                              <input type="text" class="form-control"  placeholder="TENTANG" style="width:250px; height: 36px">
                                    <select id="kota" name="kota" class="select-add-tags form-control pmd-select2-tags">
                                        <option value=""></option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Tangerang">Tangerang</option>
                                        <option value="Bekasi">Bekasi</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Semarang">Semarang</option>

                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Surabaya">Surabaya</option>
                                    </select>
                              <button class="btn btn-danger btn-large"><i class="icon-search"></i></button>
                          </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div> <!-- end slider -->
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
              <h2>Produk Hukum</h2>
            <div class="row">

              <?php foreach ($query as $row): 
                $isi = $row['tentang'];
                $ten = substr($isi, 0, 90);
              ?>

               <div class="span6" style="padding-bottom: 20px">
                <div class="about-author">
                  <a href="#" class="thumbnail align-left">
                    <img src="<?php echo base_url()?>template/img/avatar.png" alt="" /></a>
                  <h5><strong><a href="#"><?php echo $row['produk_hukum']; ?></a></strong></h5>
                  <p><?php echo $ten; ?></p>
                    <i class="icon-download-alt">&nbsp;<span style="color:#d35400"><?php echo $row['download'] ?></span>&nbsp;Downloaded</i> | 
                    <i class="icon-calendar-alt">&nbsp;<span style="color:#d35400">Di Posting:<?php echo $row['tgl']?></i>
              

                  <div class="pull-right">
                    <a href="<?php echo base_url().'file/'.$row['berkas']; ?>" target="_blank">
                     <i class="icon-cloud-download" style="font-size:15pt; color: #2980b9">&nbsp;Klik Untuk Download</i></a>
                  </div>
                </div>
              </div>

              <?php endforeach; ?>

            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="span12">
            <h4>Link<strong>Terkait</strong></h4>
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client1.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client2.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client3.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client4.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client5.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client6.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client1.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client2.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client3.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client4.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client5.png" class="client-logo" alt="" />
					</a>
              </li>
              <li>
                <a href="#">
					<img src="<?php echo base_url() ?>template/img/dummies/clients/client6.png" class="client-logo" alt="" />
					</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
   
    
    <?php require "footer.php"?>

