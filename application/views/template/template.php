<?php require "header.php";?>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>We are available for any custom works this month</strong></li>
              <li>Main office: Springville center X264, Park Ave S.01</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
   <?php require "navbar.php"; ?>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2><?php echo $title;?></h2>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside class="left-sidebar">
              <div class="widget">
                <h4 class="panel-title">CARI PRODUK HUKUM</h4>
                <form class="form-group">
                  <div>
                    <input placeholder="Type something" type="text" class="form-control" style="height: 40px; width: 300px">
                  </div>
                  <div> 
                   <input placeholder="Type something" type="text" class="form-control" style="height: 40px; width: 300px">
                  </div>
                  <div class="form-group" style="height: 40px; width: 300px">
                    <select id="kota">
                    <option>Dallas Cowboys</option>
                        <option>New York Giants</option>
                        <option>Philadelphia Eagles</option>
                        <option>Washington Redskins</option>
                        <option>Chicago Bears</option>
                        <option>Detroit Lions</option>
                        <option>Green Bay Packers</option>
                        <option>Minnesota Vikings</option>
                        </select>
                  </div>
                <div>
                  <button type="submit" class="btn btn-square btn-theme">Search</button>
                </div>
                </form>
                
              </div>
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                <ul class="cat">
                  <li><i class="icon-angle-right"></i><a href="#">Web design</a><span> (20)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">Online business</a><span> (11)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">Marketing strategy</a><span> (9)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">Technology</a><span> (12)</span></li>
                  <li><i class="icon-angle-right"></i><a href="#">About finance</a><span> (18)</span></li>
                </ul>
              </div>
              
              <!-- <div class="widget">
                <h5 class="widgetheading">Popular tags</h5>
                <ul class="tags">
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Trends</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Internet</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Development</a></li>
                </ul>
              </div> -->
            </aside>
          </div>

          <div class="span8">
            <article>
              <div class="row">
                <div class="span8">
                <!-- 
                  <div class="about-author">
                    <a href="#" class="thumbnail align-left"><img src="<?php echo base_url()?>template/img/avatar.png" alt="" /></a>
                    <h5><strong><a href="#">John doe</a></strong></h5>
                    <p>
                      Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper ad qui, est rebum nulla argumentum ei.
                    </p>
                  </div> -->
                  <?php include "main_content.php"; ?>
            </div>
          </div>
        </article>
            <!-- author info -->
    </section>
    
  <!-- include footer -->
  <?php require "footer.php"; ?>

   <script type="text/javascript">
        $(document).ready(function() {
        $('#kota').select2({
            tags: true,
            height: 50,
            });
        });
    </script>