<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/iCheck/square/blue.css">
    <script src="<?= base_url() ?>assets/js/sweetalert2-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page bg-aqua">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= base_url() ?>assets/index2.html"><b>Log In</b> Apotek</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Log in untuk mengakses sitem</p>

            <form action="<?= base_url() ?>auth/login" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username..">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control password" name="password" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="custom-control custom-checkbox small">
                            <label>
                                <input type="checkbox" class="custom-control-input form-checkbox" id="customCheck"> Lihat Password
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Log In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.password').attr('type', 'text');
                } else {
                    $('.password').attr('type', 'password');
                }
            });
        });
    </script>
    <script>
        <?php if ($this->session->flashdata('gagal')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal untuk login!',
                text: 'silahkan tunggu konfirmasi dari admin',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('tidakaktif')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Maaf akun anda tidak aktif!',
                text: 'silahkan tunggu konfirmasi dari admin',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('passwordsalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Password anda masukkan salah!',
                text: 'silahkan coba lagi',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('usernamesalah')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Username anda masukkan salah!',
                text: 'silahkan coba lagi',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('logout')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil logout',
                text: 'silahkan login untuk masuk kembali',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('gantipass')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Anda berhasil ganti password!',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php elseif ($this->session->flashdata('gagal')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Maaf anda gagal mengganti password!',
                showConfirmButton: true,
                // timer: 1500
            })
        <?php endif ?>
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url() ?>assets/plugins/iCheck/icheck.min.js"></script>
    <!-- <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script> -->
</body>

</html>