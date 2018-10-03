<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SI Administrasi | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" >
		<link rel="stylesheet" href="<?php echo base_url('asset/css/style.css')?>">
        <!-- Font Awesome Icons -->
        <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <!-- Theme style -->
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet">     
        
    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
            </div><!-- /.login-logo -->
            <div class="login-form">
			<h1><b>SI</b> Administrasi</h1>
                <!--<p class="login-box-msg">Masuk untuk melakukan perubahan </p>-->
                <form action="<?php echo site_url('Login/proses'); ?>" method="post">
                    <?php
                    if (validation_errors() || $this->session->flashdata('result_login')) {
                        ?>
                        <div class="alert alert-error">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Warning!</strong>
                            <?php echo validation_errors(); ?>
                            <?php echo $this->session->flashdata('result_login'); ?>
                        </div> 
                    <?php } ?>
                    <div class="form-group ">
                        <input type="text" name="username" class="form-control" placeholder="Username"/>
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="form-group log-status">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div><!-- /.col -->
                    </div>
                </form>
				<br/>
				<form method="post" action ="<?php echo site_url('user'); ?>">
				<div class="row">
                        <div class="col-xs-12">
							<button type="submit" class="btn btn-primary btn-block btn-flat">Guest</button>
                        </div><!-- /.col -->

                    </div>
				</form>
        </div><!-- /.login-box -->
    </body>
</html>