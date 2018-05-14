<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../favicon.ico">

<title>Biro Hukum | Login</title>
<link rel="stylesheet" href="<?php echo base_url() ?>template/admin/css/style.css"> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/admin/css/anchor.css');?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('template/admin/css/signin.css');?>">
<!-- validasi fomr login via javascrip -->
<link href="<?php echo base_url();?>template/admin/css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url()?>template/admin/js/jquery-latest.js"></script>
    <style type="text/css">
      body{
        margin:0px;
      }
      #img {
        background: url('<?php echo base_url()?>template/img/bodybg/bg5.png') left top repeat;
        padding: 80px;
      }
      #loading{
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 999;
        position: fixed;
        background: url('<?php echo base_url()?>template/admin/img/ajax-loader.gif') 50% 50% no-repeat rgb(249,249,249);
          opacity: .8;
      }
    </style>
    <script type="text/javascript">
      $(window).load(function(){
        $("#loading").fadeOut(" ");
      });
    </script>

</head>
<div id="loading"></div>
<body class="hold-transition login-page" id="img">
    <div class="login-box">
          <div class="login-box-body">
             <img src="<?php echo base_url() ?>template/admin/assets/img/LOGOKABKUDUSADMIN.png" width="350px" alt="L_kudus" class="img-responsive logo">
            <p class="login-box-msg"><b class="text-primary">SILAHKAN LOGIN</b></p><br>
               <?php $frm_login = array('onsubmit'=>'return validasi(this)');
                echo form_open('admin/login_validasi',$frm_login);?>

                  <div class="form-group has-feedback">
                    <label for="username" class="text-primary">Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback">
                    <label for="Password" class="text-primary">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>

                  <div class="form-group has-feedback text-danger">
                    <?php echo $this->session->flashdata('error') ?>
                  </div>

                  <div class="row">
                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-primary btn-block btn-flat btn-lg">LOGIN</button>
                    </div>
                 </div>

                <?php echo form_close();?>

         </div>
    </div> 
</body>
</html>

<script type="text/javascript">
    function validasi(form)
    {
    if (form.username.value==""){
        alert("Username masih kosong");
        form.username.focus();
      return (false);
    }
    if (form.password.value==""){
        alert("Password masih kosong");
        form.password.focus();
      return (false);
    }
    return (true);
    }
</script>
